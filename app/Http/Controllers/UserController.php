<?php
namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['dataUser'] = User::all();
        return view('admin.user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data['name']     = $request->name;
        $data['email']    = $request->email;
        $data['password'] = $request->password;

        User::create($data);

        return redirect()->route('user.index')->with('success', 'Penambahan Data Berhasil!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['user'] = User::findOrFail($id);
        return view('admin.user.edit', $data);
    }


    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $user->name  = $request->name;
        $user->email = $request->email;

        // update password jika diisi
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('user.index')->with('success', 'Data Berhasil Diupdate!');
    }

    public function destroy(string $id)
    {
        User::findOrFail($id)->delete();

        return redirect()->route('user.index')->with('success', 'Data Berhasil Dihapus!');
    }
}
