
<!DOCTYPE html>
<html lang="en">
<head>
  <title>project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>

<div class="container">
  <a href="{{route('showformcomment',$id)}}" ><span class="material-icons btn btn-danger">add_circle</span></a>
    <hr>
    {{-- <button class="btn btn-outline-success"><a href="{{route('student.create')}}">+Add New</a></button> --}}
  <table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Comment</th>
            <th>Action</th>
            
        </tr>
    </thead>
    @foreach ( $student->comments as $item)
    <tbody>
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->comment}}</td>
            <td>
                <a href="{{route('comment.edit',$item->id)}}" ><span class="material-icons">add_circle</span></a>
            </td>
    @endforeach
  </table>
</div>

</body>
</html>
