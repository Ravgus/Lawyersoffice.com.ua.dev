<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Navigation
 *
 * @property int $id
 * @property string $name
 * @property string $alias
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Navigation whereAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Navigation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Navigation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Navigation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Navigation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Navigation extends Model
{
    //
}
