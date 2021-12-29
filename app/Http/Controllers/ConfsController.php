<?php

namespace App\Http\Controllers;

use App\Models\Conf;
use \App\Http\Requests\ConfsRequest;
use \App\Http\Controllers\FileController;

class ConfsController extends Controller
{
    public $ru_title;
    public $en_title;
    
    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
        $this->ru_title='Конференции';
        $this->en_title='Conferences';
    }
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session(['ru_title'=>$this->ru_title, 'en_title'=>$this->en_title]);
        $conference=Conf::paginate(2);
        return view('confs.confs', compact('conference'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        session(['ru_title'=>$this->ru_title, 'en_title'=>$this->en_title]);
        return view('confs.confcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ConfsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConfsRequest $request)
    {
        $valid=$request->validated();
        
        $conference=new Conf;
        $conference->start_date=$request->input('start_date');
        $conference->end_date=$request->input('end_date');
        $conference->ru_header=$request->input('ru_header');
        $conference->en_header=$request->input('en_header');
        $conference->ru_description=$request->input('ru_description');
        $conference->en_description=$request->input('en_description');
        $conference->url_video=$request->input('url_video');

        if($request->hasFile('presentation')){
            $filecontroller=new FileController;
            $conference->url_pdf=$filecontroller->upload($request);
        }
        
        $conference->save();
        return redirect()->route('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Conf  $conf
     * @return \Illuminate\Http\Response
     */
    public function show(Conf $conf)
    {
        session(['ru_title'=>$this->ru_title, 'en_title'=>$this->en_title]);
        return view('confs.confshow', compact('conf'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Conf  $conf
     * @return \Illuminate\Http\Response
     */
    public function edit(Conf $conf)
    {
        session(['ru_title'=>$this->ru_title, 'en_title'=>$this->en_title]);
        return view('confs.confedit', compact('conf'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ConfsRequest  $request
     * @param  \App\Models\Conf  $conf
     * @return \Illuminate\Http\Response
     */
    public function update(ConfsRequest $request, Conf $conf)
    {
        $valid=$request->validated();
        
        $conf=Conf::find($conf->id);
        $conf->start_date=$request->input('start_date');
        $conf->end_date=$request->input('end_date');
        $conf->ru_header=$request->input('ru_header');
        $conf->en_header=$request->input('en_header');
        $conf->ru_description=$request->input('ru_description');
        $conf->en_description=$request->input('en_description');
        $conf->url_video=$request->input('url_video');
        
        if($request->hasFile('presentation')){
            $filecontroller=new FileController;
            $conf->url_pdf=$filecontroller->upload($request);
        }        
        
        $conf->save();
        return redirect()->route('confs.show', ['conf'=>$conf->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Conf  $conf
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conf $conf)
    {
        $conf=Conf::find($conf->id);
        $conf->delete();
        return redirect()->route('confs.index');
    }
}
