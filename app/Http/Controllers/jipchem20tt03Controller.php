<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; use App\Http\Controllers\Controller; use Validator, Input, Redirect; use Session; use App\jipchem20tt03;

class jipchem20tt03Controller extends Controller
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
        $jipchem20tt03 = jipchem20tt03::orderBy('id', 'desc')->paginate(250);
        return view('jipchem20tt03.index')->with('jipchem20tt03',$jipchem20tt03);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('jipchem20tt03.create');
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



       $jipchem20tt03 = new jipchem20tt03 ([
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


    $jipchem20tt03->save();

   // $post->tags()->sync($request->tags, false);

    Session::flash('success', 'The question was successfully saved!');

    return redirect()->route('jipchem20tt03.show', $jipchem20tt03->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jipchem20tt03 = jipchem20tt03::find($id);
        return view('jipchem20tt03.show')->with('jipchem20tt03',$jipchem20tt03);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jipchem20tt03 = jipchem20tt03::find($id);







        // set flash data with success message
        return view('jipchem20tt03.edit')->with('jipchem20tt03',$jipchem20tt03);

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
        $jipchem20tt03 = jipchem20tt03::find($id);



      // Save the data to the database


         $jipchem20tt03->solution = $request->input('solution');

        $jipchem20tt03->question_data = $request->input('question_data');
        $jipchem20tt03->option1 = $request->input('option1');
        $jipchem20tt03->option2 = $request->input('option2');
        $jipchem20tt03->option3 = $request->input('option3');
        $jipchem20tt03->option4 = $request->input('option4');
        $jipchem20tt03->correct_ans = $request->input('correct_ans');
        $jipchem20tt03->difficulty = $request->input('difficulty');
        $jipchem20tt03->ideal_time = $request->input('ideal_time');
        $jipchem20tt03->question_type = $request->input('question_type');





        $jipchem20tt03->save();




        // set flash data with success message
        Session::flash('success', 'This question was successfully updated.');

        // redirect with flash data to posts.show
        return redirect()->route('jipchem20tt03.show', $jipchem20tt03->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $jipchem20tt03 = jipchem20tt03::find($id);


        $jipchem20tt03->delete();

        Session::flash('success', 'The post was successfully deleted.');
        return redirect()->route('jipchem20tt03.index');
    }
}
