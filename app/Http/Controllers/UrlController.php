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
        $urls = Url::where('visible', true)->get();
        return view('web.pages.Home', compact('urls'));
    }
}
