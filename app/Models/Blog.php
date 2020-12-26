<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
  protected $table = 'blog';

  // use SoftDeletes;
  // protected $dates = ['deleted_at'];

  protected $fillable = ['title', 'post', 'slug','penulis', 'kategori', 'featured_img'];
}
