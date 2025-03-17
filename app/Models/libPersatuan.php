<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libPersatuan extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'Persatuan',
        'Singkatan',
        'KodPersatuan',
        'NoBank',
        'Bank',
        'Nama',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($persatuan) {
            if (empty($persatuan->KodPersatuan)) {
                // Ensure Singkatan is uppercase and remove spaces
                $singkatan = strtoupper(str_replace(' ', '', $persatuan->Singkatan));

                // Get formatted date: DDMMYYYY (e.g., 15032025)
                $date = Carbon::now()->format('dmY');

                // Set KodPersatuan
                $persatuan->KodPersatuan = $singkatan . $date;
            }
        });
    }
}
