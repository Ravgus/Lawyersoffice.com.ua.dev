<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use File;

/**
 * App\Article
 *
 * @property int $id
 * @property string $name
 * @property string $alias
 * @property string $text
 * @property string $description
 * @property string|null $sm_img
 * @property string|null $lg_img
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereLgImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereSmImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Article extends Model
{
    //
    public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            $model->alias = Str::slug(mb_substr($model->name, 0, 40) . "-" . \Carbon\Carbon::now()->format('dmy'), '-');

            /*if ($model->lg_img != NULL) {
                $img = Image::make($model->lg_img);
                $img->resize(400, 300, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $ui = uniqid('', true);
                $img->save('images/uploads/' . $ui . '.png');
                $model->sm_img = 'images/uploads/' . $ui . '.png';
            } else {
                $model->sm_img = NULL;
            }*/

            return true;
        });

        static::deleting(function ($model) {

            if (File::exists($model->lg_img)) {
                File::delete($model->lg_img);
            }
            /*if (File::exists($model->sm_img)) {
                File::delete($model->lg_img);
            }*/

            return true;
        });
    }
}
