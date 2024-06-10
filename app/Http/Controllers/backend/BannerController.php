<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBannerRequest;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    public function status($id)
    {
        $banner = Banner::find($id);
        if ($banner) {
            // Đảo ngược trạng thái từ 1 sang 2 và ngược lại
            $banner->status = $banner->status == 1 ? 2 : 1;
            $banner->save();
        }

        return redirect()->route('admin.banner.index');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Banner::where('status', '!=', '0')
            ->orderBy('created_at', 'DESC')
            ->select('id', 'image', 'name', 'link', 'position','status')
            ->get();
        $htmlsortorder = "";
        foreach ($list as $row) {
            $htmlsortorder .= "<option value='" . $row->name . "'>" . $row->name . "</option>";
        }
        return view("backend.banner.index", compact('list', 'htmlsortorder'));
    }

    public function store(StoreBannerRequest $request)
    {
        $banner = new Banner();
        $banner->name = $request->name;
        $banner->link = $request->link;
        $banner->description = $request->description;
        $banner->position = $request->position;

        // Upload file
        if ($request->hasFile('image')) {
            $fileName = date('YmdHis') . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/banners/'), $fileName);
            $banner->image = $fileName;
        }

        $banner->status = $request->status;
        $banner->created_at = now();
        $banner->created_by = Auth::id() ?? 1; //dang nhap

        $banner->save();

        return redirect()->route('admin.banner.index')->with('success', 'Thêm chủ đề thành công!');
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
