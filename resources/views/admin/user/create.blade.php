@extends('layouts.admin.app')

@section('content')
<div class="py-4">
    <h1 class="h4">Tambah User</h1>
</div>

<div class="card border-0 shadow mb-4">
    <div class="card-body">

        <form action="{{ route('user.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" name="name" class="form-control"
                       required placeholder="Masukkan nama">
            </div>

            <div class="mb-3">
                <label class="form-label">Email User</label>
                <input type="email" name="email" class="form-control"
                       required placeholder="Masukkan email">
            </div>

            <div class="mb-3">
                <label class="form-label">Password User</label>
                <input type="password" name="password" class="form-control"
                       required placeholder="Masukkan password">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali</a>
        </form>

    </div>
</div>
@endsection
