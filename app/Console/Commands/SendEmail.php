<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;
use App\Presensi;
use Illuminate\Support\Facades\Mail;
use App\Mail\UpdatePresensiMail;
use App\Mail\NotifPresensiMail;

class SendEmail extends Command
{
    protected $signature = 'send:email';
    protected $description = 'Send emails based on schedule';

    public function handle()
    {
        // Retrieve presensi data for the scheduled email
        $presensiScheduled = Presensi::where(/* Your conditions here for scheduled email */)->first();

        if ($presensiScheduled) {
            $userScheduled = User::findOrFail($presensiScheduled->user_id);
            $appName = 'Rumah Scopus Foundation';

            // Send scheduled update email
            Mail::to($userScheduled->email)->send(new UpdatePresensiMail($userScheduled, $presensiScheduled, $appName));

            // Replace the following lines with your actual logic
            $presensi_masuk_scheduled = // logic to determine $presensi_masuk_scheduled;
                $presensi_pulang_scheduled = // logic to determine $presensi_pulang_scheduled;
                $isAfterNotificationTimeScheduled = now()->greaterThanOrEqualTo(now()->format('Y-m-d') . ' 10:02:00');

            if ($presensi_masuk_scheduled && $presensi_pulang_scheduled && $isAfterNotificationTimeScheduled) {
                // Send scheduled notification email
                Mail::to($userScheduled->email)->send(new NotifPresensiMail($userScheduled, $presensiScheduled, $appName));
            }
        }

        // The following code seems to be related to a different context, possibly a web request
        // You should adapt it based on the actual context and routes

        // Example: Assuming this code is within a controller method
        $presensiWebRequest = // logic to retrieve $presensi from the web request;
            $userWebRequest = User::findOrFail($presensiWebRequest->user_id);

        if ($presensiWebRequest) {
            $appName = 'Rumah Scopus Foundation';

            // Send web request update email
            Mail::to($userWebRequest->email)->send(new UpdatePresensiMail($userWebRequest, $presensiWebRequest, $appName));

            // Replace the following lines with your actual logic
            $presensi_masuk_web = $request->input('status') !== null;
            $presensi_pulang_web = $request->input('status_pulang') == null;
            $isAfterNotificationTimeWeb = now()->greaterThanOrEqualTo(now()->format('Y-m-d') . ' 10:02:00');

            if ($presensi_masuk_web && $presensi_pulang_web && $isAfterNotificationTimeWeb) {
                // Send web request notification email
                Mail::to($userWebRequest->email)->send(new NotifPresensiMail($userWebRequest, $presensiWebRequest, $appName));
            }

            // Redirect response for web request
            return redirect()->route('account.presensi.index')->with('success', 'Data Presensi Karyawan Berhasil Disimpan!');
        } else {
            // Redirect response for web request
            return redirect()->route('account.presensi.index')->with('error', 'Data Presensi Karyawan Gagal Disimpan!');
        }
    }
}
