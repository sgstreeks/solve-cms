<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; use App\Http\Controllers\Controller; use Validator, Input, Redirect; use Session; use App\neet18demo01;

class neet18demo01Controller extends Controller
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
        $neet18demo01 = neet18demo01::orderBy('id', 'desc')->paginate(250);
        return view('neet18demo01.index')->with('neet18demo01',$neet18demo01);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('neet18demo01.create');
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



       $neet18demo01 = new neet18demo01 ([
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


    $neet18demo01->save();

   // $post->tags()->sync($request->tags, false);

    Session::flash('success', 'The question was successfully saved!');

    return redirect()->route('neet18demo01.show', $neet18demo01->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $neet18demo01 = neet18demo01::find($id);
        return view('neet18demo01.show')->with('neet18demo01',$neet18demo01);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $neet18demo01 = neet18demo01::find($id);







        // set flash data with success message
        return view('neet18demo01.edit')->with('neet18demo01',$neet18demo01);

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
        $neet18demo01 = neet18demo01::find($id);



      // Save the data to the database

        
        $neet18demo01->solution = $request->input('solution');
$neet18demo01->subject = $request->input('subject');
        $neet18demo01->question_data = $request->input('question_data');
        $neet18demo01->option1 = $request->input('option1');
        $neet18demo01->option2 = $request->input('option2');
        $neet18demo01->option3 = $request->input('option3');
        $neet18demo01->option4 = $request->input('option4');
        $neet18demo01->correct_ans = $request->input('correct_ans');
        $neet18demo01->difficulty = $request->input('difficulty');
        $neet18demo01->ideal_time = $request->input('ideal_time');
        $neet18demo01->question_type = $request->input('question_type');





        $neet18demo01->save();




        // set flash data with success message
        Session::flash('success', 'This question was successfully updated.');

        // redirect with flash data to posts.show
        return redirect()->route('neet18demo01.show', $neet18demo01->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $neet18demo01 = neet18demo01::find($id);


        $neet18demo01->delete();

        Session::flash('success', 'The post was successfully deleted.');
        return redirect()->route('neet18demo01.index');
    }
}
