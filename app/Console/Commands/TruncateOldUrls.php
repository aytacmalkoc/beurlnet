<?php

namespace App\Console\Commands;

use App\Models\Url;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class TruncateOldUrls extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'truncate:urls';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sona erme tarihi geçen tüm verileri siler';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $count = 0;
        $urls = Url::all();

        foreach ($urls as $url) {
            if (now() >= $url->created_at->addDay(7)) {
                $url->delete();
                $count++;
            }
        }

        if ($count > 0) {
            \url_counter('deleted');
            
            Log::channel('url')->notice("Tarihi geçen {$count} adet url temizlendi.");
        }

    }
}
