<?php

namespace App\Mail;

use App\User;
use App\Presensi;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifPresensiMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $presensi;
    public $appName;

    /**
     * Create a new message instance.
     *
     * @param User $user
     * @param Presensi $presensi
     * @param string $appName
     * @return void
     */
    public function __construct(User $user, Presensi $presensi, $appName)
    {
        $this->user = $user;
        $this->presensi = $presensi;
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

        return $this->view('account.presensi.notif_send_mail')
            ->subject('Presensi Masuk Berhasil')
            ->from('info@rumahscopusfoundation.com', $this->appName)
            ->attach($logoPath, ['mime' => 'image/png']);
    }
}
