<?php

namespace App\Console\Commands;

use App\Http\Controllers\Controller;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class SendAyat extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:ayat';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'handle sending the ayat to the telegram bot';

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
        $test = new Controller();
        $test->Send_Aya();
        Log::info("Sending Successful");
    }
}
