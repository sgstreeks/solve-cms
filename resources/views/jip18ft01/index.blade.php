@extends('main')

@section('title', '| All Posts')

@section('content')

	<div class="row">
		<div class="col-md-10">
			<h1>All Posts</h1>
		</div>

		<div class="col-md-2">
			<a href="{{ route('jip18ft01.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">New Question</a>
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

					@foreach ($jip18ft01 as $jip18ft01)

						<tr>
                            <th>{{ $jip18ft01->id }}</th>
                            <th>{{ $jip18ft01->question_type }}</th>
                            <td>{{ date('M j, Y', strtotime($jip18ft01->created_at)) }}</td>
                            <td>{{ date('M j, Y', strtotime($jip18ft01->updated_at)) }}</td>
							<td><a href="{{ route('jip18ft01.show', $jip18ft01->id) }}" class="btn btn-default btn-sm">View</a> | <a href="{{ route('jip18ft01.edit', $jip18ft01->id) }}" class="btn btn-default btn-sm">Edit</a></td>
						</tr>

					@endforeach

				</tbody>
			</table>


		</div>
	</div>

@stop
