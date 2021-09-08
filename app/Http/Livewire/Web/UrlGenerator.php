<?php

namespace App\Http\Livewire\Web;

use App\Models\Url;
use Hidehalo\Nanoid\Client;
use Livewire\Component;

class UrlGenerator extends Component
{
    public string $url = '';
    public bool $visible = false;
    public string $result = '';

    public function updated($field)
    {
        $this->validateOnly($field, [
            'url' => 'required|url',
            'visible' => 'boolean'
        ]);
    }

    public function createUrl()
    {
        $this->validate();
        $this->result = '';

        $client = new Client();
        $shortened = $client->generateId(8);

        $url = Url::create([
            'original' => $this->url,
            'shortened' => $shortened,
            'full_url' => \url($shortened),
            'visible' => $this->visible
        ]);

        $this->result = $url->withoutHttps('full_url');
        $this->clear();
    }

    private function clear()
    {
        $this->url = '';
        $this->visible = false;
    }

    public function render()
    {
        return view('web.components.url-generator');
    }
}
