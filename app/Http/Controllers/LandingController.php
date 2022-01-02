<?php

namespace App\Http\Controllers;

use App\Models\Landing;
use \App\Http\Requests\LandingRequest;

class LandingController extends Controller
{
    public $ru_title;
    public $en_title;
    
    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
        $this->ru_title='Главная';
        $this->en_title='Main';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        session(['ru_title'=>$this->ru_title, 'en_title'=>$this->en_title]);
        $landing=Landing::all();
        return view('landings.landings', compact('landing'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        session(['ru_title'=>$this->ru_title, 'en_title'=>$this->en_title]);
        return view('landings.landingcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\LandingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LandingRequest $request)
    {
        $valid=$request->validated();
        
        $landing=new Landing;
        $landing->ru_text=$request->input('ru_text');
        $landing->en_text=$request->input('en_text');
        $landing->save();
        return redirect()->route('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Landing  $landing
     * @return \Illuminate\Http\Response
     */
    public function show(Landing $landing)
    {
        session(['ru_title'=>$this->ru_title, 'en_title'=>$this->en_title]);
        return view('landings.main', compact('landing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Landing  $landing
     * @return \Illuminate\Http\Response
     */
    public function edit(Landing $landing)
    {
        session(['ru_title'=>$this->ru_title, 'en_title'=>$this->en_title]);
        $landing=Landing::first();
        return view('landings.landingedit', compact('landing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\LandingRequest  $request
     * @param  \App\Models\Landing  $landing
     * @return \Illuminate\Http\Response
     */
    public function update(LandingRequest $request, Landing $landing)
    {
        $valid=$request->validated();
        
        $landing=Landing::find($landing->id);
        $landing->ru_text=$request->input('ru_text');
        $landing->en_text=$request->input('en_text');
        $landing->save();
        return redirect()->route('landings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Landing  $landing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Landing $landing)
    {
        $landing=Landing::find($landing->id);
        $landing->delete();
        return redirect()->route('landings.index');
    }
}
