@extends('page.base')

@section('title')
    Appel a projet
@endsection

@section('contenu')

  
<h1>appel a projet</h1><h1>appel a projet</h1><h1>appel a projet</h1>
<form id="formPost1"  action="{{ route('post1') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <input type="text" name="myname" id="myname" placeholder="your name" />
  <input type="file" name="avatar[]" id="avatar" multiple />
  <button type="submit">ENV</button>
</form>
@endsection