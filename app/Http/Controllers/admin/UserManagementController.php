<?php

namespace App\Http\Controllers\admin;

use App\DataTables\UsersDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('admin.pages.user-management.users.list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {        
        $user = User::create([
            'name' => $request->user_name,
            'email' => $request->user_email,
            'password' => 'ggg',
        ]);
        return redirect()->route('admin.user-management.users.index');

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
    public function show(User $user)
    {
        return view('admin.pages.user-management.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.pages.user-management.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user = User::findOrFail($user->id);

        // Update the user's information
        $user->name = $request->user_name;
        $user->email = $request->user_email;
        $user->save();
        return redirect()->route('admin.user-management.users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // $auth = Auth::user();
        // // Check if the authenticated user is an admin
        // if ($auth->type !== 'admin') {
        //     return response()->json([
        //         'status_code' => 401,
        //         'type' => 'error',
        //         'message' => 'You are not authorized to perform this action.',
        //     ], 401);
        // }

        // Check if the user exists
        if (!$user) {
            return response()->json([
                'status_code' => 404,
                'type' => 'error',
                'message' => 'Sorry! Record not found.',
            ], 404);
        }

        // Delete the user
        $user->delete();
        
        // return redirect()->route('admin/user-management/users');
        return redirect()->route('admin.user-management.users.index');
    }
}
