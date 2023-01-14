<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use ProtoneMedia\Splade\Facades\Splade;
use ProtoneMedia\Splade\Facades\SEO;

class BlogController extends Controller
{
    public function singlePost(Request $request, $slug)
{
    // Use the Http facade to send a GET request to the API
    $response = Http::get('https://api.bongomusic.com.ng/wp-json/wp/v2/posts');

    // Get the response body
    $posts = $response->json();

    // Find the post with the matching slug
    $post = collect($posts)->first(fn ($post) => Str::slug($post['title']['rendered']) === $slug);

    

    return view('blog.singlePost', ['post' => $post]);
}

}
