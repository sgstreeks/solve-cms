@extends('main')

@section('title', '| All Posts')

@section('content')

	<div class="row">
		<div class="col-md-10">
			<h1>All Posts</h1>
		</div>

		<div class="col-md-2">
			<a href="{{ route('jiplartt05.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">New Question</a>
		</div>
		<div class="col-md-12">
			<hr>
		</div>
	</div> <!-- end of .row -->

	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>Question id</th>
					<th>Question type</th>
					<th>created at</th>
					<th>updated at</th>

				</thead>

				<tbody>

					@foreach ($jiplartt05 as $jiplartt05)

						<tr>
                            <th>{{ $jiplartt05->id }}</th>
                            <th>{{ $jiplartt05->question_type }}</th>
                            <td>{{ date('M j, Y', strtotime($jiplartt05->created_at)) }}</td>
                            <td>{{ date('M j, Y', strtotime($jiplartt05->updated_at)) }}</td>
							<td><a href="{{ route('jiplartt05.show', $jiplartt05->id) }}" class="btn btn-default btn-sm">View</a> | <a href="{{ route('jiplartt05.edit', $jiplartt05->id) }}" class="btn btn-default btn-sm">Edit</a></td>
						</tr>

					@endforeach

				</tbody>
			</table>


		</div>
	</div>

@stop
