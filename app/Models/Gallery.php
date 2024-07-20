<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Gallery extends Model
{
    use HasFactory;
    public $uploads ="/images/posts/";
    protected $table = 'gallery';
    protected $fillable = ['image'];

    protected function image(): Attribute
    {
        return Attribute::get(
            fn ($image) => $this->uploads . $image
        );
    }
}
