<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; use App\Http\Controllers\Controller; use Validator, Input, Redirect; use Session; use App\neetchem13tt02;

class neetchem13tt02Controller extends Controller
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
        $neetchem13tt02 = neetchem13tt02::orderBy('id', 'desc')->paginate(250);
        return view('neetchem13tt02.index')->with('neetchem13tt02',$neetchem13tt02);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('neetchem13tt02.create');
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



       $neetchem13tt02 = new neetchem13tt02 ([
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


    $neetchem13tt02->save();

   // $post->tags()->sync($request->tags, false);

    Session::flash('success', 'The question was successfully saved!');

    return redirect()->route('neetchem13tt02.show', $neetchem13tt02->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $neetchem13tt02 = neetchem13tt02::find($id);
        return view('neetchem13tt02.show')->with('neetchem13tt02',$neetchem13tt02);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $neetchem13tt02 = neetchem13tt02::find($id);







        // set flash data with success message
        return view('neetchem13tt02.edit')->with('neetchem13tt02',$neetchem13tt02);

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
        $neetchem13tt02 = neetchem13tt02::find($id);



      // Save the data to the database


       $neetchem13tt02->solution = $request->input('solution');

        $neetchem13tt02->question_data = $request->input('question_data');
        $neetchem13tt02->option1 = $request->input('option1');
        $neetchem13tt02->option2 = $request->input('option2');
        $neetchem13tt02->option3 = $request->input('option3');
        $neetchem13tt02->option4 = $request->input('option4');
        $neetchem13tt02->correct_ans = $request->input('correct_ans');
        $neetchem13tt02->difficulty = $request->input('difficulty');
        $neetchem13tt02->ideal_time = $request->input('ideal_time');
        $neetchem13tt02->question_type = $request->input('question_type');





        $neetchem13tt02->save();




        // set flash data with success message
        Session::flash('success', 'This question was successfully updated.');

        // redirect with flash data to posts.show
        return redirect()->route('neetchem13tt02.show', $neetchem13tt02->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $neetchem13tt02 = neetchem13tt02::find($id);


        $neetchem13tt02->delete();

        Session::flash('success', 'The post was successfully deleted.');
        return redirect()->route('neetchem13tt02.index');
    }
}
