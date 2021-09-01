<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\Client;
use Illuminate\Http\Request;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Ad::all();
        return view('staff.ads.index', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        return view('staff.ads.create',compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->all();

        if($request->hasFile('banner')){
            $ext = $request->file('banner')->getClientOriginalExtension();

            $name = uniqid().".".$ext;

            $request->file('banner')->storeAs('images/ads/', $name, 'public');
            $validatedData['banner'] = 'images/ads'.$name;
        }

        Ad::create($validatedData);

        return redirect()->route('staff.ads.index')->withSuccess('Ad created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  Ad $ad
     * @return \Illuminate\Http\Response
     */
    public function show(Ad $ad)
    {
        return view('staff.ads.show',compact('ad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Ad $ad
     * @return \Illuminate\Http\Response
     */
    public function edit(Ad $ad)
    {
        return view('staff.ads.edit',compact('ad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  Ad $ad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ad $ad)
    {
        $validatedData = $request->all();

        $ad->update($validatedData);

        return redirect()->route('staff.ads.index')->withSuccess('Ad details updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Ad $ad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ad $ad)
    {
        //
    }
}
