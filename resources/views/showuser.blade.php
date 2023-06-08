<!DOCTYPE html>
<html>
<head>
    <title>CRUD</title>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
   <div class="container mt-5">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Sr. No</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Phone</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $data)
          <tr>
            <th scope="row">{{$data->id}}</th>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->address}}</td>
            <td>{{$data->phone}}</td>
            <td>
              <a href="/update/{{$data->id}}"><button type="button" class="btn btn-primary">Edit</button></a>
           <a href="/delete/{{$data->id}}"><button type="button" class="btn btn-danger">Delete</button></a> 
            </td>
          </tr>
           
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
            



       
        
</body>
</html>
