@extends('main')

@section('title', '| View question')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h2 >{{ 'QUESTION ID : ' .$jeephy13tt01->id }}</h2>
<hr>
            <p >{!! '<italics>QUESTION : </italics>' .$jeephy13tt01->question_data !!}</p>

<hr>
            <p >{!! '<italics>OPTION1 : </italics>' .$jeephy13tt01->option1 !!}</p>
            <hr>
            <p >{!! '<italics>OPTION2 : </italics>' .$jeephy13tt01->option2 !!}</p>
            <hr>
            <p >{!! '<italics>OPTION3 : </italics>' .$jeephy13tt01->option3 !!}</p>
            <hr>
            <p >{!! '<italics>OPTION4 : </italics>' .$jeephy13tt01->option4 !!}</p>
            <hr>
            <p >{!! '<italics>CORRECT ANSWER : </italics>' .$jeephy13tt01->correct_ans !!}</p>
            <hr>
            <p >{!! '<italics>DIFFICULTY : </italics>' .$jeephy13tt01->difficulty !!}</p>
            <hr>
            <p >{!! '<italics>IDEAL TIME : </italics>' .$jeephy13tt01->ideal_time !!}</p>
            <hr>
            <p >{!! '<italics>QUESTION TYPE : </italics>' .$jeephy13tt01->question_type !!}</p>

			<hr>



		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<label>Url:</label>
					<p><a href="{{ route('jeephy13tt01.show', $jeephy13tt01->id) }}">{{ route('jeephy13tt01.show', $jeephy13tt01->id) }}</a></p>
				</dl>


				<dl class="dl-horizontal">
					<label>Created At:</label>
					<p>{{ date('M j, Y h:ia', strtotime($jeephy13tt01->created_at)) }}</p>
				</dl>

				<dl class="dl-horizontal">
					<label>Last Updated:</label>
					<p>{{ date('M j, Y h:ia', strtotime($jeephy13tt01->updated_at)) }}</p>
				</dl>
				<hr>
                <div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('jeephy13tt01.edit', 'Edit', array($jeephy13tt01->id), array('class' => 'btn btn-primary btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                            {!! Form::open(['route' => ['jeephy13tt01.destroy', $jeephy13tt01->id], 'method' => 'DELETE']) !!}

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
