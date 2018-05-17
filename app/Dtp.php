<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use File;

/**
 * App\Dtp
 *
 * @property int $id
 * @property string $name
 * @property string $text
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Dtp whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Dtp whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Dtp whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Dtp whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Dtp whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Dtp extends Model
{
    //

    protected $table = 'dtp';

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
