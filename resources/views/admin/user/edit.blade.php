@extends('layouts.admin.app')

@section('content')
<div class="py-4">
    <h1 class="h4">Edit User</h1>
</div>

<div class="card border-0 shadow mb-4">
    <div class="card-body">

        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" name="name" class="form-control"
                       value="{{ $user->name }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email User</label>
                <input type="email" name="email" class="form-control"
                       value="{{ $user->email }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password (opsional)</label>
                <input type="password" name="password" class="form-control"
                       placeholder="Isi jika ingin ganti password">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali</a>
        </form>

    </div>
</div>
@endsection
