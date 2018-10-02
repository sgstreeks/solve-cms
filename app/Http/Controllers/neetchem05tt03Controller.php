<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; use App\Http\Controllers\Controller; use Validator, Input, Redirect; use Session; use App\neetchem05tt03;

class neetchem05tt03Controller extends Controller
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
        $neetchem05tt03 = neetchem05tt03::orderBy('id', 'desc')->paginate(250);
        return view('neetchem05tt03.index')->with('neetchem05tt03',$neetchem05tt03);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('neetchem05tt03.create');
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



       $neetchem05tt03 = new neetchem05tt03 ([
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


    $neetchem05tt03->save();

   // $post->tags()->sync($request->tags, false);

    Session::flash('success', 'The question was successfully saved!');

    return redirect()->route('neetchem05tt03.show', $neetchem05tt03->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $neetchem05tt03 = neetchem05tt03::find($id);
        return view('neetchem05tt03.show')->with('neetchem05tt03',$neetchem05tt03);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $neetchem05tt03 = neetchem05tt03::find($id);







        // set flash data with success message
        return view('neetchem05tt03.edit')->with('neetchem05tt03',$neetchem05tt03);

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
        $neetchem05tt03 = neetchem05tt03::find($id);



      // Save the data to the database


        $neetchem05tt03->solution = $request->input('solution');

        $neetchem05tt03->question_data = $request->input('question_data');
        $neetchem05tt03->option1 = $request->input('option1');
        $neetchem05tt03->option2 = $request->input('option2');
        $neetchem05tt03->option3 = $request->input('option3');
        $neetchem05tt03->option4 = $request->input('option4');
        $neetchem05tt03->correct_ans = $request->input('correct_ans');
        $neetchem05tt03->difficulty = $request->input('difficulty');
        $neetchem05tt03->ideal_time = $request->input('ideal_time');
        $neetchem05tt03->question_type = $request->input('question_type');





        $neetchem05tt03->save();




        // set flash data with success message
        Session::flash('success', 'This question was successfully updated.');

        // redirect with flash data to posts.show
        return redirect()->route('neetchem05tt03.show', $neetchem05tt03->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $neetchem05tt03 = neetchem05tt03::find($id);


        $neetchem05tt03->delete();

        Session::flash('success', 'The post was successfully deleted.');
        return redirect()->route('neetchem05tt03.index');
    }
}
