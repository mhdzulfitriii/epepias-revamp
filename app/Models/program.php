<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class program extends Model
{
    use HasUuids;

    protected $fillable = [
        'NamaProgram',
        'Tempat',        
        'Persatuan_ID',        
        'Image_ID',        
        'StartDate',        
        'EndDate',        
        'Status',        
        'MyHadir',        
        'JenisProgram',        
        'Majlis',        
        'Link',        
        'Mode',        
        'Slug',                 
        'KodProgram',                 
    ];

    public function image()
    {
        return $this->belongsTo(ImageMaster::class, 'Image_ID', 'id');
    }

    public function Persatuan()
    {
        return $this->belongsTo(libPersatuan::class, 'Persatuan_ID', 'KodPersatuan');
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($program) {
            // Preserve existing slug behavior
            $program->slug = Str::slug($program->NamaProgram);
    
            // Generate KodProgram
            $year = now()->format('Y'); // Get current year (YYYY)
            $month = now()->format('m'); // Get current month (MM)
    
            // Find the last program created in the same month
            $lastProgram = self::whereYear('created_at', $year)
                ->whereMonth('created_at', $month)
                ->orderBy('created_at', 'desc')
                ->first();
    
            // Extract last two digits and increment
            $lastNumber = $lastProgram ? intval(substr($lastProgram->KodProgram, -2)) + 1 : 1;
            $formattedNumber = str_pad($lastNumber, 2, '0', STR_PAD_LEFT);
    
            // Assign the generated KodProgram
            $program->KodProgram = "KP{$year}{$month}{$formattedNumber}";
        });
    }
}
