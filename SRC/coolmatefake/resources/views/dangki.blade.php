<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <link rel="stylesheet" href="{{asset('frontend/css/dangky.css')}}">
</head>
<body>
    <div class="dangky">
        <div class="dangky1">Đăng ký tài khoản</div>
        <form>
            <div class="dangky2">
                <label for="username">Tên Đăng Nhập:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="dangky2">
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="dangky2">
                <label for="password">Nhập lại mật khẩu:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="dangky2">
                <button type="submit" id="dky" onclick="window.location.href='/dangnhap';">Đăng Ký</button>
            </div>
            <div class="dangky3">
                <div class="dangky3-1">Bạn đã có tài khoản?</div>
                <a href="/dangnhap">
                    <div class="dangky3-2">Đăng Nhập</div>
                </a>
            </div>
        </form>
    </div>
</body>
</html>