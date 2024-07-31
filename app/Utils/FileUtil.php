<?php

namespace App\Utils;

use Illuminate\Support\Facades\Storage;

class FileUtil
{
    public static function upload($image, $type)
    {
        $upload_path = 'upload/' . $type . '/';

        $extension = $image->getClientOriginalExtension();
        $random_name = $upload_path . random_int(1000, 9999) . time() . '.' . $extension;

        $image->storeAs('/public/' . $random_name);

        return $random_name;
    }

    public static function delete($image_path)
    {
        Storage::disk('public')->delete($image_path);
    }
}
