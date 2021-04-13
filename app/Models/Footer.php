<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Footer
 *
 * @property int $id
 * @property string $settings_footer_logo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Footer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Footer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Footer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Footer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Footer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Footer whereSettingsFooterLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Footer whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Footer extends Model
{
    use HasFactory;

    protected $guarded = [];
}
