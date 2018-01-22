<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Crypt;

class RegisteredUsers extends Mailable
{
    use Queueable, SerializesModels;
    protected $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    public function build()
    {
        return $this->markdown('emails.newUsers')
                    ->with([
                            'userEmail'=>$this->user->email,
                            'userName'=>$this->user->name." ".$this->user->surname,
                            'userPassword'=>$this->user->userName
                        ]);
    }
}
