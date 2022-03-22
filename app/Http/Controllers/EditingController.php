<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditingController extends Controller
{
    public function create(Request $request, $modelName) {
        // dd($request); exit;
        $adminUser = Auth::guard('admin')->user();
        // $model = '\App\Models\\'.ucfirst($modelName);
        // $model = new $model;
        return view('admin.editing', [
            'user'=>$adminUser,
            'modelName'=>$modelName,
        ]);
    }

    public function store(Request $request, $modelName) {
        dd($request->all); exit;
        
    }
}
