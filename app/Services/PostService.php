<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Models\Post;

class PostService {

    public function createPost($request){
        $slug = Str::slug($request->title);
        $count = 0;
        while (Post::where('slug', '=', $slug)->exists()) {
            $count++;
            $slug = Str::slug($request->title . '-' . $count);
        }
        // Generate an excerpt from the body
        $excerpt = Str::limit(strip_tags($request->body), 200);
        
        // Merge the slug and excerpt into the request parameters and create the post
        $request->merge([
            'slug' => $slug,
            'excerpt' => $excerpt,
            'status' => 'published',
            'user_id' => 1
        ]);
        Post::create($request->all()); 
    }
}