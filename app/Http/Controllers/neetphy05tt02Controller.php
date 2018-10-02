<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; use App\Http\Controllers\Controller; use Validator, Input, Redirect; use Session; use App\neetphy05tt02;

class neetphy05tt02Controller extends Controller
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
        $neetphy05tt02 = neetphy05tt02::orderBy('id', 'desc')->paginate(250);
        return view('neetphy05tt02.index')->with('neetphy05tt02',$neetphy05tt02);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('neetphy05tt02.create');
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



       $neetphy05tt02 = new neetphy05tt02 ([
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


    $neetphy05tt02->save();

   // $post->tags()->sync($request->tags, false);

    Session::flash('success', 'The question was successfully saved!');

    return redirect()->route('neetphy05tt02.show', $neetphy05tt02->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $neetphy05tt02 = neetphy05tt02::find($id);
        return view('neetphy05tt02.show')->with('neetphy05tt02',$neetphy05tt02);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $neetphy05tt02 = neetphy05tt02::find($id);







        // set flash data with success message
        return view('neetphy05tt02.edit')->with('neetphy05tt02',$neetphy05tt02);

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
        $neetphy05tt02 = neetphy05tt02::find($id);



      // Save the data to the database


         $neetphy05tt02->solution = $request->input('solution');

        $neetphy05tt02->question_data = $request->input('question_data');
        $neetphy05tt02->option1 = $request->input('option1');
        $neetphy05tt02->option2 = $request->input('option2');
        $neetphy05tt02->option3 = $request->input('option3');
        $neetphy05tt02->option4 = $request->input('option4');
        $neetphy05tt02->correct_ans = $request->input('correct_ans');
        $neetphy05tt02->difficulty = $request->input('difficulty');
        $neetphy05tt02->ideal_time = $request->input('ideal_time');
        $neetphy05tt02->question_type = $request->input('question_type');





        $neetphy05tt02->save();




        // set flash data with success message
        Session::flash('success', 'This question was successfully updated.');

        // redirect with flash data to posts.show
        return redirect()->route('neetphy05tt02.show', $neetphy05tt02->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $neetphy05tt02 = neetphy05tt02::find($id);


        $neetphy05tt02->delete();

        Session::flash('success', 'The post was successfully deleted.');
        return redirect()->route('neetphy05tt02.index');
    }
}
