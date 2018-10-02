<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; use App\Http\Controllers\Controller; use Validator, Input, Redirect; use Session; use App\neetbio01tt01;

class neetbio01tt01Controller extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $neetbio01tt01 = neetbio01tt01::orderBy('id', 'desc')->paginate(250);
        return view('neetbio01tt01.index')->with('neetbio01tt01',$neetbio01tt01);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('neetbio01tt01.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'question_data'=>'required',
            'question_img'=>'nullable',
            'option1'=>'nullable',
            'option2'=>'nullable',
            'option3'=>'nullable',
            'option4'=>'nullable',
            'correct_ans'=>'required',
            'difficulty'=>'required',
            'ideal_time'=>'required',
            'question_type'=>'required',
            'solution'=>'required'
        ]);

        if($validator->fails())
        return response()->json($validator->errors(), 404);
    // store in the database

       $question_data = $request->input('question_data');
       $option1 = $request->input('option1');
       $option2 = $request->input('option2');
       $option3 = $request->input('option3');
       $option4 = $request->input('option4');
       $correct_ans = $request->input('correct_ans');
       $difficulty = $request->input('difficulty');
       $ideal_time = $request->input('ideal_time');
      $question_type = $request->input('question_type');
       $solution = $request->input('solution');



       $neetbio01tt01 = new neetbio01tt01 ([
        'question_data'=>$question_data,
        'option1'=>$option1,
        'option2'=>$option2,
        'option3'=>$option3,
        'option4'=>$option4,
        'correct_ans'=>$correct_ans,
        'difficulty'=>$difficulty,
        'ideal_time'=>$ideal_time,
          'question_type'=>$question_type,
        'solution'=>$solution

       ]);


    $neetbio01tt01->save();

   // $post->tags()->sync($request->tags, false);

    Session::flash('success', 'The question was successfully saved!');

    return redirect()->route('neetbio01tt01.show', $neetbio01tt01->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $neetbio01tt01 = neetbio01tt01::find($id);
        return view('neetbio01tt01.show')->with('neetbio01tt01',$neetbio01tt01);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $neetbio01tt01 = neetbio01tt01::find($id);







        // set flash data with success message
        return view('neetbio01tt01.edit')->with('neetbio01tt01',$neetbio01tt01);

        // redirect with flash data to posts.show
Session::flash('success', 'The question was successfully saved!');



        // return the view and pass in the var we previously created

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $neetbio01tt01 = neetbio01tt01::find($id);



      // Save the data to the database


         $neetbio01tt01->solution = $request->input('solution');

        $neetbio01tt01->question_data = $request->input('question_data');
        $neetbio01tt01->option1 = $request->input('option1');
        $neetbio01tt01->option2 = $request->input('option2');
        $neetbio01tt01->option3 = $request->input('option3');
        $neetbio01tt01->option4 = $request->input('option4');
        $neetbio01tt01->correct_ans = $request->input('correct_ans');
        $neetbio01tt01->difficulty = $request->input('difficulty');
        $neetbio01tt01->ideal_time = $request->input('ideal_time');
        $neetbio01tt01->question_type = $request->input('question_type');





        $neetbio01tt01->save();




        // set flash data with success message
        Session::flash('success', 'This question was successfully updated.');

        // redirect with flash data to posts.show
        return redirect()->route('neetbio01tt01.show', $neetbio01tt01->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $neetbio01tt01 = neetbio01tt01::find($id);


        $neetbio01tt01->delete();

        Session::flash('success', 'The post was successfully deleted.');
        return redirect()->route('neetbio01tt01.index');
    }
}