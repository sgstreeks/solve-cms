@extends('main')

@section('title', '| Edit question')

@section('stylesheets')

    {!! Html::style('css/select2.min.css') !!}
    <script src="{{ URL::to('src/js/vendor/tinymce/js/tinymce/tinymce.min.js') }}"></script>

    <script>
        var editor_config = {
            height : "120",
          path_absolute : "/",
          selector: "textarea",
          plugins: [
            "image charmap print preview hr",
            "lists advlist",
            "fullscreen"


          ],
          toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
          relative_urls: false,
          file_browser_callback : function(field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
            if (type == 'image') {
              cmsURL = cmsURL + "&type=Images";
            } else {
              cmsURL = cmsURL + "&type=Files";
            }

            tinyMCE.activeEditor.windowManager.open({
              file : cmsURL,
              title : 'Filemanager',
              width : x * 0.8,
              height : y * 0.8,
              resizable : "yes",
              close_previous : "no"
            });
          }
        };

        tinymce.init(editor_config);

      </script>


@endsection

@section('content')

	<div class="row">
		{!! Form::model($jeephy17tt01, ['route' => ['jeephy17tt01.update', $jeephy17tt01->id], 'method' => 'PATCH']) !!}
		<div class="col-md-8">
            {{ Form::label('question_data', "question_data:") }}
			{{ Form::textarea('question_data', null, array('class' => 'form-control')) }}

				{{ Form::label('option1', 'option1:') }}
				{{ Form::textarea('option1', null, array('class' => 'form-control')) }}

				{{ Form::label('option2', 'option2:') }}
				{{ Form::textarea('option2', null, array('class' => 'form-control')) }}

				{{ Form::label('option3', 'option3:') }}
				{{ Form::textarea('option3', null, array('class' => 'form-control')) }}

				{{ Form::label('option4', 'option4:') }}
                {{ Form::textarea('option4', null, array('class' => 'form-control')) }}



				{{ Form::label('correct_ans', 'correct_ans:') }}
				{{ Form::select('correct_ans' , ['option_1' => 'option 1', 'option_2' => 'option 2', 'option_3' => 'option 3', 'option_4' => 'option 4'],null,['class' => 'form-control']) }}

				{{ Form::label('difficulty', 'difficulty:') }}
				{{ Form::select('difficulty',['easy'=>'EASY','medium'=>'MEDIUM','hard'=>'HARD'] ,null, ['class' => 'form-control'] ) }}

				{{ Form::label('ideal_time', 'ideal_time:') }}
				{{ Form::text('ideal_time', null, array('class' => 'form-control') ) }}

				{{ Form::label('question_type', 'question_type:') }}
				{{ Form::select('question_type',['descriptive'=>'DESCRIPTIVE','numerical'=>'NUMERICAL','equation'=>'EQUATION','derivative'=>'DERIVATIVE','logical'=>'LOGICAL'] ,null,['class' => 'form-control']) }}

				{{ Form::label('solution', 'solution:') }}
                {{ Form::textarea('solution', null, array('class' => 'form-control')) }}





		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Created At:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($jeephy17tt01->created_at)) }}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($jeephy17tt01->updated_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('jeephy17tt01.show', 'Cancel', array($jeephy17tt01->id), array('class' => 'btn btn-danger btn-block')) !!}
					</div>
					<div class="col-sm-6">
						{{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
					</div>
				</div>

			</div>
		</div>
		{!! Form::close() !!}
	</div>	<!-- end of .row (form) -->

@stop

@section('scripts')

	{!! Html::script('js/select2.min.js') !!}

	<script type="text/javascript">

		$('.select2-multi').select2();


	</script>

@endsection
