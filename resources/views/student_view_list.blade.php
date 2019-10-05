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
  <center><?php if(isset($message)){echo $message;} ?></center>
  <center><p><a href="http://localhost/laravel/test">Add A New Record</a></p></center>           
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
		<th>Address</th>
		<th>Edit</th>
		<th>Delete</th>
		
      </tr>
    </thead>
    <tbody>
	<?php foreach ($select as $data){ ?>
      <tr>
        <td><?php echo $data->user_name?></td>
        <td><?php echo $data->user_email?></td>
        <td><?php echo $data->user_mobile?></td>
		<td><?php echo $data->user_address?></td>
		<td><a href="{{ url('/update_student',$data->id) }}">Edit</a></td>
		<td><a href="{{ url('/delete_student',$data->id) }}">Delete</a></td>
      </tr>
<?php	}?>

    </tbody>
  </table>
</div>

</body>

<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_table_hover&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Feb 2018 11:05:48 GMT -->
</html>


