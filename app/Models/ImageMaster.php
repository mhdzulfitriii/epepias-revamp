<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class ImageMaster extends Model
{
    use HasUuids;
    protected $fillable = [
        'id',
        'uploader_id',        
        'uploader_type',        
        'documentable_id',        
        'documentable_type',        
        'name',        
        'path',        
        'mime_type',        
        'size',        
        'type',        
        'link',                               
    ];
}
