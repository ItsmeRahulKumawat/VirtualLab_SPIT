@extends('template')
@section('content')
<style>
    input[type=checkbox]{
        transform:scale(1.5);
    }
    /* Style buttons */
    .btn {
    background-color: DodgerBlue; /* Blue background */
    border: none; /* Remove borders */
    color: white; /* White text */
    padding: 12px 16px; /* Some padding */
    font-size: 16px; /* Set a font size */
    cursor: pointer; /* Mouse pointer on hover */
    }
    .btn-outline-primary{
        width:100px;
    }
    .trash{
    background-color: red; /* Blue background */
    border: none; /* Remove borders */
    color: white; /* White text */
    padding: 12px 16px; /* Some padding */
    font-size: 16px; /* Set a font size */
    cursor: pointer; /* Mouse pointer on hover */
    }

    /* Darker background on mouse-over */
    .trash:hover {
    background-color: #cc0f0f;
    color:white;
    }
</style>
<head>
	<meta charset="UTF-8">
	<title>dash</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
<h2><b>Feedback Manager</b></h2>
  <table class="table table-striped">
    <thead>
      <tr>
          <th>Name</th>
          <th>Email</th>
        <th>Comments</th>
        <th>Approval</th>
        
      </tr>
    </thead>

    <tbody>
    @forelse($comments as $comment)
      <tr>
          <td>{{$comment->Name}}</td>
          <td>{{$comment->Email}}</td>
        <td>{{$comment->comment}}</td>
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
            <button class="btn btn-danger" type="submit">Delete this Row</button>

            </form>
        </td> 
        <td>{{$comment->created_at}}</td>
      </tr>
      @empty
      <h4 style="color:red">No Data</h4>
      @endforelse
    </tbody>
  </table>
</div>


	
</body>
@stop