@extends('template')
@section('content')
<style>
    input[type=checkbox]{
        transform:scale(1.5);
    }
    
    .btn-outline-primary{
        width:100px;
    }
    .btnn{
        border:none;
        border-radius:50%;
        background:transparent;
        font-size:30px;
        color:red;
        margin-top:-8px;
    }
    .btnn:hover{
        background-color:red;
        color:white;
    }
</style>
<head>
	<meta charset="UTF-8">
	<title>dash</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container col-lg-12 d-block m-auto">
<h2><b>Feedback Manager</b></h2>
  <table class="table table-striped">
    <thead>
      <tr>
          <th>Name</th>
          <th>Email</th>
        <th>Comments</th>
        <th>Approval</th>
        <th>Delete</th>
        
      </tr>
    </thead>

    <tbody>
    @forelse($comments as $comment)
      <tr>
          <td>{{$comment->Name}}</td>
          <td style="max-width:150px">{{$comment->Email}}</td>
        <td style="max-width:200px">{{$comment->comment}}</td>
        <td>
              <form action="{{url('/toggle-approve')}}" method="POST">
                  @csrf
                  
                  <input <?php if($comment->approve == 1){echo "checked";}?>  type="checkbox" name='approve'>   
                  &#8287 &#8287 &#8287
                     <input type="hidden" name="commentId" value="{{$comment->id}}">    
                  <input class="btn btn-outline-primary" type="submit" value="Done">
                  
              </form>
              
        </td>
        <td>
            <form action="{{ url('record/delete/' . $comment->id) }}" method="POST">
            @csrf
            <button  class="btnn" type="submit"><i class="fa fa-trash-o"></i></button>

            </form>
        </td> 
        <!-- <td style="max-width:80px">{{$comment->created_at}}</td> -->
      </tr>
      @empty
      <h4 style="color:red">No Data</h4>
      @endforelse
    </tbody>
  </table>
</div>


<div class="footer_space"></div>
</body>
@stop