<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;

use App\Http\Requests\StoreSetting;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting=Setting::first();
        $arr= array('setting' => $setting);
       return view('back.Settings.create', $arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSetting $request)
    {

        try {
           $validated = $request->validated();
            $setting = Setting::find(1);
            $setting->address = ['en' => $request->address_en, 'ar' => $request->address];
            $setting->phone = $request->phone;
            $setting->email = $request->email;
            $setting->twitter = $request->twitter;
            $setting->google = $request->google;
            $setting->facebook = $request->facebook;
            $setting->linked = $request->linked;
            $setting->skype = $request->skype;

            if ($img = $request->file('photo')) {
                $file = $request->file('photo');

                $extension = $file->getClientOriginalExtension();
                $filename = md5(time()) . '.' . $extension;
                $img->move('Site/images/logo', $filename);
                $setting->photo = $filename;
            }

            $setting->save();
            toastr()->success(trans('setting.messages_update'));
            return redirect()->route('setting.index');

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
