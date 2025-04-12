<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-white">

    <!-- Header menu -->
    <div class="text-center py-2 border-bottom">
        Home |
        <strong>Đăng nhập</strong> |
        <a href="{{ route('user.createUser') }}" class="text-decoration-none">Đăng ký</a>
    </div>

    <!-- Form đăng nhập -->
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="border border-dark p-4" style="width: 350px;">
            <h5 class="text-center mb-4">Màn hình đăng nhập</h5>

            <form action="{{ route('user.authUser') }}" method="POST">
                @csrf

                <!-- Username -->
                <div class="mb-3">
                    <label for="email" class="form-label">Username</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>

                <!-- Mật khẩu -->
                <div class="mb-3">
                    <label for="password" class="form-label">Mật khẩu</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>

                <!-- Ghi nhớ -->
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="rememberMe" name="remember">
                    <label class="form-check-label" for="rememberMe">Ghi nhớ đăng nhập</label>
                </div>

                <!-- Quên mật khẩu & Đăng nhập -->
                <div class="d-flex justify-content-between align-items-center">
                    <a href="#" class="text-decoration-none">Quên mật khẩu</a>
                    <button type="submit" class="btn btn-primary">Đăng nhập</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <div class="text-center py-2 border-top">
        Lập trình web @01/2024
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
