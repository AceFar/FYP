@extends('layouts.app')

@section('content')


<div class="container panel">
  <h1 class="text-center">Edit your documents</h1>
  <div class= "container">
    <form action="{{ route('updatedoc',['id'=>$document->id])}}" method="post">
                        {{ method_field('PATCH') }}
                    {{ csrf_field() }} 
     <div class="form-group col-md-6 col-md-offset-1">
        <label for="exampleInputEmail1">Document name: </label>
        <input type="text" class="form-control" value="{{$document->name}}" >
      </div>
        <div class= "form-group col-md-6 col-md-offset-1">
        <label>Locations of documents placed: </label>
    <input type="text" class="form-control" name="location" value="{{$document->location}}"><br>
  </div>

      <div class="form-group col-md-6 col-md-offset-1">
        <label for="exampleInputPassword1">Reference code</label>
        <input type="text" class="form-control" value="{{$document->reference}}" >
      </div>
      <div class="form-group col-md-6 col-md-offset-1">
        <label for="exampleInputPassword1">Department</label>
        <select class="form-control">
        <option value="{{$document->department}}">{{$document->department}}</option>
          <option value="FSTM">FSTM </option>
          <option value="FPM">FPM</option>
          <option value="FSU">FSU</option>

        </select>

      </div>

         <div class="form-group col-md-6 col-md-offset-1">
        <label for="exampleInputPassword1">Category</label>
        <select class="form-control">
          <option value="{{$document->category}}">{{$document->category}}</option>
          <option value="Memo">Memo </option>
          <option value="Minute Meeting">Minute Meeting</option>
          <option value="Proposal">Proposal</option>


        </select>

      </div>
      <div class="form-group col-md-6 col-md-offset-1">
        <label for="exampleInputPassword1">Remark</label>
        <textarea type="textarea" class="form-control">{{$document->remark}}</textarea> 
      </div>
      <div class="form-group col-md-6 col-md-offset-1">
        <label for="exampleInputPassword1">Date of Documents Created: </label>
        <input type="date" class="form-control" value="{{$document->start}}" >
      </div>
      <div class="form-group col-md-6 col-md-offset-1">
        <label for="exampleInputPassword1">Upload Documents Date: </label>
        <input type="date" class="form-control" value="{{$document->end}}">
      </div>

   

      <div class="form-group col-md-6 col-md-offset-1">
        <label for="exampleInputFile">File input</label>
        <input type="file" id="exampleInputFile">

      </div>

      <div  class="form-group col-md-6 col-md-offset-1">
        <button type="submit"  class="btn btn-success">Submit</button>
          <button type="reset"  class="btn btn-danger">Cancel</button>
      </div>
    </form>
  </div>
</div>


@endsection