<?php

namespace App\Http\Controllers;

use App\Models\Publ;
use \App\Http\Requests\PublsRequest;
use \App\Http\Controllers\FileController;

class PublsController extends Controller
{
    public $title;

    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
        $this->ru_title='Публикации';
        $this->en_title='Publications';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        session(['ru_title'=>$this->ru_title, 'en_title'=>$this->en_title]);
        $publication=Publ::paginate(5);
        return view('publications.publications', compact('publication'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        session(['ru_title'=>$this->ru_title, 'en_title'=>$this->en_title]);
        return view('publications.publicationcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\\Http\Requests\PublsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PublsRequest $request)
    {
        $valid=$request->validated();
        
        $publication=new Publ;
        $publication->date=$request->input('date');
        $publication->ru_header=$request->input('ru_header');
        $publication->en_header=$request->input('en_header');
        $publication->ru_biblio=$request->input('ru_biblio');
        $publication->en_biblio=$request->input('en_biblio');
        $publication->doi=$request->input('doi');
        $publication->ru_abstract=$request->input('ru_abstract');
        $publication->en_abstract=$request->input('en_abstract');
        $publication->ext_url=$request->input('ext_url');
        
        if($request->hasFile('pdf')){
            $filecontroller=new FileController;
            $publication->int_url=$filecontroller->upload($request);
        }

        $publication->save();
        return redirect()->route('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publ  $publication
     * @return \Illuminate\Http\Response
     */
    public function show(Publ $publ)
    {
        session(['ru_title'=>$this->ru_title, 'en_title'=>$this->en_title]);
        return view('publications.publicationshow', compact('publ'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publ  $publication
     * @return \Illuminate\Http\Response
     */
    public function edit(Publ $publ)
    {
        session(['ru_title'=>$this->ru_title, 'en_title'=>$this->en_title]);
        return view('publications.publicationedit', compact('publ'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\\Http\Requests\PublsRequest  $request
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function update(PublsRequest $request, Publ $publ)
    {
        $valid=$request->validated();

        $publ=Publ::find($publ->id);
        $publ->date=$request->input('date');
        $publ->ru_header=$request->input('ru_header');
        $publ->en_header=$request->input('en_header');
        $publ->ru_biblio=$request->input('ru_biblio');
        $publ->en_biblio=$request->input('en_biblio');
        $publ->doi=$request->input('doi');
        $publ->ru_abstract=$request->input('ru_abstract');
        $publ->en_abstract=$request->input('en_abstract');
        $publ->ext_url=$request->input('ext_url');
        
        if($request->hasFile('pdf')){
            $filecontroller=new FileController;
            $publ->int_url=$filecontroller->upload($request);
        }
        
        $publ->save();
        return redirect()->route('publs.show',['publ'=>$publ->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publ  $publication
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publ $publ)
    {
        $publication=Publ::find($publ->id);
        $publication->delete();
        return redirect()->route('publs.index');

    }
}
