<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use app\Mail\ResetPassword;

class TestEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $data;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        $email = new TestEmailJob();
        Mail::to($this->data['email'])->send($email);
        // $email=new ResetPassword();
        // Mail::to($this->data['email'])->send($email);
        // Mail::send('email.forgotPassMail', ['token' => $this->data['token']], function ($message)  {
        //     $message->from('ishusingh672001@gmail.com');
        //     $message->to($this->data['email']);
        //     $message->subject('Reset password');
        // });
    }
}
