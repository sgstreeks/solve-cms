@extends('main')

@section('title', '| All Posts')

@section('content')

	<div class="row">
		<div class="col-md-10">
			<h1>All Posts</h1>
		</div>

		<div class="col-md-2">
			<a href="{{ route('jeemat01t03.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">New Question</a>
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

					@foreach ($jeemat01t03 as $jeemat01t03)

						<tr>
                            <th>{{ $jeemat01t03->id }}</th>
                            <th>{{ $jeemat01t03->question_type }}</th>
                            <td>{{ date('M j, Y', strtotime($jeemat01t03->created_at)) }}</td>
                            <td>{{ date('M j, Y', strtotime($jeemat01t03->updated_at)) }}</td>
							<td><a href="{{ route('jeemat01t03.show', $jeemat01t03->id) }}" class="btn btn-default btn-sm">View</a> | <a href="{{ route('jeemat01t03.edit', $jeemat01t03->id) }}" class="btn btn-default btn-sm">Edit</a></td>
						</tr>

					@endforeach

				</tbody>
			</table>


		</div>
	</div>

@stop
