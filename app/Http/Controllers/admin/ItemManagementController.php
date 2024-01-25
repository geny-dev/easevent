<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\UsersDataTable;


class ItemManagementController extends Controller
{
    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('admin.pages.item-management.list');
    }
    //
}
