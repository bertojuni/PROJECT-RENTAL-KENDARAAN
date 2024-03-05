<?php

namespace App\Mail;

use App\User;
use App\Gaji;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GajiSuccessMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $gaji;
    public $appName;
    public $isTerbayar;

    /**
     * Create a new message instance.
     *
     * @param User $user
     * @param Gaji $gaji
     * @param string $appName
     * @param bool $isTerbayar
     * @return void
     */
    public function __construct(User $user, Gaji $gaji, $appName, $isTerbayar)
    {
        $this->user = $user;
        $this->gaji = $gaji;
        $this->appName = $appName;
        $this->isTerbayar = $isTerbayar;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $logoPath = public_path('assets/img/LogoRSC.png');

        $mail = $this->view('account.gaji.send_email_sukses')
            ->subject('Pembayaran Gaji Berhasil')
            ->from('info@rumahscopusfoundation.com', $this->appName)
            ->attach($logoPath, ['mime' => 'image/png']);
    }
}
