<?php

namespace App\Mail;

use App\Karir;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class KarirUpdateMail extends Mailable
{
    use Queueable, SerializesModels;

    public $karir;
    public $appName;
    public $isStatus;

    /**
     * Create a new message instance.
     *
     * @param Karir $user
     * @param string $appName
     * @param bool $isTerbayar
     * @return void
     */
    public function __construct(Karir $karir, $appName, $isStatus)
    {
        $this->karir = $karir;
        $this->appName = $appName;
        $this->isStatus = $isStatus;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $logoPath = public_path('assets/img/LogoRSC.png');

        $mail = $this->view('karir.update_email_sukses')
            ->subject('Panggilan Interview')
            ->from('info@rumahscopusfoundation.com', $this->appName)
            ->attach($logoPath, ['mime' => 'image/png']);
    }
}
