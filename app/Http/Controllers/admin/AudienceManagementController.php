<?php

namespace App\Http\Controllers\admin;
use App\DataTables\AudienceDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AudienceManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(AudienceDataTable $dataTable)
    {
        $dataTable->render('admin.pages.user-management.audience.list');
        // return view('admin/pages/user-management/audience/list', $data);
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
