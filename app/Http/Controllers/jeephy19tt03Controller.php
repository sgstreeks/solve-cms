<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; use App\Http\Controllers\Controller; use Validator, Input, Redirect; use Session; use App\jeephy19tt03;

class jeephy19tt03Controller extends Controller
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
        $jeephy19tt03 = jeephy19tt03::orderBy('id', 'desc')->paginate(250);
        return view('jeephy19tt03.index')->with('jeephy19tt03',$jeephy19tt03);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('jeephy19tt03.create');
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



       $jeephy19tt03 = new jeephy19tt03 ([
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


    $jeephy19tt03->save();

   // $post->tags()->sync($request->tags, false);

    Session::flash('success', 'The question was successfully saved!');

    return redirect()->route('jeephy19tt03.show', $jeephy19tt03->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jeephy19tt03 = jeephy19tt03::find($id);
        return view('jeephy19tt03.show')->with('jeephy19tt03',$jeephy19tt03);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jeephy19tt03 = jeephy19tt03::find($id);







        // set flash data with success message
        return view('jeephy19tt03.edit')->with('jeephy19tt03',$jeephy19tt03);

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
        $jeephy19tt03 = jeephy19tt03::find($id);



      // Save the data to the database


         $jeephy19tt03->solution = $request->input('solution');

        $jeephy19tt03->question_data = $request->input('question_data');
        $jeephy19tt03->option1 = $request->input('option1');
        $jeephy19tt03->option2 = $request->input('option2');
        $jeephy19tt03->option3 = $request->input('option3');
        $jeephy19tt03->option4 = $request->input('option4');
        $jeephy19tt03->correct_ans = $request->input('correct_ans');
        $jeephy19tt03->difficulty = $request->input('difficulty');
        $jeephy19tt03->ideal_time = $request->input('ideal_time');
        $jeephy19tt03->question_type = $request->input('question_type');





        $jeephy19tt03->save();




        // set flash data with success message
        Session::flash('success', 'This question was successfully updated.');

        // redirect with flash data to posts.show
        return redirect()->route('jeephy19tt03.show', $jeephy19tt03->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $jeephy19tt03 = jeephy19tt03::find($id);


        $jeephy19tt03->delete();

        Session::flash('success', 'The post was successfully deleted.');
        return redirect()->route('jeephy19tt03.index');
    }
}
