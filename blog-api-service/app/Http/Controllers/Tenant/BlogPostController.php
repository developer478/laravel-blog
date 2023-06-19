<?php

namespace App\Http\Controllers\Tenant;

use Illuminate\Http\Request;
use Illuminate\Database\Schema\Blueprint;
use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Support\Facades\Schema;

class BlogPostController extends Controller
{
    /**
     * Get All POST.
     *
     * @return collection
     */
    public function index()
    {
        $posts = BlogPost::get();
        return view('blog.listing',['posts' => $posts]);

    }

    /**
     * Create Post
     * Params Request $request
     * @return response
     */
    public function create(Request $request)
    {
        
        return view('blog.create',['data' => $request->all()]);
    }

    /**
     * Create Post View
     * Params Request $request
     * @return response
     */
    public function edit(Request $request)
    {
        $data = BlogPost::where('id',$request->id)->first();
        return view('blog.edit',['post' => $data]);
    }

    /**
     * Create Post
     * Params Request $request
     * @return response
     */
    public function store(Request $request)
    {
        $post = new BlogPost();
        $post->title = $request->title;
        $post->slug = str_replace("-", " ", $request->title);
        $post->description = $request->description;
        $post->status = 'pending';
        $post->post_id = 0;
        $post->save();

        return redirect()->route('post.all')->with(['success' => true, "status" => "Post Created Successfully."]);
    }

    /**
     * Update Post
     * Params Request $request
     * @return response
     */
    public function update(Request $request)
    {
        $data = $request->except("_token");
        $post = BlogPost::Where('id',$request->id);
        $post->update($data);

        return redirect()->route('post.all')->with(['success' => true, "status" => "Post Updated Successfully."]);
    }

    /**
     * Update Post
     * Params Request $request
     * @return response
     */
    public function destroy(Request $request)
    {
        $result = BlogPost::where('id',$request->id)->delete();
        return redirect()->route('post.all')->with(['success' => true, "status" => "Post Deleted Successfully."]);
    }


}
