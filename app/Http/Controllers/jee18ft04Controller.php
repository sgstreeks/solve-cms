<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; use App\Http\Controllers\Controller; use Validator, Input, Redirect; use Session; use App\jee18ft04;

class jee18ft04Controller extends Controller
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
        $jee18ft04 = jee18ft04::orderBy('id', 'desc')->paginate(250);
        return view('jee18ft04.index')->with('jee18ft04',$jee18ft04);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('jee18ft04.create');
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



       $jee18ft04 = new jee18ft04 ([
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


    $jee18ft04->save();

   // $post->tags()->sync($request->tags, false);

    Session::flash('success', 'The question was successfully saved!');

    return redirect()->route('jee18ft04.show', $jee18ft04->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jee18ft04 = jee18ft04::find($id);
        return view('jee18ft04.show')->with('jee18ft04',$jee18ft04);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jee18ft04 = jee18ft04::find($id);







        // set flash data with success message
        return view('jee18ft04.edit')->with('jee18ft04',$jee18ft04);

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
        $jee18ft04 = jee18ft04::find($id);



      // Save the data to the database

        
        $jee18ft04->solution = $request->input('solution');
$jee18ft04->subject = $request->input('subject');
        $jee18ft04->question_data = $request->input('question_data');
        $jee18ft04->option1 = $request->input('option1');
        $jee18ft04->option2 = $request->input('option2');
        $jee18ft04->option3 = $request->input('option3');
        $jee18ft04->option4 = $request->input('option4');
        $jee18ft04->correct_ans = $request->input('correct_ans');
        $jee18ft04->difficulty = $request->input('difficulty');
        $jee18ft04->ideal_time = $request->input('ideal_time');
        $jee18ft04->question_type = $request->input('question_type');





        $jee18ft04->save();




        // set flash data with success message
        Session::flash('success', 'This question was successfully updated.');

        // redirect with flash data to posts.show
        return redirect()->route('jee18ft04.show', $jee18ft04->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $jee18ft04 = jee18ft04::find($id);


        $jee18ft04->delete();

        Session::flash('success', 'The post was successfully deleted.');
        return redirect()->route('jee18ft04.index');
    }
}
