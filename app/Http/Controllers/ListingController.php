<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListingController extends Controller
{
    public function index(Request $request, $modelName) {
        $model = '\App\Models\\'.ucfirst($modelName);
        $records = $model::paginate(5);
        $adminUser = Auth::guard('admin')->user();
        return view('admin.listing',[
            'user'=>$adminUser,
            'records'=>$records
        ]);
    }
}