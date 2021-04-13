<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Favicon
 *
 * @property int $id
 * @property string $settings_favicon
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Favicon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Favicon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Favicon query()
 * @method static \Illuminate\Database\Eloquent\Builder|Favicon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Favicon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Favicon whereSettingsFavicon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Favicon whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Favicon extends Model
{
    use HasFactory;

    protected $guarded = [];
}
