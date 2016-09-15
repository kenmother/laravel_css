@extends('app')

@section('header')
	<title>Laravel &raquo; Artikel &raquo; All</title>
@endsection

@section('content')
	<br>
	<a class="waves-effect waves-light btn right"
		href="{{url('artikel/add')}}" >Add New</a>

	<table>
		<thead>
			<tr>
				<th>Title</th>
				<th>Content</th>
				<th>Author</th>
				<th>Created at</th>
			</tr>
		</thead>
		<tbody>
		@foreach($artikel as $key)
			<tr>
				<td>{{$key->judul}}</td>
				<td>{{$key->isi}}</td>
				<td>{{$key->id_user}}</td>
				<td>{{$key->created_at}}</td>
				<td><a href="{{url('artikel/edit/'.$key->id)}}">
					Edit
				</a></td>
				<td><a href="{{url('artikel/delete/'.$key->id)}}"
					onclick="return
					confirm('Are you sure to delete {{$key->judul}}')">
					Delete
				</a></td>
			</tr>
		@endforeach
		@if(sizeof($artikel)==0)
			<tr>
				<td colspan="6" class="center">
					<div>No data</div>
					<div><a href="{{url('artikel/add')}}"
						class="waves-efect waves-light btn">Add New</a>
					</div>
				</td>
			</tr>
		@endif
		</tbody>
	</table>
@endsection
			
			
