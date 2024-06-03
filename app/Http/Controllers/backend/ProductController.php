<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Product::where("product.status", "!=", 0)
        ->join("category", "product.category_id", "=", "category.id")
        ->join("brand", "product.brand_id", "=", "brand.id")
        ->orderBy("product.created_at", "DESC") // mới nhất lên đầu
        ->select("product.id", "product.slug", "product.name", "product.image", "category.name as categoryname", "brand.name as brandname", "product.price", "product.pricesale", "product.detail")
        ->get();

    return view('backend.product.index', compact("list"));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('backend.product.create', compact('categories', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate dữ liệu từ form
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:product,slug',
            'category_id' => 'required|exists:category,id',
            'brand_id' => 'required|exists:brand,id',
            'price' => 'required|numeric|min:0',
            'pricesale' => 'nullable|numeric|min:0',
            'qty' => 'required|integer|min:1',
            'detail' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:1,2',
        ]);

        // Tạo mới sản phẩm
        try {
            $product = new Product();
            $product->name = $request->name;
            $product->slug = $request->slug;
            $product->category_id = $request->category_id;
            $product->brand_id = $request->brand_id;
            $product->price = $request->price;
            $product->pricesale = $request->pricesale;
            $product->qty = $request->qty;
            $product->detail = $request->detail;
            $product->description = $request->description;
            $product->status = $request->status;

            // Xử lý upload hình ảnh
            if ($request->hasFile('image')) {
                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('images/product'), $imageName);
                $product->image = $imageName;
            }

            $product->save();

            // Chuyển hướng về trang danh sách sản phẩm với thông báo thành công
            return redirect()->route('admin.product.index')->with('success', 'Sản phẩm đã được thêm thành công.');

        } catch (\Exception $e) {
            // Chuyển hướng về trang tạo sản phẩm với thông báo lỗi
            return redirect()->route('admin.product.create')->with('error', 'Đã có lỗi xảy ra. Vui lòng thử lại.');
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id)
        ->join('category', 'product.category_id', '=', 'category.id')
        ->join('brand', 'product.brand_id', '=', 'brand.id')
        ->select('product.*', 'category.name as category_name', 'brand.name as brand_name')
        ->first();
        return view('backend.product.show', compact('product'));
    }
    
   
public function updateStatus($id)
{
    // Tìm sản phẩm cần cập nhật trạng thái
    $product = Product::findOrFail($id);

    // Đảo ngược trạng thái (nếu đang bật thì tắt, và ngược lại)
    $product->status = $product->status == 1 ? 0 : 1;

    // Lưu thay đổi vào cơ sở dữ liệu
    $product->save();

    // Chuyển hướng trở lại trang quản lí sản phẩm
    return redirect()->route('admin.product.index')->with('success', 'Trạng thái sản phẩm đã được cập nhật.');
}
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        $category = Category::all();
        $brand = Brand::all();
        return view('backend.product.edit', compact('product', 'category', 'brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|integer',
            'brand_id' => 'required|integer',
            'price' => 'required|numeric',
            'pricesale' => 'nullable|numeric',
            'detail' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $product = Product::findOrFail($id);

        $product->name = $request->name;
        $product->slug = $request->name;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->price = $request->price;
        $product->pricesale = $request->pricesale;
        $product->detail = $request->detail;

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/product'), $imageName);
            $product->image = $imageName;
        }

        $product->save();

        return redirect()->route('admin.product.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->status = 0; // Assuming 0 means deleted
        $product->save();

        return redirect()->route('admin.product.index')->with('success', 'Product deleted successfully.');
    }
}