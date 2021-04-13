<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Authority
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Authority newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Authority newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Authority query()
 * @method static \Illuminate\Database\Eloquent\Builder|Authority whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Authority whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Authority whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Authority extends Model
{
    use HasFactory;

    protected $guarded = [];
}
