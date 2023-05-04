<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable;
use Astrotomic\Translatable\Translatable as Trans;

class ProjectCategory extends Model implements Translatable
{
    use Trans;
    
    public $translatedAttributes = ['name','slug','description'];
    protected $fillable = ["image"];
    protected $translationForeignKey = 'category_id';

    public $translatedLocales = ['en', 'ar'];

     public function locales() {
        return ['en', 'ar'];
     }
    

    public function createTranslation($request)
    {
        foreach ($this->locales() as $key) {
            foreach ($this->translatedAttributes as $attribute) {   
                    $this->{$attribute . ':' . $key} = $request[$attribute . '_' . $key];      
            }
            
            $this->save();
        }
        return $this;
    }
}

 


 