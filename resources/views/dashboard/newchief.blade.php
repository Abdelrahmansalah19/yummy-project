@extends('front.layouts.master')

@section('css')

@endsection

@section('content')
<form action="{{url('/addchiefs')}} " method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div class="card text-center">

      <label  class="form-label">Name</label>
      <input type="text" name ="name" class="form-control"  placeholder="Name">
         <br>
      <label  class="form-label">Degree</label>
      <input type="text" name="degree" class="form-control"  placeholder="Degree" >
       <br>
      <label  class="form-label">Description</label>
      <input type="text" name="desc" class="form-control"  placeholder="Desc">
      <br>
      <label for="inputAddress2" class="form-label">Chosse file</label>
      <input type="file" name="img" class="form-control" placeholder="Chosse file">
      <br>
    <input type="submit" value="Add" class="btn btn-primary">
    </div>
@endsection

@section('script')

@endsection
