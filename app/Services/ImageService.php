<?php

namespace App\Services;

use App\Models\ImageMaster;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImageService
{
    public function upload(UploadedFile $file, $folder = 'uploads', $documentable = null, $type = null)
    {
        $fileName = Str::uuid() . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs($folder, $fileName, 'public');        

        return ImageMaster::create([
            'id' => Str::uuid(),
            'documentable_id' => $documentable ? $documentable->id : null,
            'documentable_type' => $documentable ? get_class($documentable) : null,
            'uploader_id' => Auth::id(),
            'uploader_type' => Auth::user() ? get_class(Auth::user()) : null,
            'name' => $file->getClientOriginalName(),
            'path' => $path,
            'mime_type' => $file->getMimeType(),
            'size' => $file->getSize(),
            'type' => $type,
            'link' => url("storage/{$path}")
        ]);
    }

    public function delete(string $imageId): bool
    {
        $image = ImageMaster::find($imageId);
        if (!$image) {
            return false;
        }

        Storage::disk('public')->delete($image->path);
        return $image->delete();
    }
}
