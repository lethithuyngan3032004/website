<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTopicRequest;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TopicController extends Controller
{
    public function status($id)
    {
        $topic = Topic::find($id);
        if ($topic) {
            // Đảo ngược trạng thái từ 1 sang 2 và ngược lại
            $topic->status = $topic->status == 1 ? 2 : 1;
            $topic->save();
        }

        return redirect()->route('admin.topic.index');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Topic::where('status', '!=', '0')
            ->orderBy('created_at', 'DESC')
            ->select('id', 'name', 'slug','status')
            ->get();
        $htmlsortorder = "";
        foreach ($list as $row) {
            $htmlsortorder .= "<option value='" . ($row->sort_order + 1) . "'>" . $row->name . "</option>";
        }
        return view("backend.topic.index", compact('list', 'htmlsortorder'));
    }


    public function store(StoreTopicRequest $request)
    {
        $topic = new Topic();
        $topic->name = $request->name;
        $topic->description = $request->description;
        $topic->sort_order = $request->sort_order;

        // Upload file
        if ($request->hasFile('image')) {
            $fileName = date('YmdHis') . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/topics/'), $fileName);
            $topic->image = $fileName;
        }

        $topic->status = $request->status;
        $topic->slug = Str::slug($request->name, '-');
        $topic->created_at = now();
        $topic->created_by = Auth::id() ?? 1; //dang nhap

        $topic->save();

        return redirect()->route('admin.topic.index')->with('success', 'Thêm chủ đề thành công!');
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
