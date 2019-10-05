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
  <center><h2>Basic Table</h2></center>
              
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Mobile</th>
        <th>Address</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($data as $result){ ?>
      <tr>
        <td><?php echo $result->name ?></td>
        <td><?php echo $result->mobile_no ?></td>
        <td><?php echo $result->address ?></td>
        <td><a href="">Edit</a></td>
        <td><a href="<?php ?>">Delete</a></td>
      </tr>      
      <?php } ?>
    </tbody>
  </table>
</div>

</body>

<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_table_basic&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Feb 2018 11:05:48 GMT -->
</html>
