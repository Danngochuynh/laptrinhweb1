@extends('dashboard')

@section('content')
<main>
    <div class="container mt-5 d-flex justify-content-center">
        <div class="card shadow p-4" style="max-width: 500px; width: 100%;">
            <h2 class="text-center mb-4 fs-5">Thêm người dùng</h2>
            
            <form action="{{ route('user.postUser') }}" method="POST">
                @csrf

                <!-- Username -->
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="name" id="username" required placeholder="Nhập username">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required placeholder="Nhập email">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Mật khẩu</label>
                    <input type="password" class="form-control" name="password" id="password" required placeholder="Nhập mật khẩu">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('user.list') }}" class="btn btn-outline-secondary">Quay lại</a>
                    <button type="submit" class="btn btn-primary">Thêm</button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
