@extends('app')

@section('header')
<title>Laravel &raquo; Artikel &raquo; Add</title>
@endsection

@section('content')

	<div class="row">
		<form class="col s12" method="POST"
			action="{{url('artikel/save')}}"
			enctype="multipart/form-data"><!--<- for image/file-->
			<div class="input-field col s12">
				<input id="judul" type="text"
					class="validate" name="judul">
				<label for="judul">Title</label>
			</div>
			<div class="input-field col s12">
				<textarea id="isi" type="text" 
				class="materialize-textarea" 
				name="isi"></textarea>
				<label for="isi">Content</label>
			</div>
			  <!--for image-->
    <div class="file-field input-field col s12">
      <div class="btn">
        <span>Image</span>
        <input name="sampul" type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
<!--/for image-->

			<div class="right">
				<button type="submit"
					class="btn">Save</button>
			</div>
			<input type="hidden" name="_token"
				value="{{csrf_token()}}">
			</form>

@endsection