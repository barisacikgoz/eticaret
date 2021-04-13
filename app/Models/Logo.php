<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Logo
 *
 * @property int $id
 * @property string $settings_logo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Logo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Logo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Logo query()
 * @method static \Illuminate\Database\Eloquent\Builder|Logo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Logo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Logo whereSettingsLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Logo whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Logo extends Model
{
    use HasFactory;

    protected $guarded = [];
}
