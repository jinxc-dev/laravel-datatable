<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\EmployeesDataTable;
use App\DataTables\EmployeesDataTablesEditor;

class EmployeeController extends Controller
{
    public function index(EmployeesDataTable $dataTable)
    {
        return $dataTable->render('employees.index');
    }

    public function store(EmployeesDataTablesEditor $editor)
    {
        return $editor->process(request());
    }
}
