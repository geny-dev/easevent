<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\DataTables\EventDataTable;
use App\Models\Event;
use Illuminate\Http\Request;


class EnvironmentController extends Controller
{
    //
    public function event(EventDataTable $dataTable) {
        return $dataTable->render('admin.pages.env-management.event.list');
    }
}
