<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show_login()
    {
        return view('login');
    }

    public function check_login(Request $request)
    {
        // Validate dữ liệu đầu vào
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Lấy thông tin đăng nhập
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        // Xác thực thông tin đăng nhập
        if (Auth::attempt($credentials)) {
            // Lấy thông tin người dùng hiện tại
            $user = Auth::user();

            // Kiểm tra giá trị role (loại bỏ khoảng trắng và chuẩn hóa)
            $role = trim(strtolower($user->role));

            // Kiểm tra vai trò và chuyển hướng
            if ($role === 'admin') {
                return redirect('/admin');
            } elseif ($role === 'user') {
                return redirect('/home'); // Trang của user
            } else {
                // Nếu role không hợp lệ, đăng xuất và quay lại
                Auth::logout();
                return redirect()->back()->with('error', 'Vai trò không hợp lệ!');
            }
        }

        // Nếu đăng nhập thất bại, quay lại trang login với thông báo lỗi
        return redirect()->back()
            ->with('error', 'Email hoặc mật khẩu không đúng!')
            ->withInput($request->except('password'));
    }
}