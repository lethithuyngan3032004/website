<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function status($id)
    {
        $post = Post::find($id);
        if ($post) {
            // Đảo ngược trạng thái từ 1 sang 2 và ngược lại
            $post->status = $post->status == 1 ? 2 : 1;
            $post->save();
        }

        return redirect()->route('admin.post.index');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
        $list = Post::where("post.status", "!=", 0)
        ->leftjoin("topic", "post.topic_id", "=", "topic.id")
        ->orderBy("post.created_at", "DESC") // mới nhất lên đầu
        ->select("post.id", "post.title", "post.type", "post.image", "topic.name as topicname","post.status")
        ->get();

    return view('backend.post.index', compact("list"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list_topic = Topic::where('status', '!=', 0)
        ->orderBy('created_at', 'DESC')
        ->get();
    $htmltopicid = "";
    foreach ($list_topic as $row) {
        $htmltopicid .= "<option value='" . $row->id . "'>" . $row->name . "</option>";
    }
    return view('backend.post.create', compact("htmltopicid"));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->detail = $request->detail;
        $post->topic_id = $request->topic_id;
        $post->type = $request->type;
    
        // Upload file
        if ($request->hasFile('image')) {
            $fileName = date('YmdHis') . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/posts/'), $fileName);
            $post->image = $fileName;
        }
    
        $post->status = $request->status;
        $post->slug = Str::slug($request->name, '-');
        $post->created_at = now();
        $post->created_by = Auth::id() ?? 1; //dang nhap
    
        $post->save();
    
        return redirect()->route('admin.post.create')->with('success', 'Thêm bài viết thành công.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
