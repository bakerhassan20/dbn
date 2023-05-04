<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectCategoryTranslation extends Model
{
    use HasFactory;

    public $table = 'project_categories_translations';
    public $timestamps = false;
    protected $fillable = [
        'category_id',
        'locale',
        'name',
    ];

    public function services()
    {
        return $this->belongsTo('ProjectCategor', 'category_id');
    }

}
