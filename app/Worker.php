<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use File;

/**
 * App\Worker
 *
 * @property int $id
 * @property string $name
 * @property string $text
 * @property string $img
 * @property string $email
 * @property string $phone
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Worker whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Worker extends Model
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
