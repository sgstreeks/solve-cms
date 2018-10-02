@extends('main')

@section('title', '| All Posts')

@section('content')

	<div class="row">
		<div class="col-md-10">
			<h1>All Posts</h1>
		</div>

		<div class="col-md-2">
			<a href="{{ route('neetphy15tt02.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">New Question</a>
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

					@foreach ($neetphy15tt02 as $neetphy15tt02)

						<tr>
                            <th>{{ $neetphy15tt02->id }}</th>
                            <th>{{ $neetphy15tt02->question_type }}</th>
                            <td>{{ date('M j, Y', strtotime($neetphy15tt02->created_at)) }}</td>
                            <td>{{ date('M j, Y', strtotime($neetphy15tt02->updated_at)) }}</td>
							<td><a href="{{ route('neetphy15tt02.show', $neetphy15tt02->id) }}" class="btn btn-default btn-sm">View</a> | <a href="{{ route('neetphy15tt02.edit', $neetphy15tt02->id) }}" class="btn btn-default btn-sm">Edit</a></td>
						</tr>

					@endforeach

				</tbody>
			</table>


		</div>
	</div>

@stop
