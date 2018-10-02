@extends('main')

@section('title', '| View question')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h2 >{{ 'QUESTION ID : ' .$jiplartt05->id }}</h2>
<hr>
            <p >{!! '<italics>QUESTION : </italics>' .$jiplartt05->question_data !!}</p>

<hr>
            <p >{!! '<italics>OPTION1 : </italics>' .$jiplartt05->option1 !!}</p>
            <hr>
            <p >{!! '<italics>OPTION2 : </italics>' .$jiplartt05->option2 !!}</p>
            <hr>
            <p >{!! '<italics>OPTION3 : </italics>' .$jiplartt05->option3 !!}</p>
            <hr>
            <p >{!! '<italics>OPTION4 : </italics>' .$jiplartt05->option4 !!}</p>
            <hr>
            <p >{!! '<italics>CORRECT ANSWER : </italics>' .$jiplartt05->correct_ans !!}</p>
            <hr>
            <p >{!! '<italics>DIFFICULTY : </italics>' .$jiplartt05->difficulty !!}</p>
            <hr>
            <p >{!! '<italics>IDEAL TIME : </italics>' .$jiplartt05->ideal_time !!}</p>
            <hr>
            <p >{!! '<italics>QUESTION TYPE : </italics>' .$jiplartt05->question_type !!}</p>

			<hr>



		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<label>Url:</label>
					<p><a href="{{ route('jiplartt05.show', $jiplartt05->id) }}">{{ route('jiplartt05.show', $jiplartt05->id) }}</a></p>
				</dl>


				<dl class="dl-horizontal">
					<label>Created At:</label>
					<p>{{ date('M j, Y h:ia', strtotime($jiplartt05->created_at)) }}</p>
				</dl>

				<dl class="dl-horizontal">
					<label>Last Updated:</label>
					<p>{{ date('M j, Y h:ia', strtotime($jiplartt05->updated_at)) }}</p>
				</dl>
				<hr>
                <div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('jiplartt05.edit', 'Edit', array($jiplartt05->id), array('class' => 'btn btn-primary btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                            {!! Form::open(['route' => ['jiplartt05.destroy', $jiplartt05->id], 'method' => 'DELETE']) !!}

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
