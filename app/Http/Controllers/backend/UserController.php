<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function status($id)
    {
        $user = User::find($id);
        if ($user) {
            // Đảo ngược trạng thái từ 1 sang 2 và ngược lại
            $user->status = $user->status == 1 ? 2 : 1;
            $user->save();
        }

        return redirect()->route('admin.user.index');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = User::where("status", "!=", 0)
            ->orderBy("created_at", "DESC")
            ->select("id", "image", "name", "username", "email", "phone", "roles","status")
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
    public function store(StoreUserRequest $request)
{
    $user = new User();
    $user->name = $request->name;
    $user->username = $request->username;
    $user->phone = $request->phone;
    $user->email = $request->email;
    $user->address = $request->address;
    $user->password = bcrypt($request->password); // Mã hóa mật khẩu
    $user->roles = $request->roles;
    $user->gender = $request->gender;

    // Tải lên tệp
    if ($request->hasFile('image')) {
        $fileName = date('YmdHis') . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('images/users/'), $fileName);
        $user->image = $fileName;
    }

    $user->status = $request->status;
    $user->created_at = now();
    $user->created_by = Auth::id() ?? 1;

    $user->save();

    return redirect()->route('admin.user.create')->with('success', 'Thêm thành viên thành công.');
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
