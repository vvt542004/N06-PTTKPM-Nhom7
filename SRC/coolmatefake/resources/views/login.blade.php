
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/dangnhap.css') }}">
</head>
<body>
    <div class="dangnhap">
        <div class="dangnhap-trai">
            <p>Đăng nhập một tài khoản sử dụng cho tất cả các dịch vụ</p>
            <img src="{{ asset('frontend/anh/Dvl store.png') }}" alt="Logo">
        </div>
        <div class="dangnhap-phai">
            <h2>Đăng nhập</h2>
            <form action="/check_login" method="POST">
                <div class="form-group">
                    <label for="username">Tên đăng nhập</label>
                    <input type="text" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input type="password" name="password" placeholder="Password" >
                </div>
               
                <button type="submit" class="nutdangnhap" >Đăng nhập</button>
               @csrf
            </form>
        </div>
    </div>
</body>
</html>
