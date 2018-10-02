@extends('main')

@section('title', '| View question')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h2 >{{ 'QUESTION ID : ' .$jeemat07t02->id }}</h2>
<hr>
            <p >{!! '<italics>QUESTION : </italics>' .$jeemat07t02->question_data !!}</p>

<hr>
            <p >{!! '<italics>OPTION1 : </italics>' .$jeemat07t02->option1 !!}</p>
            <hr>
            <p >{!! '<italics>OPTION2 : </italics>' .$jeemat07t02->option2 !!}</p>
            <hr>
            <p >{!! '<italics>OPTION3 : </italics>' .$jeemat07t02->option3 !!}</p>
            <hr>
            <p >{!! '<italics>OPTION4 : </italics>' .$jeemat07t02->option4 !!}</p>
            <hr>
            <p >{!! '<italics>CORRECT ANSWER : </italics>' .$jeemat07t02->correct_ans !!}</p>
            <hr>
            <p >{!! '<italics>DIFFICULTY : </italics>' .$jeemat07t02->difficulty !!}</p>
            <hr>
            <p >{!! '<italics>IDEAL TIME : </italics>' .$jeemat07t02->ideal_time !!}</p>
            <hr>
            <p >{!! '<italics>QUESTION TYPE : </italics>' .$jeemat07t02->question_type !!}</p>

			<hr>



		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<label>Url:</label>
					<p><a href="{{ route('jeemat07t02.show', $jeemat07t02->id) }}">{{ route('jeemat07t02.show', $jeemat07t02->id) }}</a></p>
				</dl>


				<dl class="dl-horizontal">
					<label>Created At:</label>
					<p>{{ date('M j, Y h:ia', strtotime($jeemat07t02->created_at)) }}</p>
				</dl>

				<dl class="dl-horizontal">
					<label>Last Updated:</label>
					<p>{{ date('M j, Y h:ia', strtotime($jeemat07t02->updated_at)) }}</p>
				</dl>
				<hr>
                <div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('jeemat07t02.edit', 'Edit', array($jeemat07t02->id), array('class' => 'btn btn-primary btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                            {!! Form::open(['route' => ['jeemat07t02.destroy', $jeemat07t02->id], 'method' => 'DELETE']) !!}

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
