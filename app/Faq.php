<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Faq
 *
 * @property int $id
 * @property string $name
 * @property string $text
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Faq whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Faq whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Faq whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Faq whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Faq whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Faq extends Model
{
    //
}
