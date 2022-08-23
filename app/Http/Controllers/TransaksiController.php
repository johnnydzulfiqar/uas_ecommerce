<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\Transaksi;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::where('users_id', Auth::id())->first();
        $transaksi = Transaksi::all();
        if (Auth::check() && Auth::user()->name == "Admin") {
            return view('admin.index_transaksi', compact('transaksi'));
        }
        return view('user.index_transaksi', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admin = Admin::all();
        return view('user.transaksi', compact('admin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transaksi =  new Transaksi;
        $transaksi->status = $request->status;
        $transaksi->admin_id = $request->admin_id;
        $transaksi->users_id = Auth::id();
        // dd($transaksi);
        $transaksi->save();
        return redirect('/user/transaksi');
        Transaksi::create();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $admin = Admin::findOrfail($id);
        // return view('user.transaksi', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Admin $id, Request $request)
    {

        $transaksi = Transaksi::find($request->id);
        $transaksi->status = $request->status;
        $transaksi->save();
        $stok = Admin::find($request->admin_id);
        $stok->stok = $request->stok;
        $stok->save();
        // dd($transaksi);
        return redirect('/admin/indextransaksi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
