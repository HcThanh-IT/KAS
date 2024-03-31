<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\AccountModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // Import Hash facade



class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('pages.login');
    }
    
    public function login(Request $request)
    {
        // Lấy giá trị username và password từ người dùng
        $username = $request->input('username');
        $password = $request->input('password');
//         $password = '1';
// $hashedPassword = Hash::make($password);
// echo $hashedPassword;

        // Thực hiện truy vấn để tìm người dùng dựa trên giá trị username
        $user = AccountModel::where('username', $username)->first();

        if ($user) {
            // Người dùng được tìm thấy, kiểm tra mật khẩu
            if (Hash::check($password, $user->password)) {
                // Mật khẩu chính xác, chuyển hướng người dùng đến trang chính
                return redirect()->route('home');
            } else {
                // Mật khẩu không chính xác, trả về một thông báo lỗi
                return response()->json(['message' => 'Mật khẩu không chính xác'], 401);
            }
        } else {
            // Không tìm thấy người dùng, trả về một thông báo lỗi
            return response()->json(['message' => 'Không tìm thấy người dùng'], 404);
        }
    }
}
