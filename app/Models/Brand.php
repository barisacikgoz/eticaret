<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Brand
 *
 * @property int $id
 * @property string $brand_name
 * @property string $brand_description
 * @property string $brand_meta_title
 * @property string $brand_meta_description
 * @property string $brand_meta_keywords
 * @property string $brand_image
 * @property string $brand_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Brand newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand query()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereBrandDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereBrandImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereBrandMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereBrandMetaKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereBrandMetaTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereBrandName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereBrandStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Brand extends Model
{
    use HasFactory;

    protected $guarded = [];
}
