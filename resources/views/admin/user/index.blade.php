@extends('layouts.admin.app')

@section('content')
<div class="py-4">
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div>
            <h1 class="h4">Data User</h1>
            <p class="mb-0">List seluruh user</p>
        </div>
        <div>
            <a href="{{ route('user.create') }}" class="btn btn-success text-white">
                Tambah User
            </a>
        </div>
    </div>
</div>

<div class="card border-0 shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-centered table-nowrap mb-0 rounded">
                <thead class="thead-light">
                    <tr>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Password (hashed)</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataUser as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->password }}</td>

                        <td>
                            <a href="{{ route('user.edit', $item->id) }}" class="btn btn-info btn-sm">
                                Edit
                            </a>

                            <form action="{{ route('user.destroy', $item->id) }}"
                                  method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus user ini?')">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
