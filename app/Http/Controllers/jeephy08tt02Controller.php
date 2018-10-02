<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; use App\Http\Controllers\Controller; use Validator, Input, Redirect; use Session; use App\jeephy08tt02;

class jeephy08tt02Controller extends Controller
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
        $jeephy08tt02 = jeephy08tt02::orderBy('id', 'desc')->paginate(250);
        return view('jeephy08tt02.index')->with('jeephy08tt02',$jeephy08tt02);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('jeephy08tt02.create');
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



       $jeephy08tt02 = new jeephy08tt02 ([
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


    $jeephy08tt02->save();

   // $post->tags()->sync($request->tags, false);

    Session::flash('success', 'The question was successfully saved!');

    return redirect()->route('jeephy08tt02.show', $jeephy08tt02->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jeephy08tt02 = jeephy08tt02::find($id);
        return view('jeephy08tt02.show')->with('jeephy08tt02',$jeephy08tt02);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jeephy08tt02 = jeephy08tt02::find($id);







        // set flash data with success message
        return view('jeephy08tt02.edit')->with('jeephy08tt02',$jeephy08tt02);

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
        $jeephy08tt02 = jeephy08tt02::find($id);



      // Save the data to the database


        $jeephy08tt02->solution = $request->input('solution');

        $jeephy08tt02->question_data = $request->input('question_data');
        $jeephy08tt02->option1 = $request->input('option1');
        $jeephy08tt02->option2 = $request->input('option2');
        $jeephy08tt02->option3 = $request->input('option3');
        $jeephy08tt02->option4 = $request->input('option4');
        $jeephy08tt02->correct_ans = $request->input('correct_ans');
        $jeephy08tt02->difficulty = $request->input('difficulty');
        $jeephy08tt02->ideal_time = $request->input('ideal_time');
        $jeephy08tt02->question_type = $request->input('question_type');





        $jeephy08tt02->save();




        // set flash data with success message
        Session::flash('success', 'This question was successfully updated.');

        // redirect with flash data to posts.show
        return redirect()->route('jeephy08tt02.show', $jeephy08tt02->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $jeephy08tt02 = jeephy08tt02::find($id);


        $jeephy08tt02->delete();

        Session::flash('success', 'The post was successfully deleted.');
        return redirect()->route('jeephy08tt02.index');
    }
}
