<?php

namespace App\Utils;

use Illuminate\Database\Eloquent\Model;

class FileDBUtil
{
    public static function create($file, Model $model)
    {
        $path = FileUtil::upload($file, 'file');

        $file = $model->file()->create([
            'name' => $file->getClientOriginalName(),
            'path' => $path,
            'type' => $file->getClientMimeType()
        ]);

        return $file;
    }

    public static function createMany($files, Model $model)
    {
        foreach ($files as $image) {
            ImageDBUtil::create($image, $model);
        }
    }

    public static function updateOne($image, Model $model)
    {
        if (!empty($model->file()->get()[0])) {
            FileUtil::delete($model->file()->get()[0]->path);
            $model->file()->delete();
        }
        ImageDBUtil::create($image, $model);
    }

    public static function delete(array $files_delete_ids, Model $model)
    {
        $files = $model->file()->whereIn('id', $files_delete_ids)->get();

        $files->each(function ($item) {
            FileUtil::delete($item->path);
        });

        $model->file()->whereIn('id', $files_delete_ids)->delete();
    }
}
