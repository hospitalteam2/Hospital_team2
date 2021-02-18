<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Admin\Controller;
use App\Models\Artical;
use App\Models\Department;
use App\Models\Setting;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $articals=Artical::all();
        $Departments=Department::all();
        $settings=Setting::all();
        return view('site.home',compact('articals','Departments','settings'));
    }

}
