@extends('main')

@section('title', '| View question')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h2 >{{ 'QUESTION ID : ' .$jip18ft06->id }}</h2>
<hr>
            <p >{!! '<italics>QUESTION : </italics>' .$jip18ft06->question_data !!}</p>

<hr>
            <p >{!! '<italics>OPTION1 : </italics>' .$jip18ft06->option1 !!}</p>
            <hr>
            <p >{!! '<italics>OPTION2 : </italics>' .$jip18ft06->option2 !!}</p>
            <hr>
            <p >{!! '<italics>OPTION3 : </italics>' .$jip18ft06->option3 !!}</p>
            <hr>
            <p >{!! '<italics>OPTION4 : </italics>' .$jip18ft06->option4 !!}</p>
            <hr>
            <p >{!! '<italics>CORRECT ANSWER : </italics>' .$jip18ft06->correct_ans !!}</p>
            <hr>
            <p >{!! '<italics>DIFFICULTY : </italics>' .$jip18ft06->difficulty !!}</p>
            <hr>
            <p >{!! '<italics>IDEAL TIME : </italics>' .$jip18ft06->ideal_time !!}</p>
            <hr>
            <p >{!! '<italics>QUESTION TYPE : </italics>' .$jip18ft06->question_type !!}</p>
            <hr>
            <p >{!! '<italics>SUBJECT : </italics>' .$jip18ft06->subject !!}</p>
            <hr>
            <p >{!! '<italics>SOLUTION : </italics>' .$jip18ft06->solution !!}</p>

			<hr>



		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<label>Url:</label>
					<p><a href="{{ route('jip18ft06.show', $jip18ft06->id) }}">{{ route('jip18ft06.show', $jip18ft06->id) }}</a></p>
				</dl>


				<dl class="dl-horizontal">
					<label>Created At:</label>
					<p>{{ date('M j, Y h:ia', strtotime($jip18ft06->created_at)) }}</p>
				</dl>

				<dl class="dl-horizontal">
					<label>Last Updated:</label>
					<p>{{ date('M j, Y h:ia', strtotime($jip18ft06->updated_at)) }}</p>
				</dl>
				<hr>
                <div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('jip18ft06.edit', 'Edit', array($jip18ft06->id), array('class' => 'btn btn-primary btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                            {!! Form::open(['route' => ['jip18ft06.destroy', $jip18ft06->id], 'method' => 'DELETE']) !!}

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
