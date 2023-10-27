<?php

namespace App\Utils;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;

class ImageDBUtil
{
    public static function create($image, Model $model)
    {
        $path = ImageUtil::upload($image);

        [$width, $height] = getimagesize($image);

        $image = $model->image()->create([
            'name' => $image->getClientOriginalName(),
            'path' => $path,
            'width' => $width,
            'height' => $height,
        ]);

        return $image;
    }

    public static function createImages($images, Model $model)
    {
        foreach ($images as $image) {
            ImageDBUtil::create($image, $model);
        }
    }

    public static function deleteImage(array $images_delete_ids, Model $model)
    {
        $images = $model->image()->whereIn('id', $images_delete_ids)->get();

        $images->each(function ($item) {
            ImageUtil::delete($item->path);
        });

        $model->image()->whereIn('id', $images_delete_ids)->delete();
    }
}
