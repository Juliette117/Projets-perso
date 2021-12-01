<?php

namespace App\Models;

use App\Models\User;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'content',
        'category_id'
    ];


    public function dateFormated()
    {
        return date_format($this->created_at, 'd-m-Y');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function likes()
    {
        return $this->morphToMany('App\User', 'likeable')->whereDeletedAt(null);
    }

    public function getIsLikedAttribute()
    {
        $like = $this->likes()->whereUserId(Auth::id())->first();
        return (!is_null($like)) ? true : false;
    }



    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


}

// public function likes()
// {
    // return $this->morphMany(Like::class,'liked');
// }
// public function like()
// {
    // $user = ['user_id' => auth()->id()];
    // if(! $this->likes()
    // ->where($user)
    // ->exists()){
        // return $this->likes()->create($user);
    // }
// }
// public function unlike()
// {
    // $user = ['user_id' => auth()->id()];
    // $this->likes()
    // ->where($user)
    // ->get()
    // ->each->delete();   
// }
// public function getIsLikedAttribute()
// {
    // return !! $this->likes
    // ->where('user_id', auth()->id())
    // ->count();
// }