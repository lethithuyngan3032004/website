<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Topic;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
        $list = Post::where("post.status", "!=", 0)
        ->leftjoin("topic", "post.topic_id", "=", "topic.id")
        ->orderBy("post.created_at", "DESC") // mới nhất lên đầu
        ->select("post.id", "post.title", "post.type", "post.image", "topic.name as topicname")
        ->get();

    return view('backend.post.index', compact("list"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $topics = Topic::all(); // Lấy danh sách chủ đề từ cơ sở dữ liệu
        return view('backend.post.create', compact('topics'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    
public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'type' => 'required|string|max:255',
        'slug' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'detail' => 'required|string',
        'topic_id' => 'required|exists:topics,id',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'status' => 'required|in:1,2',
    ]);

    try {
        $post = new Post();
        $post->title = $request->title;
        $post->type = $request->type;
        $post->slug = $request->slug ?? Str::slug($request->title); // Tạo slug nếu chưa có
        $post->description = $request->description;
        $post->detail = $request->detail;
        $post->topic_id = $request->topic_id;
        $post->status = $request->status;

        // Xử lý upload hình ảnh
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/post'), $imageName);
            $post->image = $imageName;
        }

        $post->save();

        // Chuyển hướng về trang danh sách bài viết với thông báo thành công
        return redirect()->route('post.index')->with('success', 'Bài viết đã được thêm thành công.');

    } catch (\Exception $e) {
        // Chuyển hướng về trang tạo bài viết với thông báo lỗi
        return redirect()->route('post.create')->with('error', 'Đã có lỗi xảy ra. Vui lòng thử lại.');
    }
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
