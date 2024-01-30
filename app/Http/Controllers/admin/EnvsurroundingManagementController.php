<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\EnvsurroundingDataTable;
use App\Models\Envsurrounding;

class EnvsurroundingManagementController extends Controller
{
    public function index(EnvsurroundingDataTable $dataTable)
    {
        return $dataTable->render('admin.pages.env-management.envsurrounding.list');
    } 
    public function destroy(Envsurrounding $envsurrounding) {
        if (!$envsurrounding) {
            return response()->json([
                'status_code' => 404,
                'type' => 'error',
                'message' => 'Sorry! Record not found.',
            ], 404);
        }

        // Delete the user
        $envsurrounding->delete();

        return redirect()->route('admin.env-management.envsurrounding.index');
    }
    public function create(Request $request)
    {        
        $envsurrounding = Envsurrounding::create([
            'name' => $request->envsurrounding_name,
        ]);
        return redirect()->route('admin.env-management.envsurrounding.index');
    }
    public function edit(Envsurrounding $envsurrounding) {
        return view('admin.pages.env-management.envsurrounding.edit', compact('envsurrounding'));
    }

    public function update(Request $request, Envsurrounding $envsurrounding)
    {
        $user = Envsurrounding::findOrFail($envsurrounding->id);

        // Update the user's information
        $user->name = $request->event_name;
        $user->save();
        return redirect()->route('admin.env-management.envsurrounding.index');
    }
}
