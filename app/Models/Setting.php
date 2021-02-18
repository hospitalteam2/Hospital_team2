<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Setting extends Model
{
    use HasTranslations;
    public $translatable =['address'];
    protected $fillable=['phone','email','twitter','google','facebook','skype','linked','address','photo'];
    public $timestamps = true;
}
