@extends('dashboard')

@section('content')
<main>
    <div class="container mt-5 d-flex justify-content-center">
        <div class="border border-2 border-dark p-5" style="max-width: 500px; width: 100%">
            <h1 class="text-center fs-5 mb-4">Thêm người dùng</h1>

            <form action="{{ route('user.postUser') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="name" id="username" required placeholder="Nhập username">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required placeholder="Nhập email">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label">Mật khẩu</label>
                    <input type="password" class="form-control" name="password" id="password" required placeholder="Nhập mật khẩu">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a class="text-decoration-none" href="{{ route('user.list') }}">Quay lại</a>
                    <button type="submit" class="btn btn-primary">Thêm</button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
