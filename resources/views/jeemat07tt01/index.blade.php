@extends('main')

@section('title', '| All Posts')

@section('content')

	<div class="row">
		<div class="col-md-10">
			<h1>All Posts</h1>
		</div>

		<div class="col-md-2">
			<a href="{{ route('jeemat07tt01.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">New Question</a>
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

					@foreach ($jeemat07tt01 as $jeemat07tt01)

						<tr>
                            <th>{{ $jeemat07tt01->id }}</th>
                            <th>{{ $jeemat07tt01->question_type }}</th>
                            <td>{{ date('M j, Y', strtotime($jeemat07tt01->created_at)) }}</td>
                            <td>{{ date('M j, Y', strtotime($jeemat07tt01->updated_at)) }}</td>
							<td><a href="{{ route('jeemat07tt01.show', $jeemat07tt01->id) }}" class="btn btn-default btn-sm">View</a> | <a href="{{ route('jeemat07tt01.edit', $jeemat07tt01->id) }}" class="btn btn-default btn-sm">Edit</a></td>
						</tr>

					@endforeach

				</tbody>
			</table>


		</div>
	</div>

@stop