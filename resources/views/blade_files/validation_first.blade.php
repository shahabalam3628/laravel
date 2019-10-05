<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
  <script src="Bootstrap/jquery/jquery.min.js"></script>
  <script src="Bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <center><h2>Example Of Validation1</h2></center>
  <form>
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>

    <div class="form-group">
      <label for="email">Mobile:</label>
      <input type="email" class="form-control" id="mobile" placeholder="Enter Mobile" name="mobile">
    </div>

    <div class="form-group">
      <label for="email">Gender:</label>
        <select class="form-control" id="sel1">
            <option>Male</option>
            <option>Female</option>
       </select>
      </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <textarea class="form-control" id="address" name="address" placeholder="Enter Address"></textarea>
    </div>
  <div class="form-group">
    <input type="hidden" name="_token" value="{{csrf_token() }}"/>
  </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
