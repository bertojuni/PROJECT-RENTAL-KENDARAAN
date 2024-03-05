<?php

namespace App\Mail;

use App\ScopusCamp;
use App\CategoriesScopusCamp; // Import model CategoriesScopusCamp
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ScopusCampUpdateDiterimaMail extends Mailable
{
    use Queueable, SerializesModels;

    public $scopuscamp;
    public $appName;
    public $campName; // Property untuk menyimpan nama camp
    public $status; // Property untuk menyimpan status

    /**
     * Create a new message instance.
     *
     * @param ScopusCamp $scopuscamp
     * @param string $appName
     * @return void
     */
    public function __construct(ScopusCamp $scopuscamp, $appName)
    {
        $this->scopuscamp = $scopuscamp;
        $this->appName = $appName;

        // Mengambil informasi tambahan
        // $camp = CategoriesScopusCamp::find($scopuscamp->categories_scopuscamp_id);
        // if ($camp) {
        //     $this->campName = $camp->camp;
        // } else {
        //     $this->campName = 'Nama Camp Tidak Ditemukan';
        // }

        // Menyimpan status dari model ScopusCamp
        $this->status = $scopuscamp->status;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $logoPath = public_path('assets/img/LogoRSC.png');

        $mail = $this->view('account.scopuscamp.mail_diterima')
            ->subject('Pendaftaran Scopus Camp Berhasil Diterima')
            ->from('info@rumahscopusfoundation.com', $this->appName)
            ->attach($logoPath, ['mime' => 'image/png']);

        return $mail;
    }
}
