@extends('main')

@section('title', '| View question')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h2 >{{ 'QUESTION ID : ' .$jeechem28tt02->id }}</h2>
<hr>
            <p >{!! '<italics>QUESTION : </italics>' .$jeechem28tt02->question_data !!}</p>

<hr>
            <p >{!! '<italics>OPTION1 : </italics>' .$jeechem28tt02->option1 !!}</p>
            <hr>
            <p >{!! '<italics>OPTION2 : </italics>' .$jeechem28tt02->option2 !!}</p>
            <hr>
            <p >{!! '<italics>OPTION3 : </italics>' .$jeechem28tt02->option3 !!}</p>
            <hr>
            <p >{!! '<italics>OPTION4 : </italics>' .$jeechem28tt02->option4 !!}</p>
            <hr>
            <p >{!! '<italics>CORRECT ANSWER : </italics>' .$jeechem28tt02->correct_ans !!}</p>
            <hr>
            <p >{!! '<italics>DIFFICULTY : </italics>' .$jeechem28tt02->difficulty !!}</p>
            <hr>
            <p >{!! '<italics>IDEAL TIME : </italics>' .$jeechem28tt02->ideal_time !!}</p>
            <hr>
            <p >{!! '<italics>QUESTION TYPE : </italics>' .$jeechem28tt02->question_type !!}</p>

			<hr>



		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<label>Url:</label>
					<p><a href="{{ route('jeechem28tt02.show', $jeechem28tt02->id) }}">{{ route('jeechem28tt02.show', $jeechem28tt02->id) }}</a></p>
				</dl>


				<dl class="dl-horizontal">
					<label>Created At:</label>
					<p>{{ date('M j, Y h:ia', strtotime($jeechem28tt02->created_at)) }}</p>
				</dl>

				<dl class="dl-horizontal">
					<label>Last Updated:</label>
					<p>{{ date('M j, Y h:ia', strtotime($jeechem28tt02->updated_at)) }}</p>
				</dl>
				<hr>
                <div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('jeechem28tt02.edit', 'Edit', array($jeechem28tt02->id), array('class' => 'btn btn-primary btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                            {!! Form::open(['route' => ['jeechem28tt02.destroy', $jeechem28tt02->id], 'method' => 'DELETE']) !!}

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
