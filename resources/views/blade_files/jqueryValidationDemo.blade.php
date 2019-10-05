<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
  <script src="Bootstrap/jquery/jquery.min.js"></script>
  <script src="Bootstrap/jquery/jquery.validate.js"></script>
  
  <script src="Bootstrap/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">
  <h2>Vertical (basic) form</h2>
  <form action="{{url('formData')}}" id="myForm">
  
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="{{ old('name') }}">
	        @if ($errors->has('name'))<span class="help-block"><strong style="color:red">{{ $errors->first('name') }}</strong></span>@endif
    </div>
  
  
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value="{{ old('email') }}" >
	  @if ($errors->has('email'))<span class="help-block"><strong style="color:red">{{ $errors->first('email') }}</strong></span>@endif
    </div>
	
	
    <div class="form-group">
      <label for="pwd">Mobile:</label>
      <input type="password" class="form-control" id="mobile" placeholder="Enter Mobile" name="mobile" value="{{ old('mobile') }}">
	  @if ($errors->has('mobile'))<span class="help-block"><strong style="color:red">{{ $errors->first('mobile') }}</strong></span>@endif
    </div>
 
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>

<script src="Bootstrap/jquery/custom_validation.js"></script>


<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_form_basic&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Feb 2018 11:05:43 GMT -->
</html>
