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
            
  <h1>Customer List</h1>
<a href="{{ URL::to('/customers/pdf') }}">Export PDF</a>
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $customer)
      <tr>
        
        <td>{{ $customer->user_name }}</td>
        <td>{{ $customer->user_email }}</td>
        <td>{{ $customer->user_mobile }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection
</body>
