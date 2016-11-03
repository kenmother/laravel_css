@extends('app')

@section('header')

<title>Laravel &raquo; Blog</title>

@endsection

@section('content')

<div class="row">
@foreach($artikel as $key)
	<div class="col s12 m12">
		<div class="card">
		<div class="card-image">
		<img src="{{url('images/'.$key->sampul)}}">
		<span class="card-title">{{$key->judul}}</span>
		</div>
			<div class="card-content">
				
				<p>
					{{$key->isi}}
				</p>
				</div>
				<div class="card-action">
				<div class="right">Posted by {{\App\User::find($key->id_user)['name']}} at {{$key->created_at}}</div>
					<a href="{{url($key->slug)}}">Read More</a>
					<a href="{{url($key->slug.'/pdf')}}">Download</a>
					</div>
				</div>
			</div>
					@endforeach

		</div>

				@endsection