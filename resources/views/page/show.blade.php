@extends('layouts.app')

@section('content')
<div class="body-div">

 <?php if (isset($_GET['mode'])) { $mode = htmlspecialchars($_GET["mode"]);}?>
 @if($documents->count())

 <div class= "container">


  <h1 class="text-center" style="color:white" >Documents</h1><br>

  <form>
    <div class="col-md-12 input-group">
      <input type="text" name="mode" class="form-control" placeholder="Search">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit">
         <i class="fa fa-search" aria-hidden="true"></i>
       </button>
     </div>
   </div>
 </form>

 <div class="panel col-md-12" style="margin-top: 20px">


   <table class="table">
    <thead>
      <tr>
        <th scope="col">Bil</th>
        <th scope="col">Documents name</th>
        <th scope="col">Locations</th>
        <th scope="col">Reference code</th>
        <th scope="col">Department</th>
        <th scope="col">Category</th>
        <th scope="col">Remark</th>
        <th scope="col">Documents created at</th>
        <th scope="col">Upload date</th>
        @if(Auth::guest())
        @else
        <th scope="col">Option</th>
        @endif
      </tr>
    </thead>
    <tbody>
      @foreach ($documents as $document)
      <tr>
        <td>{{ $document->id }} </td>
        <td> <a href="image/{{ $document->fileToUpload}}">{{ $document->name}}</a> </td>
        <td> {{ $document->location }} </td>
        <td> {{ $document->reference }} </td>
        <td> {{ $document->department }} </td>
        <td> {{ $document->category }} </td>
        <td> {{ $document->remark }} </td>
        <td> {{ $document->start }} </td>
        <td> {{ $document->created_at }} </td>
        @if(Auth::guest())
        @else
        <td>  <a href="{{ route('document.edit', $document->id) }}"><button class="btn btn-block btn-sm btn-info">Edit</button></a>
         <a class="btn btn-danger btn-sm text-white" data-toggle="modal" data-target="#delete{{ $document->id }}">
          Delete
        </a>
      </td>
      @endif
    </tr>
    @endforeach
  </tbody>
</table>
   {{--          <h3>Bil: {{ $document->id }}</h3>
            <h3>Document name: {{ $document->name }} </h3>
            <h3>Location: {{ $document->location }}</h3>
            @if($document->status === '1')
              <h5>unavailable</h5>
            @else
              <h5>available!</h5>
              @endif
              @if(Auth::guest())

              @else
            @if(Auth::user()->role==='1')
              <a class="btn btn-danger pull-right" href="{{ route('delete',['id'=>$document->id])}}">Delete</a>
              <a class="btn btn-primary pull-right" href="{{ route('updatedocpage',['id'=>$document->id])}}">Edit</a>
            @else
            @endif
            @endif
          </div>
        </div>
        @endforeach --}}
        @endif
      </div>
    </div>
  </div>

{{--   <form method="POST" action="{{ route('document.destroy', $document->id) }}">
    {{method_field('DELETE') }}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="delete" class="btn btn-danger btn-block btn-sm">Delete</button>,
  </form> --}}

  <!-- delete document modal -->
  @foreach ($documents as $document)
  <div class="modal fade" id="delete{{ $document->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete?</h5>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Document: {{ $document->name }}</label>
          </div>
          <form method="POST" action="{{ route('document.destroy', $document->id) }}">
            {{method_field('DELETE') }}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="delete" class="btn btn-danger btn-block btn-sm">Delete</button>,
          </form>
        </div>
      </div>
    </div>
  </div>
  @endforeach


  @endsection