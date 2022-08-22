<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home(Request $request)
    {
        $q = $request->get('q');

        $data['result'] = Admin::where(function ($query) use ($q) {
            $query->where('kategori_produk', 'like', '%' . $q . '%');
            $query->orwhere('nama_produk', 'like', '%' . $q . '%');
            $query->orwhere('stok', 'like', '%' . $q . '%');
            $query->orwhere('harga_produk', 'like', '%' . $q . '%');
        })->paginate();

        $data['q'] = $q;
        return view('user.index', $data);
    }
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
        return view('user.index', $data);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show($id)
    {
        $user = Admin::findOrfail($id);
        return view('user.show', compact('user'));
    }
}
