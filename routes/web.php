<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Middleware\CheckTestimoniToken;

Route::get('/', 'Auth\LoginController@showLoginForm');

// Recrutment

Auth::routes();

/**
 * account
 */
Route::prefix('account')->group(function () {
    // karir
    Route::get('/karir', 'account\KarirController@index')->name('karir.index');
    Route::get('/karir/list', 'account\KarirController@list')->name('karir.list');
    Route::get('/karir/detail/{id}', 'account\KarirController@detail')->name('karir.detail');
    Route::post('/karir/terkirim', 'account\KarirController@store')->name('karir.store');
    Route::get('/karir/{id}/edit', 'account\KarirController@edit')->name('karir.edit');
    Route::post('/karir/update/{id}', 'account\KarirController@update')->name('karir.update');
    Route::get('/karir/search', 'account\KarirController@search')->name('karir.search');

    //reset password
    Route::get('formemail/reset', 'Auth\ResetPasswordController@showResetForm')->name('formemail.reset');
    Route::get('newpassword/reset', 'Auth\ResetPasswordController@formpassword')->name('newpassword.reset');
    Route::post('cekemail/reset', 'Auth\ResetPasswordController@resetPassword')->name('cekemail.reset');

    //dashboard account
    Route::get('/dashboard', 'account\DashboardController@index')->name('account.dashboard.index');

    // pengguna
    Route::get('/pengguna', 'account\PenggunaController@index')->name('account.pengguna.index');
    Route::get('/pengguna/create', 'account\PenggunaController@create')->name('account.pengguna.create');
    Route::post('/pengguna', 'account\PenggunaController@store')->name('account.pengguna.store');
    Route::get('/pengguna/{id}/edit', 'account\PenggunaController@edit')->name('account.pengguna.edit');
    Route::get('/pengguna/{id}/detail', 'account\PenggunaController@detail')->name('account.pengguna.detail');
    Route::put('/pengguna/{id}', 'account\PenggunaController@update')->name('account.pengguna.update');
    Route::delete('/pengguna/{id}', 'account\PenggunaController@destroy')->name('account.pengguna.destroy');
    Route::get('/pengguna/search', 'account\PenggunaController@search')->name('account.pengguna.search');


    // routes/web.php

    //download excel
    //Route::get('/account/laporan-semua/download-excel', 'account\LaporanSemuaController@downloadExcel')->name('account.laporan-semua.download-excel');
    //Route::get('/account/laporan-semua/export-users-to-excel', 'account\LaporanSemuaController@exportUsersToExcel')->name('account.laporan-semua.export-users-to-excel');

    //profil
    Route::get('/profil/{id}/show', 'account\ProfilController@show')->name('account.profil.show');
    Route::put('/profil/update/{id}', 'account\ProfilController@update')->name('account.profil.update');
    Route::get('/profil/{id}/password', 'account\PenggunaController@password')->name('account.profil.password');
    Route::post('/profil/{id}/resetpassword', 'account\PenggunaController@resetPassword')->name('account.profil.resetpassword');

    // download pdf
    Route::get('account/laporan_semua/download-pdf', 'account\LaporanSemuaController@downloadPdf')->name('account.laporan_semua.download-pdf');
    Route::get('/account/laporan-credit/download-pdf', 'account\LaporanCreditController@downloadPdf')->name('account.laporan_credit.download-pdf');
    Route::get('/account/laporan-debit/download-pdf', 'account\LaporanDebitController@downloadPdf')->name('account.laporan_debit.download-pdf');
    Route::get('account/laporan_neraca/download-pdf', 'account\NeracaController@downloadPdf')->name('account.laporan_neraca.download-pdf');

    //penyewaan
    Route::get('penyewaan/search', 'account\PenyewaanController@search')->name('account.penyewaan.search');
    Route::delete('account/penyewaan/{id}', 'PenyewaanController@destroy')->name('account.penyewaan.destroy');
    Route::get('/account/penyewaan/create', 'account\PenyewaanController@create')->name('account.penyewaan.create');
    Route::post('/account/penyewaan/store', 'account\PenyewaanController@store')->name('account.penyewaan.store');
    Route::get('account/penyewaan/{id}/edit', 'account\PenyewaanController@edit')->name('account.penyewaan.edit');
    Route::put('account/penyewaan/{id}', 'account\PenyewaanController@update')->name('account.penyewaan.update');
    Route::Resource('/penyewaan', 'account\PenyewaanController', ['as' => 'account']);
    Route::get('penyewaan/{id}/detail', 'account\PenyewaanController@detail')->name('account.penyewaan.detail');
    Route::get('/account/laporan_penyewaan/download-pdf', 'account\PenyewaanController@downloadPdf')->name('account.laporan_penyewaan.download-pdf');
    Route::get('/penyewaan/pdf/{id}', 'account\PenyewaanController@detailPDF')->name('pdf.show');

    //tambah barang
    Route::get('/tambah_barang/search', 'account\TambahBarangController@search')->name('account.tambah_barang.search');
    Route::Resource('/tambah_barang', 'account\TambahBarangController', ['as' => 'account']);
    Route::delete('account/tambah_barang/{id}', 'TambahBarangController@destroy')->name('account.tambah_barang.destroy');

    //categories debit
    Route::get('/categories_debit/search', 'account\CategoriesDebitController@search')->name('account.categories_debit.search');
    Route::Resource('/categories_debit', 'account\CategoriesDebitController', ['as' => 'account']);
    Route::delete('account/categories_debit/{id}', 'CategoriesDebitController@destroy')->name('account.categories_debit.destroy');

    //debit
    Route::get('/debit/search', 'account\DebitController@search')->name('account.debit.search');
    Route::Resource('/debit', 'account\DebitController', ['as' => 'account']);

    //categories credit
    Route::get('/categories_credit/search', 'account\CategoriesCreditController@search')->name('account.categories_credit.search');
    Route::Resource('/categories_credit', 'account\CategoriesCreditController', ['as' => 'account']);
    Route::delete('account/categories_credit/{id}', 'CategoriesCreditController@destroy')->name('account.categories_credit.destroy');

    //credit
    Route::get('/credit/search', 'account\CreditController@search')->name('account.credit.search');
    Route::Resource('/credit', 'account\CreditController', ['as' => 'account']);

    //laporan debit
    Route::get('/laporan_debit', 'account\LaporanDebitController@index')->name('account.laporan_debit.index');
    Route::get('/laporan_debit/check', 'account\LaporanDebitController@check')->name('account.laporan_debit.check');

    //laporan credit
    Route::get('/laporan_credit', 'account\LaporanCreditController@index')->name('account.laporan_credit.index');
    Route::get('/laporan_credit/check', 'account\LaporanCreditController@check')->name('account.laporan_credit.check');

    //laporan semua
    Route::get('/laporan_semua/search', 'account\LaporanSemuaController@search')->name('account.laporan_semua.search');
    Route::Resource('/laporan_semua', 'account\LaporanSemuaController', ['as' => 'account']);
    Route::get('/account/laporan-semua/filter', [LaporanSemuaController::class, 'filterByDate'])->name('laporan_semua.filter');

    //laporan neraca
    Route::get('/neraca/search', 'account\NeracaController@search')->name('account.neraca.search');
    Route::Resource('/neraca', 'account\NeracaController', ['as' => 'account']);

    //gaji
    Route::get('/gaji', 'account\GajiController@index')->name('account.gaji.index');
    Route::get('/gaji/create', 'account\GajiController@create')->name('account.gaji.create');
    Route::post('/gaji/store', 'account\GajiController@store')->name('account.gaji.store');
    Route::delete('/gaji/{id}', 'account\GajiController@destroy')->name('account.gaji.destroy');
    Route::get('/gaji/{id}/edit', 'account\GajiController@edit')->name('account.gaji.edit');
    Route::get('/gaji/{id}/detail', 'account\GajiController@detail')->name('account.gaji.detail');
    Route::post('account/gaji/{id}', 'account\GajiController@update')->name('account.gaji.update');
    Route::get('/gaji/searchmanager', 'account\GajiController@searchmanager')->name('account.gaji.searchmanager');
    Route::get('/gaji/searchkaryawan', 'account\GajiController@searchkaryawan')->name('account.gaji.searchkaryawan');
    Route::get('/gaji/filtermanager', 'account\GajiController@filtermanager')->name('account.gaji.filtermanager');
    Route::get('/gaji/filterkaryawan', 'account\GajiController@filterkaryawan')->name('account.gaji.filterkaryawan');
    Route::get('/laporan_gaji/download-pdf', 'account\GajiController@downloadPdf')->name('account.laporan_gaji.download-pdf');
    Route::get('/laporan_gaji/{id}/Slip-Gaji', 'account\GajiController@SlipGaji')->name('account.laporan_gaji.Slip-Gaji');

    //presensi
    Route::get('/presensi', 'account\PresensiController@index')->name('account.presensi.index');
    Route::get('/presensi/create', 'account\PresensiController@create')->name('account.presensi.create');
    Route::post('/account/presensi/store', 'account\PresensiController@store')->name('account.presensi.store');
    Route::get('/presensi/detail/{id}', 'account\PresensiController@detail')->name('account.presensi.detail');
    Route::get('/presensi/{id}/edit', 'account\PresensiController@edit')->name('account.presensi.edit');
    Route::post('account/presensi/{id}', 'account\PresensiController@update')->name('account.presensi.update');
    Route::delete('/presensi/{id}', 'account\PresensiController@destroy')->name('account.presensi.destroy');
    Route::get('/presensi/search', 'account\PresensiController@search')->name('account.presensi.search');
    Route::get('/presensi/filter', 'account\PresensiController@filter')->name('account.presensi.filter');
    Route::get('/laporan_presensi/download-pdf', 'account\PresensiController@downloadPdf')->name('account.laporan_presensi.download-pdf');

    //email
    Route::get('/email', 'account\EmailController@index')->name('account.email.index');

    // company
    Route::get('/company/{id}/edit', 'account\PenggunaController@company')->name('account.company.edit');
    Route::put('/company/{id}', 'account\PenggunaController@updateCompany')->name('account.company.update');

    // notifikasi
    Route::get('/notifikasi', 'account\NotifikasiController@showNotifications')->name('account.notifikasi.index');

    // maintenance
    Route::get('/maintenance', 'account\MaintenanceController@index')->name('account.maintenance.index');
    Route::get('/maintenance/create', 'account\MaintenanceController@create')->name('account.maintenance.create');
    Route::post('/maintenance', 'account\MaintenanceController@store')->name('account.maintenance.store');
    Route::get('/maintenance/{id}/edit', 'account\MaintenanceController@edit')->name('account.maintenance.edit');
    Route::post('/maintenance/{id}', 'account\MaintenanceController@update')->name('account.maintenance.update');
    Route::get('/maintenance/blank', 'account\MaintenanceController@maintenance')->name('account.maintenance.blank');
    Route::get('/page-maintenance', 'account\MaintenanceController@page')->name('account.page-maintenance.blank');
    Route::delete('/maintenance/{id}', 'account\MaintenanceController@destroy')->name('account.maintenance.destroy');

    // sewa
    Route::get('/sewa', 'account\SewaController@index')->name('account.sewa.index');
    Route::get('/sewa/create', 'account\SewaController@create')->name('account.sewa.create');
    Route::post('/sewa', 'account\SewaController@store')->name('account.sewa.store');
    Route::get('/sewa/{id}/edit', 'account\SewaController@edit')->name('account.sewa.edit');
    Route::put('/sewa/{id}', 'account\SewaController@update')->name('account.sewa.update');

    Route::get('/get-user-phone/{userId}', 'account\PresensiController@getUserPhone')->name('account.getUserPhone');

    // laporan camp
    Route::get('/camp', 'account\CampController@index')->name('account.camp.index');
    Route::get('/camp/create', 'account\CampController@create')->name('account.camp.create');
    Route::post('/camp/store', 'account\CampController@store')->name('account.camp.store');
    Route::get('/camp/search', 'account\CampController@search')->name('account.camp.search');
    Route::get('/camp/filter', 'account\CampController@filter')->name('account.camp.filter');
    Route::get('/camp/detail/{id}{token}', 'account\CampController@detail')->name('account.camp.detail');
    Route::delete('/camp/{id}', 'account\CampController@destroy')->name('account.camp.destroy');
    Route::get('/camp/edit/{id}{token}', 'account\CampController@edit')->name('account.camp.edit');
    Route::post('/camp/{id}', 'account\CampController@update')->name('account.camp.update');
    Route::get('/laporan_camp/download-pdf', 'account\CampController@downloadPdf')->name('account.laporan_camp.download-pdf');
    Route::get('/laporan_camp/{id}/Slip-Camp', 'account\CampController@SlipCamp')->name('account.laporan_Camp.Slip-Camp');

    // Laporan peserta
    Route::get('/Laporan-Peserta/list', 'account\PesertaController@list')->name('account.peserta.list');
    Route::get('/Laporan-Peserta/detail/{id}', 'account\PesertaController@detail')->name('account.peserta.detail');
    Route::delete('/Laporan-Peserta/{id}', 'account\PesertaController@destroy')->name('account.peserta.destroy');
    Route::get('/Laporan-Peserta/search', 'account\PesertaController@search')->name('account.peserta.search');
    Route::get('/Laporan-Peserta/filter', 'account\PesertaController@filter')->name('account.peserta.filter');
    Route::get('/Laporan-Peserta', 'account\PesertaController@index')->name('account.peserta.form');
    // Route::get('/Laporan-Peserta/testimoni/{id}/{token}', 'account\PesertaController@testimoni')->name('account.peserta.testimoni')->middleware('checkToken');
    Route::get('/Laporan-Peserta/testimoni/{id}/{token}', 'account\PesertaController@testimoni')->name('account.peserta.testimoni');
    Route::post('/Laporan-Peserta/simpan', 'account\PesertaController@store')->name('account.peserta.store');
    Route::post('/Laporan-Peserta/selesai/{id}', 'account\PesertaController@update')->name('account.peserta.update');

    // Pendaftaran Scopus Camp
    Route::get('/Scopus-Camp', 'account\ScopusCampController@form')->name('account.scopuscamp.form');
    Route::post('/Scopus-Camp/store', 'account\ScopusCampController@store')->name('account.scopuscamp.store');
    Route::get('/Scopus-Camp/Data-Pendaftaran', 'account\ScopusCampController@index')->name('account.scopuscamp.index');
    Route::get('/Scopus-Camp/Edit/{id}/{token}', 'account\ScopusCampController@edit')->name('account.scopuscamp.edit');
    Route::post('/Scopus-Camp/update/{id}', 'account\ScopusCampController@update')->name('account.scopuscamp.update');
    Route::delete('/Scopus-Camp/delete/{id}', 'account\ScopusCampController@destroy')->name('account.scopuscamp.delete');


    // Kategori Pendaftaran Scopus Camp
    Route::get('/kategori/ScopusCamp', 'account\CategoriesScopusCampController@index')->name('account.kategori.index');
    Route::get('/kategori/ScopusCamp/create', 'account\CategoriesScopusCampController@create')->name('account.kategori.create');
    Route::post('/kategori/ScopusCamp/store', 'account\CategoriesScopusCampController@store')->name('account.kategori.store');
    Route::get('/kategori/ScopusCamp/edit/{id}', 'account\CategoriesScopusCampController@edit')->name('account.kategori.edit');
    Route::post('/kategori/ScopusCamp/update/{id}', 'account\CategoriesScopusCampController@update')->name('account.kategori.update');
    Route::delete('/kategori/ScopusCamp/delete/{id}', 'account\CategoriesScopusCampController@destroy')->name('account.kategori.destroy');
    Route::get('/kategori/ScopusCamp/search', 'account\CategoriesScopusCampController@search')->name('account.ketegori.search');
    Route::get('/kategori/ScopusCamp/filter', 'account\CategoriesScopusCampController@filter')->name('account.ketegori.filter');
});
