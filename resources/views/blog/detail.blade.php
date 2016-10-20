@extends('app')
@section('header')

	<title>Laravel &raquo; {{$artikel->judul}}</title>
@endsection

@section('content')

	<div class="row">
		<h3>{{$artikel->judul}}</h3>
		<img src="{{url('images/'.$artikel->sampul)}}"
		style="max-width:500px;">
		<p>{{$artikel->isi}}</p>
		<hr>
		<span>Posted by {{\App\User::find($artikel->id_user)['name']}} at {{$artikel->created_at->format('D, F jS Y \a\t h:i a')}}</span>
	</div>

	<h5>Comment</h5>
	<hr>
	<br>
	@foreach($komentar as $key)
	<br>
	<div class="col s12 m6">
		<div class="card"">
			<div class="card-content">
			<div class="right">
			<td>
			<a href="{{url('hapuskomentar/'.$key->id)}}">
			Delete
			</a>
			</td>
			</div>
				<p style="word-wrap:break-word">{{$key->isi}}<p>	
				<br>
				<div class="right">
					Commented by {{\App\User::find($key->id_user)['name']}} at {{$key->created_at->format('D M, d Y \a\t h:i A')}} </div>
				</div>
				<br>
		</div>
	</div>
	@endforeach


	<h5>Write Comment</h5>
		<form class="col s12" method="POST" action="{{url('komentar')}}">
		<div class="input-field col s12">
		<textarea id="isi" type="text"
		class="materialize-textarea"
		name="isi"></textarea>
			<div class="center"> 
					<button type="submit"
				class="btn">Comment</button>
				</div>
				<input type="hidden" name="_token"
					value="{{csrf_token()}}">
				<input type="hidden" name="id_artikel"
				    value={{$artikel->id}}>
		</form>
		<br>
		<br>
@endsection