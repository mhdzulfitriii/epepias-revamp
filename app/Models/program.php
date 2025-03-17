<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

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
    ];

    public function images()
    {
        return $this->morphMany(ImageMaster::class, 'documentable');
    }
}
