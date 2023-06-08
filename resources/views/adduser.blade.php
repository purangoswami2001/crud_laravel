
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
    
<div class="container  ">
<h2>Add New User</h2>
    <form action="/register" method="POST">
    @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Address</label>
            <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Address">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">phone</label>
            <input type="phone" name="phone" class="form-control" id="exampleInputPassword1" placeholder="Phone">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
            



       
        
</body>
</html>
