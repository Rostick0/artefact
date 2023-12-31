<?php

namespace App\Utils;

use Illuminate\Support\Facades\Storage;

class ImageUtil
{

    private static function getUploadPath()
    {
        return 'upload/image/';
    }
    public static function upload($image)
    {
        $upload_path = ImageUtil::getUploadPath();

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
