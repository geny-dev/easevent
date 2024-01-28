<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\DataTables\EnvsurroundingDataTable;
use App\Models\Envsurrounding;
use Illuminate\Http\Request;

class EnvsurroundingManagementController extends Controller
{
    public function index(EnvsurroundingDataTable $envsurrounding)
    {
        return $envsurrounding->render('admin.pages.env-management.surrounding.list');
    }
    public function create(Request $request)
    {        
        $surrounding_name = Envsurrounding::create([
            'name' => $request->surrounding_name,
        ]);
        return view('admin.pages.env-management.surrounding.list', compact('surrounding_name'));
    }
}
