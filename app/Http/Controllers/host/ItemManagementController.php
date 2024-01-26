<?php

namespace App\Http\Controllers\host;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\UsersDataTable;


class ItemManagementController extends Controller
{
    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('host.pages.item-management.list');
    }
    //
}
