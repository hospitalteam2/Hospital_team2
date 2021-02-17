<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Admin\Controller;
use App\Models\Artical;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $articals=Artical::orderBy('id', 'desc')->get();
        return view('site.home',compact('articals'));
    }
}
