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
  <?php //  print_r($data); ?>

<div class="container">
  <h2>Condensed Table</h2>
  <p>The .table-condensed class makes a table more compact by cutting cell padding in half:</p>            
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>SNo</th>
        <th>Color</th>
      </tr>
    </thead>
    <tbody>
      <?php  foreach($data as $tt){ ?>
      <tr>
        <td><?php echo $tt->id; ?></td>
        <td><?php echo $tt->color; ?></td>

      </tr>
    <?php }?>
    </tbody>
  </table>
  <p><?php echo $data->links() ?> </p>
</div>

</body>
</html>
