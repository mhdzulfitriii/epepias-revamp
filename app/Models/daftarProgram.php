<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class daftarProgram extends Model
{
    use HasUuids, Notifiable;

    protected $fillable = [
        'Program_ID',
        'Persatuan',
        'NamaPenuh',
        'NoIC',
        'NoPhone',
        'email',
        'NoPhonePenjaga',
        'Alamat',
        'Alahan',
        'Jawatan',
        'Kehadiran',
    ];
}
