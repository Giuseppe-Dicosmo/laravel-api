<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'publisheder_at',
        'category_id',
        'slug'
    ];

    public function Category()
    {
        return $this->belongsTo('App\Category');
    }

    public static function getUniqueSlug( $title ) {

        $slug = str::slug($title);
        $slug_dase = $slug;
        $counter = 1;

        $post_present = Post::where('slug', $slug)->first();

        while( $post_present ) {

            $slug = $slug_dase . '-' . $counter;
            $counter++;
            $post_present = Post::where('slug', $slug)->first();

        }

        return $slug;
    }
}
