<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    
    public function index()
    {
        $list = Product::where("product.status", "!=", 0)
            ->join("category", "product.category_id", "=", "category.id")
            ->join("brand", "product.brand_id", "=", "brand.id")
            ->orderBy("product.created_at", "DESC") // mới nhất lên đầu
            ->select("product.id", "product.slug", "product.name", "product.image", "brand.name as brandname", "category.name as categoryname", "product.price", "product.pricesale", "product.detail","product.status")
            ->get();

        return view('backend.product.index', compact("list"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list_category = Category::where('status', '!=', 0)
            ->orderBy('created_at', 'DESC')
            ->get();

        $list_brand = Brand::where('status', '!=', 0)
            ->orderBy('created_at', 'DESC')
            ->get();
        $htmlcategoryid="";
        $htmlbrandid="";
        foreach($list_category as $row)
        {
            $htmlcategoryid.="<option value='".$row->id."'>".$row->name."</option>";
        }
        foreach($list_brand as $row)
        {
            $htmlbrandid.="<option value='".$row->id."'>".$row->name."</option>";
        }
        return view('backend.product.create',compact("htmlcategoryid","htmlbrandid"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->brand_id = $request->brand_id;
        $product->category_id = $request->category_id;
        $product->qty = $request->qty;
        $product->price = $request->price;
        $product->pricesale = $request->pricesale;
        $product->detail = $request->detail;
    
        // Upload file
        if ($request->hasFile('image')) {
            $fileName = date('YmdHis') . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/products/'), $fileName);
            $product->image = $fileName;
        }
    
        $product->status = $request->status;
        $product->slug = Str::slug($request->name, '-');
        $product->created_at = now();
        $product->created_by = Auth::id() ?? 1; //dang nhap
    
        $product->save();
    
        return redirect()->route('admin.product.create')->with('success', 'Thêm sản phẩm thành công.');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::with(['category', 'brand', 'creator', 'updater'])
            ->findOrFail($id);

        return view('backend.product.show', compact('product'));
    }
    

    public function edit(string $id)
    {
        $product= Product::find($id); 
        if($product==null)
        {
            return redirect()->route('admin.product.index');
         }
         $list_category = Category::where('status', '!=', 0)
         ->orderBy('created_at', 'DESC')
         ->get();

        $list_brand = Brand::where('status', '!=', 0)
            ->orderBy('created_at', 'DESC')
            ->get();
        $htmlcategoryid="";
        $htmlbrandid="";
        foreach($list_category as $row)
        {
            if($product->category_id==$row->id)
            {
                $htmlcategoryid.="<option selected value='".$row->id."'>".$row->name."</option>";

            }
            else
            {
                $htmlcategoryid.="<option value='".$row->id."'>".$row->name."</option>";

            }

        }
        foreach($list_brand as $row)
        {
            if($product->brand_id==$row->id)
            {
                $htmlbrandid.="<option selected value='".$row->id."'>".$row->name."</option>";
            }
            else
            {
                $htmlbrandid.="<option value='".$row->id."'>".$row->name."</option>";
            }

           
        }
        return view('backend.product.edit',compact("product","htmlcategoryid","htmlbrandid"));
    }

    public function update(UpdateProductRequest $request, string $id)
    {
        $product = Product::find($id);
        if ($product == null) {
            return redirect()->route('admin.product.index')->with('error', 'Sản phẩm không tồn tại.');
        }
    
        // Cập nhật thông tin sản phẩm
        $product->name = $request->name;
        $product->description = $request->description;
        $product->brand_id = $request->brand_id;
        $product->category_id = $request->category_id;
        $product->qty = $request->qty;
        $product->price = $request->price;
        $product->pricesale = $request->pricesale;
        $product->detail = $request->detail;
    
        // Kiểm tra xem có hình mới được tải lên không
        if ($request->hasFile('image')) {
            // Nếu có hình mới, lưu hình mới và cập nhật trường image của sản phẩm
            $fileName = date('YmdHis') . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/products/'), $fileName);
            $product->image = $fileName;
        } else {
            // Nếu không có hình mới, sử dụng lại hình cũ của sản phẩm
            $product->image = $product->image; // Sử dụng lại hình cũ
        }
    
        $product->status = $request->status;
        $product->slug = Str::slug($request->name, '-');
        $product->updated_at = now(); // Chỉnh sửa thời gian cập nhật
        $product->updated_by = Auth::id() ?? 1; // Sử dụng thông tin người dùng đã đăng nhập
    
        $product->save();
    
        return redirect()->route('admin.product.index')->with('success', 'Cập nhật sản phẩm thành công.');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        if($product==null)
        {
            return redirect()->route('admin.product.index');
         }
         $product->delete(); //xoa khoi csdl
         return redirect()->route('admin.product.trash')->with('success', 'Đã xóa sản phẩm.');

    }

    public function status($id)
    {
        $product = Product::find($id);
        if($product==null)
        {
            return redirect()->route('admin.product.index');
         }
        // Đảo ngược trạng thái từ 1 sang 2 và ngược lại
        $product->status = $product->status == 1 ? 2 : 1;
        $product->updated_at = now();
        $product->updated_by = Auth::id() ?? 1; //dang nhap
        $product->save();

        return response()->json(['status' => $product->status], 200);
    }
    public function delete($id)
    {
        $product = Product::find($id);
        if($product==null)
        {
            return redirect()->route('admin.product.index');
         }
        $product->status = 0;
        $product->updated_at = now();
        $product->updated_by = Auth::id() ?? 1; //dang nhap
        $product->save();

        return redirect()->route('admin.product.index')->with('success', 'Đã xóa sản phẩm vào thùng rác.');
    }
    public function restore($id)
    {
        $product = Product::find($id);
        if($product==null)
        {
            return redirect()->route('admin.product.index');
         }
        $product->status = 2;
        $product->updated_at = now();
        $product->updated_by = Auth::id() ?? 1; //dang nhap
        $product->save();

        return redirect()->route('admin.product.trash')->with('success', 'Đã khôi phục sản phẩm.');
    }
}
