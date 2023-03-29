<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Training extends Model
{
    private static $training, $image, $imageName, $imageUrl, $extension, $directory;

    use HasFactory;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$extension;
        self::$directory = 'training_image/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function createTraining($request)
    {
        self::$training = new Training();
        self::$training->category_id = $request->category_id;
        self::$training->teacher_id=  Session::get('teacher_id');
        self::$training->title = $request->title;
        self::$training->short_description = $request->short_description;
        self::$training->date = $request->date;
        self::$training->price = $request->price;
        self::$training->long_description = $request->long_description;
        self::$training->image = self::getImageUrl($request);
        self::$training->save();
    }
}
