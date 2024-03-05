<?php
// app/Exports/UsersExport.php
namespace App\Exports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;

class UsersExport implements FromCollection
{
  use Exportable;

  protected $users;

  public function __construct(Collection $users)
  {
    $this->users = $users;
  }

  public function collection()
  {
    // Modify the data in the collection to match the table structure
    return $this->users->map(function ($user, $key) {
      return [
        'NO.' => $key + 1,
        'NAMA' => $user->full_name,
        'EMAIL' => $user->email,
        'USERNAME' => $user->username,
        'VERIFIKASI EMAIL' => $user->email_verified_at ? 'Sudah Diverifikasi' : 'Belum Diverifikasi',
        'JENIS' => $user->jenis,
        'LEVEL' => $user->level,
        'STATUS' => $user->status == 'on' ? 'ON' : 'OFF',
      ];
    });
  }
}
