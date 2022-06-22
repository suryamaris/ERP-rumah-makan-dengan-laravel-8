<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class registerController extends Controller
{
    public function add()
    {
        return view('admin.karyawan.add');
    }

    public function store()
    {
        $validateData = request()->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'image' => 'null',
            'role' => 'required|max:255',
            'jabatan' => 'required|max:255',
            'cabang' => 'required|max:255',
            'agama' => 'required|max:255',
            'hp' => 'required|max:255',
            'alamat' => 'required|max:255',
        ]);

        $validateData['password'] = bcrypt($validateData['password']);
        $validateData['image'] = 'Kosong';
        User::create($validateData);
        request()->session()->flash('success', 'Registration succsessfull, please log-in');
        return redirect('/admin');
    }
}
