@extends('layouts.app')

@section('content')



{{-- <h1 class="text-center" style="color:white">Upload your documents</h1>
<br>

<div class= "">
  <div class=" container panel">

    <form action="/upload" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <label for="documentname">Document name:</label>
      <div class= "form-group">
       <input type="text" class="form-control" id="document" placeholder="Enter document name">
       <br>

     </div>

     

     <label for="reference"> Reference code number: </label>
     <div class= "form-group">                                      
      <input type="text" class="form-control" id="reference" placeholder="Enter reference code"><br>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Department</label>
      <select class="form-control">
        <option>FSTM </option>
        <option>FPM</option>
        <option>FSU</option>

      </select>
    </div>
    <div class="form-group">


     <label for="exampleInputPassword1">Category</label>
     <select class="form-control">
      <option>Memo </option>
      <option>Minute Meeting</option>
      <option>Proposal</option>

    </select>
  </div>

  <label for="remark">Remark:</label>
  <div class="form-group">
    <textarea type="text" name="remark"></textarea><br>
  </div>

  <div class="form-group">
    <label>Date Documents Created</label>
    <input type="date" class="form-control" name="start">
  </div>


  <div class= "form-group">
    <label> Date Document Uploaded </label>
    <input type="date" class="form-control" name="end">
  </div>

  <div class= "form-group">
    <label>Locations of documents placed:</label>
    <input type="text" class="form-control" name="location"><br>
  </div>

  <div class= "form-group">
    <label>Select Document to upload:</label>

    <input type="file" class="form-group" name="fileToUpload" id="fileToUpload"> 
    <br>
  </div>

  <input class="btn btn-success" type="submit" value="Upload file" name="submit">

</form>
</div>
</div>
</div> --}}



 
  <h1 class="text-center" style="color:white">Upload your documents</h1></div><br>
  <div class= "panel col-md-8 col-md-offset-2">
    <form action="/upload" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <div class="form-group col-md-6 col-md-offset-1">
        <label for="exampleInputEmail1">Document name: </label>
        <input type="text" class="form-control"  name="name">
      </div>
        <div class= "form-group col-md-6 col-md-offset-1">
        <label>Locations of documents placed: </label>
    <input type="text" class="form-control" name="location"><br>
  </div>

      <div class="form-group col-md-6 col-md-offset-1">
        <label for="exampleInputPassword1">Reference code</label>
        <input type="text" class="form-control" name="reference" >
      </div>
      <div class="form-group col-md-6 col-md-offset-1">
        <label for="exampleInputPassword1">Department</label>
        <select class="form-control" name="department">
          <option>FSTM </option>
          <option>FPM</option>
          <option>FSU</option>

        </select>

      </div>

         <div class="form-group col-md-6 col-md-offset-1">
        <label for="exampleInputPassword1">Category</label>
        <select class="form-control" name="category">
          <option>Memo </option>
          <option>Minute Meeting</option>
          <option>Proposal</option>


        </select>

      </div>
      <div class="form-group col-md-6 col-md-offset-1">
        <label for="exampleInputPassword1">Remark</label>
        <textarea type="textarea" class="form-control" name="remark"></textarea> 
      </div>
      <div class="form-group col-md-6 col-md-offset-1">
        <label for="exampleInputPassword1">Date of Documents Created: </label>
        <input type="date" class="form-control" name="start" >
      </div>
      <div class="form-group col-md-6 col-md-offset-1">
        <label for="exampleInputPassword1">Upload Documents Date: </label>
        <input type="date" class="form-control" name="end" >
      </div>

   

      <div class="form-group col-md-6 col-md-offset-1">
        <label for="exampleInputFile">File input</label>
        <input type="file" id="exampleInputFile" name="fileToUpload">

      </div>

      <div  class="form-group col-md-6 col-md-offset-1">
        <button type="submit"  class="btn btn-success">Submit</button>
          <button type="reset"  class="btn btn-danger">Cancel</button>
      </div>
    </form>
  </div>
</div>

@endsection