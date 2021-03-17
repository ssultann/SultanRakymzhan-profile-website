<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class ApiController extends Controller
{
    // This function return all post row of that
    public function index(Request $request) {
        $posts = Post::all();

        return response($posts, 200);
    }

    // This function returns post with that id
    public function get_post(Request $request) {
        $post = Post::find($request -> post_id);

        if ($post == null) {
            return response(['message' => 'There is no such post', 404]);
        } else {
            return response($post, 200);
        }

        
    }
}
