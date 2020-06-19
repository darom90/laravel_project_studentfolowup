
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
</head>
<body>

<div class="container">
    <hr>
    <button class="btn btn-outline-success"><a href="{{route('student.create')}}">+Add New</a></button>
  <table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>firstName</th>
            <th>lastName</th>
            <th>Class</th>
            <th>Decription</th>
            <th>Picture</th>
            <th>IAvartactive</th>
            <th>UserID</th>
            <th>Action</th>
        </tr>
    </thead>
 
    @foreach ( $student as $item)
    <tbody>
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->firstName}}</td>
            <td>{{$item->lastName}}</td>
            <td>{{$item->class}}</td>
            <td>{{$item->decription}}</td>
            <td>{{$item->picture}}</td>
            <td>{{$item->activefolowup}}</td>
            <td>{{$item->user_id}}</td>
            <td>
               <button type="submit" class="btn btn-success" ><a href="{{route('student.edit',$item->id)}}" >Edit</a></button> 
                <form action="{{route('student.destroy',$item->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    </tbody>
    @endforeach
  </table>
</div>

</body>
</html>
