<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class BrandController extends Controller
{
    public function status($id)
    {
        $brand = Brand::find($id);
        if ($brand) {
            // Đảo ngược trạng thái từ 1 sang 2 và ngược lại
            $brand->status = $brand->status == 1 ? 2 : 1;
            $brand->save();
        }

        return redirect()->route('admin.brand.index');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Brand::where("status", "!=", 0)
            ->orderBy("created_at", "DESC")
            ->select("id", "image", "name", "slug", "status")
            ->get(); 

        $htmlsortorder = "";
        foreach ($list as $row) {
            $htmlsortorder .= "<option value='" . ($row->sort_order + 1) . "'>" . $row->name . "</option>";
        }

        return view("backend.brand.index", compact('list', 'htmlsortorder'));
    }

    public function store(StoreBrandRequest $request)
    {
        $brand = new Brand();
        $brand->name = $request->name;
        $brand->description = $request->description;
        $brand->sort_order = $request->sort_order;

        // Upload file
        if ($request->hasFile('image')) {
            $fileName = date('YmdHis') . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/brands/'), $fileName);
            $brand->image = $fileName;
        }

        $brand->status = $request->status;
        $brand->slug = Str::slug($request->name, '-');
        $brand->created_at = now();
        $brand->created_by = Auth::id() ?? 1;

        $brand->save();

        return redirect()->route('admin.brand.index')->with('success', 'Thương hiệu đã được tạo thành công.');
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
