<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Hidehalo\Nanoid\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Hidehalo\Nanoid\GeneratorInterface;

class UrlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('homepage', ['public_links' => Url::where('public', true)->limit(12)->get() ?? []]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $client = new Client();
        $short_url = $client->generateId(8);

        return $this->store((object)[
            'url' => $request->url,
            'short_url' => $short_url,
            'public' => $request->public || false
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  $data
     * @return \Illuminate\Http\Response
     */
    public function store($data)
    {
        Url::insert([
            'url' => $data->url,
            'short_url' => $data->short_url,
            'public' => $data->public,
            'created_at' => now()
        ]);

        \url_counter('created');

        Log::channel('url')->info("Yeni bir url eklendi. [https://beurl.net/{$data->short_url}]");

        return response()->json("beurl.net/{$data->short_url}");
    }

    /**
     * Display the specified resource.
     *
     * @param  $url
     * @return \Illuminate\Http\Response
     */
    public function show($short_url)
    {
        $url = Url::where('short_url', $short_url)->first();

        if ($url) {
            \url_counter('visited');
            
            Log::channel('url')->info("Url yönlendirildi. [https://beurl.net/{$short_url} => {$url->url}]");
    
            if (!array_key_exists('scheme', parse_url($url->url))) {
                return redirect("https://{$url->url}");
            }else {
                return redirect($url->url);
            }
        }

        return abort(404, 'Bağlantı bulunamadı. Bu bağlantı silinmiş olabilir.');

    }
}
