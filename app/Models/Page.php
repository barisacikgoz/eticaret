<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Page
 *
 * @property int $id
 * @property string $page_name
 * @property string $page_description
 * @property string $page_meta_title
 * @property string $page_meta_description
 * @property string $page_meta_keywords
 * @property string $page_image
 * @property string $page_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Page newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Page newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Page query()
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page wherePageDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page wherePageImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page wherePageMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page wherePageMetaKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page wherePageMetaTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page wherePageName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page wherePageStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Page extends Model
{
    use HasFactory;

    protected $guarded = [];
}
