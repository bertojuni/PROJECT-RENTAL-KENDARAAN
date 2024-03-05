<?php

namespace App\Mail;

use App\Karir;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class KarirCreateMail extends Mailable
{
    use Queueable, SerializesModels;

    public $karir;
    public $appName;

    /**
     * Create a new message instance.
     *
     * @param Karir $user
     * @param string $appName
     * @return void
     */
    public function __construct(Karir $karir, $appName)
    {
        $this->karir = $karir;
        $this->appName = $appName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $logoPath = public_path('assets/img/LogoRSC.png');

        $mail = $this->view('karir.send_email_sukses')
            ->subject('Lamaran Berhasil Terkirim')
            ->from('info@rumahscopusfoundation.com', $this->appName)
            ->attach($logoPath, ['mime' => 'image/png']);
    }
}
