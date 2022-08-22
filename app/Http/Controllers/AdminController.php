<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->get('q');

        $data['result'] = Admin::where(function ($query) use ($q) {
            $query->where('kategori_produk', 'like', '%' . $q . '%');
            $query->orwhere('nama_produk', 'like', '%' . $q . '%');
            $query->orwhere('stok', 'like', '%' . $q . '%');
            $query->orwhere('harga_produk', 'like', '%' . $q . '%');
        })->paginate();

        $data['q'] = $q;
        return view('admin.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules =
            [
                'kategori_produk' => 'required',
                'harga_produk' => 'required|numeric',
                'nama_produk' => 'required',
                'foto_produk' => 'required|mimes:jpg,png|max:1024',
                'deskripsi_produk' => 'required',
            ];
        $this->validate($request, $rules);
        $input = $request->all();
        if ($request->hasFile('foto_produk')) {
            $fileName = $request->foto_produk->getClientOriginalName();

            $request->foto_produk->storeAs('admin', $fileName);
            $input['foto_produk'] = $fileName;
        }
        Admin::create($input);
        return redirect('/admin/index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = Admin::findOrfail($id);
        return view('admin.show', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        return view('admin.create', compact(var_name: 'admin'));
    }

    public function update(Admin $admin, Request $request)
    {
        $rules =
            [
                'kategori_produk' => 'required',
                'harga_produk' => 'required|numeric',
                'nama_produk' => 'required',
                'foto_produk' => 'required|mimes:jpg,png|max:1024',
                'deskripsi_produk' => 'required',
            ];
        $this->validate($request, $rules);
        $input = $request->all();
        if ($request->hasFile('foto_produk')) {
            $fileName = $request->foto_produk->getClientOriginalName();

            $request->foto_produk->storeAs('admin', $fileName);
            $input['foto_produk'] = $fileName;
        }
        $admin->update($input);
        return redirect(to: '/admin/index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = Admin::find($id);
        $admin->delete();
        return redirect('/admin/index')->with('success', 'Data Berhasil Dihapus');
    }
}
