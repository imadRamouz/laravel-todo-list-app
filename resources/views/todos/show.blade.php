@extends('layouts.app')
@section('content')
	<a href="/" class="btn btn-default">Go Back</a>
	<h1>
		{{$todo->text}}
		<div class="row pull-right">
			<div class="col-md-6">
				<a href="/todo/{{$todo->id}}/edit" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a>
			</div>
			<div class="col-md-6">
				{!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST']) !!}
					{{Form::hidden('_method', 'DELETE')}}
					<button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
				{!! Form::close() !!}
			</div>
		</div>
	</h1>
	<div class="label label-danger">{{$todo->due}}</div>
	<hr>
	<p>
		{{$todo->body}}
	</p>
@endsection