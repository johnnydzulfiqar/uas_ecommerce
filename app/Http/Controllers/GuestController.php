<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class GuestController extends Controller
{
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
}
