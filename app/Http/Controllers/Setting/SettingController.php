<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\Artical;
use App\Models\Department;
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
        $settings=Setting::all();
//        $arr= array('setting' => $setting);
       return view('back.Settings.create', compact('settings'));
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
    public function store(Request $request)
    {
//        $validated = $request->validated();
        $setting = new Setting();
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
            $setting->photo= $filename;
        };

        $setting->save();
        session()->flash('success');

        return redirect()->back();
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

    public function update(Request $request)
    {

        try {
            $setting = Setting::findOrFail($request->id);
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
            toastr()->success(trans('setting.messages_store'));
            return redirect()->route('setting.index');

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }


    }
    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $setting = Setting::findOrFail($request->id)->delete();
        toastr()->error(trans('messages.Delete'));
        return redirect()->route('setting.index');

    }
}
