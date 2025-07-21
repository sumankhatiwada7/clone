<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
     use HasFactory;
     protected $fillable = [
          'title',
          'content',
          'image',
          'category_id',
          'user_id',
          'slug',
          'published_at',
     ];
     public function user()
     {
          return $this->belongsTo(User::class);
     }
     public function  readtime(){
          $wordCount = str_word_count(strip_tags($this->content));
          $readTime = ceil($wordCount / 200); // Assuming average reading speed of 200 words per minute
          return max(1, $readTime); 
     }
     public function category()
     {
          return $this->belongsTo(category::class);
     }


}
