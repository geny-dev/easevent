<?php

namespace App\Http\Controllers\admin;
use App\DataTables\SurroundingsDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SurroundingManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SurroundingsDataTable $dataTable)
    {
        return $dataTable->render('admin.pages.user-management.surroundings.list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
