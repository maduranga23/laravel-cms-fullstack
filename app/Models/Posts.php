<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Posts extends Model
{
    use HasFactory;

    public const Published = 1;
    public const Draft = 0;
    protected $fillable = ['gallery_id', 'category_id', 'title', 'description', 'is_publish'];

    public function gallery(){
        return $this->BelongsTo(Gallery::class);
    }

    public function category(){
        return $this->BelongsTo(Category::class);
    }


}
