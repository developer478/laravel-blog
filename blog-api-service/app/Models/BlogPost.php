<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class BlogPost extends Authenticatable
{

    use HasFactory;

    public function __construct()
    {
        $prefix  = auth()->user()? auth()->user()->id.'_':'';
        $this->table = $prefix.'blog_post';
    }
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'post_id',
        'slug',
        'description',
        'status',
    ];

}
