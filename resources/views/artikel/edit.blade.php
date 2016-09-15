@extends('app')

@section('header')

<title>Laravel &raquo; Artikel &raquo; Add </title>
@endsection

@section('content')
  <div class="row">
  <form class="col s12" method="POST" action="{{url('artikel/update')}}">
  <div class="input-field col s12">
    <input id="judul" type="text" class="validate" name="judul" value="{{$artikel->judul}}">
    <label for="judul">Title</label>
  </div>
  <div class="input-field col s12">
    <textarea id="isi" type="text" class="materialize-textarea" name="isi">{{$artikel->isi}}</textarea>
  <label for="isi">Content</label>
</div>
<div class="right">
    <button type="submit" class="btn">Save</button>
  </div>
    <input type="hidden" name="_token" value="{{csrf_token()}}">

      <input type="hidden" name="id" value="{{$artikel->id}}">
  </form>
</div>
@endsection