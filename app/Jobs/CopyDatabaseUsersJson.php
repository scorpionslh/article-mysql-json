<?php

namespace App\Jobs;

use App\Models\Users;
use App\Models\UsersJson;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CopyDatabaseUsersJson implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        ini_set('memory_limit', '-1');
        $data = Users::with('config', 'address', 'contact')->get()->toArray();
    
        foreach ($data as $k) {
            $json = new UsersJson();
            $json->name = $k['name'];
            $json->email = $k['email'];
            $json->password = $k['password'];
            $json->address = json_encode($k['address']);
            $json->config = json_encode($k['config']);
            $json->contact = json_encode($k['contact']);
            $json->save();
        }
    }
}
