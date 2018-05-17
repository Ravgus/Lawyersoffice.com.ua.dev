<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use File;

/**
 * App\Partner
 *
 * @property int $id
 * @property string $name
 * @property string $text
 * @property string $img
 * @property string $link
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Partner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Partner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Partner whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Partner whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Partner whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Partner whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Partner whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Partner extends Model
{
    //
    public static function boot()
    {
        parent::boot();

        static::deleting(function ($model) {

            if (File::exists($model->img)) {
                File::delete($model->img);
            }

            return true;
        });
    }
}
