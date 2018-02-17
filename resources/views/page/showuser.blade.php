@extends('layouts.app')

@section('content')
<div class="body-div">

  <h1 class="text-center" style="color: white">Users</h1><br>
  
  
  <form>
    <div class="col-md-8 col-md-offset-2 input-group">
      <input type="text" name="mode" class="form-control" placeholder="Search">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit">
         <i class="fa fa-search" aria-hidden="true"></i>
       </button>
     </div>
   </div>
 </form>
 <div class="container">
  <div class="panel col-md-12" style="margin-top: 20px">


   <table class="table">
    <thead>
      <tr>
        <th scope="col">Bil</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Department</th>
        
        
      </tr>
    </thead>

    <?php if (isset($_GET['mode'])) { $mode = htmlspecialchars($_GET["mode"]);}?>
    @if($users->count())
    @foreach ($users as $user)
    <tr>
      <td>{{ $user->id }}</td>
      <td>{{ $user->name }}</td>
      <td> {{ $user->email }}</td>
      <td> {{ $user->department }}</td>
    </tr>
  </div>
</div>
</div>
@endforeach
</table>
@endif 
</div>
@endsection