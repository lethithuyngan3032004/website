<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = User::where("status", "!=", 0)
                    ->orderBy("created_at", "DESC")
                    ->select("id", "image", "name", "username", "email", "phone", "roles")
                    ->get();

        return view('backend.user.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'username' => 'required|string|unique:users|max:255',
            'password' => 'required|string|min:6',
            'address' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'roles' => 'nullable|string|max:255',
            'status' => 'required|in:1,2',
        ]);

        try {
            $user = new User();
            $user->name = $request->name;
            $user->gender = $request->gender;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->username = $request->username;
            $user->password = bcrypt($request->password);
            $user->address = $request->address;
            $user->roles = $request->roles;
            $user->status = $request->status;

            // Xử lý upload hình ảnh
            if ($request->hasFile('image')) {
                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('images/users'), $imageName);
                $user->image = $imageName;
            }

            $user->save();

            // Chuyển hướng về trang danh sách thành viên với thông báo thành công
            return redirect()->route('admin.user.index')->with('success', 'Thành viên đã được thêm thành công.');

        } catch (\Exception $e) {
            // Chuyển hướng về trang tạo thành viên với thông báo lỗi
            return redirect()->route('admin.user.create')->with('error', 'Đã có lỗi xảy ra. Vui lòng thử lại.');
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
