<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa_model;
use App\Http\Requests\Storemahasiswa_modelRequest;
use App\Http\Requests\Updatemahasiswa_modelRequest;

class MahasiswaModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storemahasiswa_modelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storemahasiswa_modelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mahasiswa_model  $mahasiswa_model
     * @return \Illuminate\Http\Response
     */
    public function show(mahasiswa_model $mahasiswa_model)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mahasiswa_model  $mahasiswa_model
     * @return \Illuminate\Http\Response
     */
    public function edit(mahasiswa_model $mahasiswa_model)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatemahasiswa_modelRequest  $request
     * @param  \App\Models\mahasiswa_model  $mahasiswa_model
     * @return \Illuminate\Http\Response
     */
    public function update(Updatemahasiswa_modelRequest $request, mahasiswa_model $mahasiswa_model)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mahasiswa_model  $mahasiswa_model
     * @return \Illuminate\Http\Response
     */
    public function destroy(mahasiswa_model $mahasiswa_model)
    {
        //
    }
}
