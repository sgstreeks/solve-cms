<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; use App\Http\Controllers\Controller; use Validator, Input, Redirect; use Session; use App\jip18ft06;

class jip18ft06Controller extends Controller
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
        $jip18ft06 = jip18ft06::orderBy('id', 'desc')->paginate(250);
        return view('jip18ft06.index')->with('jip18ft06',$jip18ft06);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('jip18ft06.create');
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
             'solution'=>'required',
            'subject'=>'required'
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
       $subject = $request->input('subject');



       $jip18ft06 = new jip18ft06 ([
        'question_data'=>$question_data,
        'option1'=>$option1,
        'option2'=>$option2,
        'option3'=>$option3,
        'option4'=>$option4,
        'correct_ans'=>$correct_ans,
        'difficulty'=>$difficulty,
        'ideal_time'=>$ideal_time,
          'question_type'=>$question_type,
        'solution'=>$solution,
        'subject'=>$subject

       ]);


    $jip18ft06->save();

   // $post->tags()->sync($request->tags, false);

    Session::flash('success', 'The question was successfully saved!');

    return redirect()->route('jip18ft06.show', $jip18ft06->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jip18ft06 = jip18ft06::find($id);
        return view('jip18ft06.show')->with('jip18ft06',$jip18ft06);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jip18ft06 = jip18ft06::find($id);







        // set flash data with success message
        return view('jip18ft06.edit')->with('jip18ft06',$jip18ft06);

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
        $jip18ft06 = jip18ft06::find($id);



      // Save the data to the database

        
        $jip18ft06->solution = $request->input('solution');
$jip18ft06->subject = $request->input('subject');
        $jip18ft06->question_data = $request->input('question_data');
        $jip18ft06->option1 = $request->input('option1');
        $jip18ft06->option2 = $request->input('option2');
        $jip18ft06->option3 = $request->input('option3');
        $jip18ft06->option4 = $request->input('option4');
        $jip18ft06->correct_ans = $request->input('correct_ans');
        $jip18ft06->difficulty = $request->input('difficulty');
        $jip18ft06->ideal_time = $request->input('ideal_time');
        $jip18ft06->question_type = $request->input('question_type');





        $jip18ft06->save();




        // set flash data with success message
        Session::flash('success', 'This question was successfully updated.');

        // redirect with flash data to posts.show
        return redirect()->route('jip18ft06.show', $jip18ft06->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $jip18ft06 = jip18ft06::find($id);


        $jip18ft06->delete();

        Session::flash('success', 'The post was successfully deleted.');
        return redirect()->route('jip18ft06.index');
    }
}
