<?php

use Illuminate\Support\Facades\Storage;

// image upload
function uploadImage($file, $path)
{
    $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
    Storage::putFileAs("public/$path", $file, $fileName);

    return "storage/$path/" . $fileName;
}


// image delete
function deleteImage($image)
{
    $imageExists = file_exists($image);

    if ($imageExists) {
        @unlink($image);
    }
}
