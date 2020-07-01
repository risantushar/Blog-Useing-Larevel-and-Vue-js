<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Category;


class Post extends Model
{
    protected $fillable = ['cat_id','user_id','comment_id', 'post_title','post_description','photo'];

    public function user()
    {
            return $this->belongsTo(User::class);
    }
    public function category()
    {
            return $this->belongsTo(Category::class,'cat_id');   //category_id = forign key
    }
}
