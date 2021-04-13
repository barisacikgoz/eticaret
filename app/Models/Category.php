<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $category_name
 * @property string $category_description
 * @property string $category_meta_title
 * @property string $category_meta_description
 * @property string $category_meta_keywords
 * @property string $category_image
 * @property string $category_type
 * @property string $category_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCategoryDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCategoryImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCategoryMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCategoryMetaKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCategoryMetaTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCategoryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCategoryStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCategoryType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

//    public function getCategory(){
//        $this->
//    }
}
