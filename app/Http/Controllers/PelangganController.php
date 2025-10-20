<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $data['dataPelanggan'] = Pelanggan::all();
		return view('admin.pelanggan.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

		$data = $request->validate([
        'first_name' => 'required|string',
        'last_name' => 'required|string',
        'birthday' => 'nullable|date',
        'gender' => 'required|string',
        'email' => 'nullable|email',
        'phone' => 'nullable|string',
        ]);

		Pelanggan::create($data);

		return redirect()->route('pelanggan.index')->with('success','Penambahan Data Berhasil!');

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
