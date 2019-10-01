<?php

namespace App\Core\Eloquent;

use Illuminate\Database\Eloquent\{Model,SoftDeletes};
use Str;

class Category extends Model
{
    use SoftDeletes;
    protected $table="categories";
    protected $conection="pgsql";
    protected $fillable = ['name','description'];


public static function boot()
{
    static::creating(function ($model){
    $model->slug=Str::slug($model->name);
    $model->created_user=1;
   
    });
    parent::boot();
}


public function getNameAttribute($value){
    return Str::upper($value);
}
public function setNameAttribute($value){
    $this->attributes['name']=Str::upper($value);
}

}


