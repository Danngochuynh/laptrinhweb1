@extends('dashboard')

@section('content')
<main>
    <div class="container mt-5 d-flex justify-content-center">
        <div class="border border-2 border-dark p-5" style="max-width: 500px; width: 100%">
            <h1 class="text-center fs-5 mb-4">Màn hình cập nhật</h1>
            <form action="{{ route('user.postUpdateUser') }}" method="POST">
                @csrf
                <input name="id" type="hidden" value="{{ $user->id }}">

                {{-- Username --}}
                <div class="mb-3 row align-items-center">
                    <label for="username" class="col-sm-3 form-label">Username</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control p-1 border border-dark rounded-0" name="name"
                            value="{{ old('name', $user->name) }}" id="username" required autofocus />
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                {{-- Email --}}
                <div class="mb-3 row align-items-center">
                    <label for="email" class="col-sm-3 form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control p-1 border border-dark rounded-0" name="email"
                            value="{{ old('email', $user->email) }}" id="email" required />
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                {{-- Age --}}
                <div class="form-group mb-3">
                <label for="username" class="col-sm-3 form-label">age </label>
                    <input type="text" placeholder="Age" id="age" class="form-control"
                        name="age" value="{{ old('age', $user->age) }}" required>
                    @error('age')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Facebook --}}
                <div class="form-group mb-3">
                <label for="username" class="col-sm-3 form-label">Facebook</label>
                    <input type="text" placeholder="Facebook" id="facebook" class="form-control"
                        name="facebook" value="{{ old('facebook', $user->facebook) }}">
                    @error('facebook')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Password --}}
                <div class="form-group mb-3">
                    <input type="password" placeholder="New Password (Optional)" id="password" class="form-control"
                        name="password">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="d-flex align-items-center mt-5">
                    <a class="ms-auto me-4 text-decoration-none" href="{{ route('user.list') }}">Quay lại</a>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
