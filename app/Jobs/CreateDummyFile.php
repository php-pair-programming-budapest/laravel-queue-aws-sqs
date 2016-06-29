<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateDummyFile extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $_message;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        $this->_message = $message;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $data = time() . ' -- ' . rand(1, 1000) . $this->_message . "\n";
        file_put_contents('dummyfile.txt', $data, FILE_APPEND);
    }
}
