@extends('dashboard')

@section('content')
<main class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow rounded-4">
                    <div class="card-header bg-dark text-white text-center fs-5 fw-bold">
                        Thông Tin Người Dùng
                    </div>
                    <div class="card-body p-4">
                        <table class="table table-bordered table-hover align-middle mb-0">
                            <thead class="table-secondary text-center">
                                <tr>
                                    <th width="10%">ID</th>
                                    <th width="20%">Tên</th>
                                    <th width="25%">Email</th>
                                    <th width="20%">age</th>
                                    <th width="20%">facebook</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->age }}</td>
                                    <td>{{ $user->facebook }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-end">
                        <a href="{{ route('user.list') }}" class="btn btn-sm btn-secondary">← Quay lại danh sách</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
