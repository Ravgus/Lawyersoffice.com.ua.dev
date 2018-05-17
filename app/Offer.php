<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use File;

/**
 * App\Offer
 *
 * @property int $id
 * @property string $name
 * @property string $text
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Offer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Offer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Offer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Offer whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Offer whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Offer extends Model
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
