@extends('main')

@section('title', '| View question')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h2 >{{ 'QUESTION ID : ' .$jipbio03tt01->id }}</h2>
<hr>
            <p >{!! '<italics>QUESTION : </italics>' .$jipbio03tt01->question_data !!}</p>

<hr>
            <p >{!! '<italics>OPTION1 : </italics>' .$jipbio03tt01->option1 !!}</p>
            <hr>
            <p >{!! '<italics>OPTION2 : </italics>' .$jipbio03tt01->option2 !!}</p>
            <hr>
            <p >{!! '<italics>OPTION3 : </italics>' .$jipbio03tt01->option3 !!}</p>
            <hr>
            <p >{!! '<italics>OPTION4 : </italics>' .$jipbio03tt01->option4 !!}</p>
            <hr>
            <p >{!! '<italics>CORRECT ANSWER : </italics>' .$jipbio03tt01->correct_ans !!}</p>
            <hr>
            <p >{!! '<italics>DIFFICULTY : </italics>' .$jipbio03tt01->difficulty !!}</p>
            <hr>
            <p >{!! '<italics>IDEAL TIME : </italics>' .$jipbio03tt01->ideal_time !!}</p>
            <hr>
            <p >{!! '<italics>QUESTION TYPE : </italics>' .$jipbio03tt01->question_type !!}</p>

			<hr>



		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<label>Url:</label>
					<p><a href="{{ route('jipbio03tt01.show', $jipbio03tt01->id) }}">{{ route('jipbio03tt01.show', $jipbio03tt01->id) }}</a></p>
				</dl>


				<dl class="dl-horizontal">
					<label>Created At:</label>
					<p>{{ date('M j, Y h:ia', strtotime($jipbio03tt01->created_at)) }}</p>
				</dl>

				<dl class="dl-horizontal">
					<label>Last Updated:</label>
					<p>{{ date('M j, Y h:ia', strtotime($jipbio03tt01->updated_at)) }}</p>
				</dl>
				<hr>
                <div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('jipbio03tt01.edit', 'Edit', array($jipbio03tt01->id), array('class' => 'btn btn-primary btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                            {!! Form::open(['route' => ['jipbio03tt01.destroy', $jipbio03tt01->id], 'method' => 'DELETE']) !!}

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
