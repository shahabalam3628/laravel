<!DOCTYPE html>
<html>
 <head>
  <title>Laravel - How to Generate Dynamic PDF from HTML using DomPDF</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
   }
  </style>
 </head>
 <body>
  <br />
  <div class="container">
   <h3 align="center">Laravel - How to Generate Dynamic PDF from HTML using DomPDF</h3><br />
   
   <div class="row">
    <div class="col-md-7" align="right">
     <h4>Customer Data</h4>
    </div>
    <div class="col-md-5" align="right">
     <a href="{{ url('dynamic_pdf/pdf') }}" class="btn btn-danger">Convert into PDF</a>
    </div>
   </div>
   <br />
   <div class="table-responsive">
    <table class="table table-striped table-bordered">
     <thead>
      <tr>
       <th>Name</th>
       <th>Email</th>
       <th>Mobile</th>
       <th>Address</th>
       <th>Created Date</th>
      </tr>
     </thead>
     <tbody>
     @foreach($customer_data as $customer)
      <tr>
       <td>{{ $customer->user_name }}</td>
       <td>{{ $customer->user_email }}</td>
       <td>{{ $customer->user_mobile }}</td>
	   <td>{{ $customer->user_address }}</td>
	   <td>{{ $customer->created_at }}</td>
       
      </tr>
     @endforeach
     </tbody>
    </table>
   </div>
  </div>
 </body>
</html>