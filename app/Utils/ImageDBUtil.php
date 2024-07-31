<?php

namespace App\Utils;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;

class ImageDBUtil
{
    public static function create($image, Model $model)
    {
        $path = FileUtil::upload($image, 'image');

        [$width, $height] = getimagesize($image);

        $image = $model->image()->create([
            'name' => $image->getClientOriginalName(),
            'path' => $path,
            'width' => $width,
            'height' => $height,
        ]);

        return $image;
    }

    public static function createMany($images, Model $model)
    {
        foreach ($images as $image) {
            ImageDBUtil::create($image, $model);
        }
    }

    public static function updateOne($image, Model $model)
    {
        if (!empty($model->image()->get()[0])) {
            FileUtil::delete($model->image()->get()[0]->path);
            $model->image()->delete();
        }
        ImageDBUtil::create($image, $model);
    }

    public static function delete(array $images_delete_ids, Model $model)
    {
        $images = $model->image()->whereIn('id', $images_delete_ids)->get();

        $images->each(function ($item) {
            FileUtil::delete($item->path);
        });

        $model->image()->whereIn('id', $images_delete_ids)->delete();
    }
}
