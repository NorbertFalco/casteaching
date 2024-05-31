<?php

namespace App\Console\Commands;

use App\Notifications\VideoCreated;
use Illuminate\Console\Command;

class TestSendVideoCreadEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:videocreatednotfication';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'bla bla bla';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        notification::route('mail', 'norbertfalco@iesebre.com')->notify(new VideoCreated(create_sample_video()));
    }
}
