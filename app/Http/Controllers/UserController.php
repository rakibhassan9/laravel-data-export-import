<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UserExport;
use App\Exports\UserImport;
use Excel;


class UserController extends Controller
{
   
    public function exportUser(){
       
        return Excel::download(new UserExport, 'users.xlsx');
    }

    public function importUser(Request $request){
       
        dd('import');
    }
}
