@extends('main')

@section('title', '| View question')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h2 >{{ 'QUESTION ID : ' .$jiplartt04->id }}</h2>
<hr>
            <p >{!! '<italics>QUESTION : </italics>' .$jiplartt04->question_data !!}</p>

<hr>
            <p >{!! '<italics>OPTION1 : </italics>' .$jiplartt04->option1 !!}</p>
            <hr>
            <p >{!! '<italics>OPTION2 : </italics>' .$jiplartt04->option2 !!}</p>
            <hr>
            <p >{!! '<italics>OPTION3 : </italics>' .$jiplartt04->option3 !!}</p>
            <hr>
            <p >{!! '<italics>OPTION4 : </italics>' .$jiplartt04->option4 !!}</p>
            <hr>
            <p >{!! '<italics>CORRECT ANSWER : </italics>' .$jiplartt04->correct_ans !!}</p>
            <hr>
            <p >{!! '<italics>DIFFICULTY : </italics>' .$jiplartt04->difficulty !!}</p>
            <hr>
            <p >{!! '<italics>IDEAL TIME : </italics>' .$jiplartt04->ideal_time !!}</p>
            <hr>
            <p >{!! '<italics>QUESTION TYPE : </italics>' .$jiplartt04->question_type !!}</p>

			<hr>



		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<label>Url:</label>
					<p><a href="{{ route('jiplartt04.show', $jiplartt04->id) }}">{{ route('jiplartt04.show', $jiplartt04->id) }}</a></p>
				</dl>


				<dl class="dl-horizontal">
					<label>Created At:</label>
					<p>{{ date('M j, Y h:ia', strtotime($jiplartt04->created_at)) }}</p>
				</dl>

				<dl class="dl-horizontal">
					<label>Last Updated:</label>
					<p>{{ date('M j, Y h:ia', strtotime($jiplartt04->updated_at)) }}</p>
				</dl>
				<hr>
                <div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('jiplartt04.edit', 'Edit', array($jiplartt04->id), array('class' => 'btn btn-primary btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                            {!! Form::open(['route' => ['jiplartt04.destroy', $jiplartt04->id], 'method' => 'DELETE']) !!}

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
