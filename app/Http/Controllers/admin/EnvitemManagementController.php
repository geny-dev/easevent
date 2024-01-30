<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\DataTables\EnvitemDatatable;
use App\Models\Envitem;

use Illuminate\Http\Request;

class EnvitemManagementController extends Controller
{
    public function index(EnvitemDataTable $dataTable)
    {
        return $dataTable->render('admin.pages.env-management.envitem.list');
    }
    public function create(Request $request)
    {        
        $envitem = Envitem::create([
            'name' => $request->envitem_name,
        ]);
        return redirect()->route('admin.env-management.envitem.index');
    } 
    public function edit(Envitem $envitem) {
        return view('admin.pages.env-management.envitem.edit', compact('envitem'));
    }
    public function update(Request $request, Envitem $envitem)
    {
        $user = Envitem::findOrFail($envitem->id);

        // Update the user's information
        $user->name = $request->event_name;
        $user->save();
        return redirect()->route('admin.env-management.envitem.index');
    }
    public function destroy(Envitem $envitem) {
        if (!$envitem) {
            return response()->json([
                'status_code' => 404,
                'type' => 'error',
                'message' => 'Sorry! Record not found.',
            ], 404);
        }

        // Delete the user
        $envitem->delete();

        return redirect()->route('admin.env-management.envitem.index');
    }
}
