<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class confirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $code;
    public function __construct($code)
    {
        $this->disc = $code;
    }

    public function build()
    {
      return $this->view('mail')->   // опять смотри папку views/mail файла discount.blade.php
      with([
        'promo' => $this->disc,
      ])
      ->subject('');
    }
}
