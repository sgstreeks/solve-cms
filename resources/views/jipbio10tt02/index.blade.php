@extends('main')

@section('title', '| All Posts')

@section('content')

	<div class="row">
		<div class="col-md-10">
			<h1>All Posts</h1>
		</div>

		<div class="col-md-2">
			<a href="{{ route('jipbio10tt02.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">New Question</a>
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

					@foreach ($jipbio10tt02 as $jipbio10tt02)

						<tr>
                            <th>{{ $jipbio10tt02->id }}</th>
                            <th>{{ $jipbio10tt02->question_type }}</th>
                            <td>{{ date('M j, Y', strtotime($jipbio10tt02->created_at)) }}</td>
                            <td>{{ date('M j, Y', strtotime($jipbio10tt02->updated_at)) }}</td>
							<td><a href="{{ route('jipbio10tt02.show', $jipbio10tt02->id) }}" class="btn btn-default btn-sm">View</a> | <a href="{{ route('jipbio10tt02.edit', $jipbio10tt02->id) }}" class="btn btn-default btn-sm">Edit</a></td>
						</tr>

					@endforeach

				</tbody>
			</table>


		</div>
	</div>

@stop
