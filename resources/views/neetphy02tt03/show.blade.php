@extends('main')

@section('title', '| View question')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h2 >{{ 'QUESTION ID : ' .$neetphy02tt03->id }}</h2>
<hr>
            <p >{!! '<italics>QUESTION : </italics>' .$neetphy02tt03->question_data !!}</p>

<hr>
            <p >{!! '<italics>OPTION1 : </italics>' .$neetphy02tt03->option1 !!}</p>
            <hr>
            <p >{!! '<italics>OPTION2 : </italics>' .$neetphy02tt03->option2 !!}</p>
            <hr>
            <p >{!! '<italics>OPTION3 : </italics>' .$neetphy02tt03->option3 !!}</p>
            <hr>
            <p >{!! '<italics>OPTION4 : </italics>' .$neetphy02tt03->option4 !!}</p>
            <hr>
            <p >{!! '<italics>CORRECT ANSWER : </italics>' .$neetphy02tt03->correct_ans !!}</p>
            <hr>
            <p >{!! '<italics>DIFFICULTY : </italics>' .$neetphy02tt03->difficulty !!}</p>
            <hr>
            <p >{!! '<italics>IDEAL TIME : </italics>' .$neetphy02tt03->ideal_time !!}</p>
            <hr>
            <p >{!! '<italics>QUESTION TYPE : </italics>' .$neetphy02tt03->question_type !!}</p>

			<hr>



		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<label>Url:</label>
					<p><a href="{{ route('neetphy02tt03.show', $neetphy02tt03->id) }}">{{ route('neetphy02tt03.show', $neetphy02tt03->id) }}</a></p>
				</dl>


				<dl class="dl-horizontal">
					<label>Created At:</label>
					<p>{{ date('M j, Y h:ia', strtotime($neetphy02tt03->created_at)) }}</p>
				</dl>

				<dl class="dl-horizontal">
					<label>Last Updated:</label>
					<p>{{ date('M j, Y h:ia', strtotime($neetphy02tt03->updated_at)) }}</p>
				</dl>
				<hr>
                <div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('neetphy02tt03.edit', 'Edit', array($neetphy02tt03->id), array('class' => 'btn btn-primary btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                            {!! Form::open(['route' => ['neetphy02tt03.destroy', $neetphy02tt03->id], 'method' => 'DELETE']) !!}

                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

                            {!! Form::close() !!}

                        </div>
<hr>
					<div class="col-sm-12">

                            {!! Html::linkRoute('posts.create', 'Create New Question', array(null), array('class' => 'btn btn-primary btn-block')) !!}
                    </div>


                        </div>

					</div>
				</div>

			</div>
		</div>
	</div>

@endsection