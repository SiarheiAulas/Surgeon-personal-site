<?php

namespace App\Http\Controllers;

use App\Models\Review;
use \App\Http\Requests\ReviewsRequest;

class ReviewsController extends Controller
{
    public $ru_title;
    public $en_title;
    
    public function __construct(){
        $this->ru_title='Отзывы';
        $this->en_title='Reviews';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session(['ru_title'=>$this->ru_title, 'en_title'=>$this->en_title]);
        $reviews=Review::paginate(4);
        return view('reviews.reviews', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        session(['ru_title'=>$this->ru_title, 'en_title'=>$this->en_title]);
        return view('reviews.reviewcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ReviewsRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReviewsRequest $request)
    {
        $valid=$request->validated();
        
        $review=new Review;
        $review->from=$request->input('from');
        $review->rating=$request->input('rating');
        $review->header=$request->input('header');
        $review->text=$request->input('text');
        $review->email=$request->input('email');
        $review->save();
        return redirect()->route('reviews.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        session(['ru_title'=>$this->ru_title, 'en_title'=>$this->en_title]);
        return view('reviews.reviewshow', compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        session(['ru_title'=>$this->ru_title, 'en_title'=>$this->en_title]);
        return view('reviews.reviewedit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ReviewsRequest $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(ReviewsRequest $request, Review $review)
    {
        $valid=$request->validated();

        $review=Review::find($review->id);
        $review->from=$request->input('from');
        $review->rating=$request->input('rating');
        $review->header=$request->input('header');
        $review->text=$request->input('text');
        $review->email=$request->input('email');
        $review->save();
        return redirect()->route('reviews.show', ['review'=>$review->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        $review=Review::find($review->id);
        $review->delete();
        return redirect()->route('reviews.index');
    }
}
