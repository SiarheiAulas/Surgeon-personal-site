<?php

namespace App\Http\Controllers;

use App\Models\Bio;
use \App\Http\Requests\BiosRequest;

class BiosController extends Controller
{
    public $ru_title;
    public $en_title;

    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
        $this->ru_title='Резюме';
        $this->en_title='CV';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session(['ru_title'=>$this->ru_title, 'en_title'=>$this->en_title]);

        $bios=Bio::all();
        return view('bio.bios', compact('bios'));
        //return dd($en_title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        session(['ru_title'=>$this->ru_title, 'en_title'=>$this->en_title]);

        return view('bio.bioscreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\BiosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BiosRequest $request)
    {
        $valid=$request->validated();
        
        $bio=new Bio;
        $bio->ru_univer=$request->input('ru_univer');
        $bio->ru_intern=$request->input('ru_intern');
        $bio->ru_aspirant=$request->input('ru_aspirant');
        $bio->ru_departments=$request->input('ru_departments');
        $bio->ru_courses=$request->input('ru_courses');
        $bio->ru_practic_interes=$request->input('ru_practic_interes');
        $bio->ru_research_interes=$request->input('ru_research_interes');
        $bio->ru_society=$request->input('ru_society');
        $bio->en_univer=$request->input('en_univer');
        $bio->en_intern=$request->input('en_intern');
        $bio->en_aspirant=$request->input('en_aspirant');
        $bio->en_departments=$request->input('en_departments');
        $bio->en_courses=$request->input('en_courses');
        $bio->en_practic_interes=$request->input('en_practic_interes');
        $bio->en_research_interes=$request->input('en_research_interes');
        $bio->en_society=$request->input('en_society');
        
        if($request->hasFile('photo')){
            $file=new FileController;
            $bio->photo=$file->upload($request);
        }
        
        $bio->save();
        return redirect()->route('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bio  $bio
     * @return \Illuminate\Http\Response
     */
    public function show(Bio $bio)
    {
            //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bio  $bio
     * @return \Illuminate\Http\Response
     */
    public function edit(Bio $bio)
    {
        session(['ru_title'=>$this->ru_title, 'en_title'=>$this->en_title]);
        $bio=Bio::first();
        return view('bio.biosedit', compact('bio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\BiosRequest  $request
     * @param  \App\Models\Bio  $bio
     * @return \Illuminate\Http\Response
     */
    public function update(BiosRequest $request, Bio $bio)
    {
        $valid=$request->validated();

        $bio=Bio::find($bio->id);
        $bio->ru_univer=$request->input('ru_univer');
        $bio->ru_intern=$request->input('ru_intern');
        $bio->ru_aspirant=$request->input('ru_aspirant');
        $bio->ru_departments=$request->input('ru_departments');
        $bio->ru_courses=$request->input('ru_courses');
        $bio->ru_practic_interes=$request->input('ru_practic_interes');
        $bio->ru_research_interes=$request->input('ru_research_interes');
        $bio->ru_society=$request->input('ru_society');
        $bio->en_univer=$request->input('en_univer');
        $bio->en_intern=$request->input('en_intern');
        $bio->en_aspirant=$request->input('en_aspirant');
        $bio->en_departments=$request->input('en_departments');
        $bio->en_courses=$request->input('en_courses');
        $bio->en_practic_interes=$request->input('en_practic_interes');
        $bio->en_research_interes=$request->input('en_research_interes');
        $bio->en_society=$request->input('en_society');
        
        if($request->hasFile('photo')){
            $file=new FileController;
            $bio->photo=$file->upload($request);
        }
        
        $bio->save();
        return redirect()->route('bios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bio  $bio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bio $bio)
    {
        $bio=Bio::find($bio->id);
        $bio->delete();
        return redirect()->route('bios.index');
    }
}
