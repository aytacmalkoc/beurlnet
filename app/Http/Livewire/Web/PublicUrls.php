<?php

namespace App\Http\Livewire\Web;

use App\Models\Url;
use Livewire\Component;

class PublicUrls extends Component
{
    public $urls = [];

    public function mount()
    {
        $this->urls = Url::where('visible', true)->get();
    }

    public function render()
    {
        return view('web.components.public-urls');
    }
}
