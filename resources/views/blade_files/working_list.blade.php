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

<div class="container-full">            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>SNo</th>
        <th>Task Name</th>
        <th>Click Here</th>
        <th>Steps</th>
      </tr>
    </thead>
    <tbody>

      <tr>
        <td>1</td>
        <td>Example Of CURD</td>
        <td><a href="{{ url('/allstudent') }}">Demo</a></td>
        <td><a href="">View Stpes</a></td>
      </tr>

      <tr>
        <td>2</td>
        <td>Validation By .....1</td>
        <td><a href="{{ url('/validation-first') }}">Demo</a></td>
        <td><a href="">View Steps</a></td>
      </tr>
      
      <tr>
        <td>3</td>
        <td>Validation By .....2</td>
        <td><a href="">Demo</a></td>
        <td><a href="">View Steps</a></td>
      </tr>

      <tr>
        <td>4</td>
        <td>Validation Using Request Class</td>
        <td><a href="{{ url('form-validation-demo') }}">Demo</a></td>
        <td><a href="">View Steps</a></td>
      </tr>
      
      <tr>
        <td>5</td>
        <td>Migration</td>
        <td><a href="">Demo</a></td>
        <td><a href="">View Steps</a></td>
      </tr>

      <tr>
        <td>6</td>
        <td>Working With Pagination</td>
        <td><a href="{{ url('/pagination-demo') }}">Demo</a></td>
        <td><a href="">View Steps</a></td>
      </tr>
      
      <tr>
        <td>7</td>
        <td>Create Capcha</td>
        <td><a href="{{ url('/createcaptcha') }}">Demo</a></td>
        <td><a href="">View Steps</a></td>
      </tr>
	  
	  
	<tr>
        <td>7</td>
        <td>Create Capcha</td>
        <td><a href="{{ url('/my-captcha') }}">Demo</a></td>
        <td><a href="">View Steps</a></td>
      </tr>

      <tr>
        <td>8</td>
        <td>Send An Email Using SMTP </td>
        <td><a href="{{url('send/email')}}">Demo</a></td>
        <td><a href="">View Steps</a></td>
      </tr>
	  
	  <tr>
        <td>8</td>
        <td>Send An Email Without Using SMTP</td>
        <td><a href="{{url('mail/send')}}">Demo</a></td>
        <td><a href="">View Steps</a></td>
      </tr>
	  
	  
      <tr>
        <td>9</td>
        <td>Set Session Data</td>
        <td><a href="{{url('session/set')}}">Demo</a></td>
        <td><a href="">View Steps</a></td>
      </tr>
	  
	  
	  <tr>
        <td>9</td>
        <td>Get Session Data</td>
        <td><a href="{{url('session/get')}}">Demo</a></td>
        <td><a href="">View Steps</a></td>
      </tr>
	  
	  
	<tr>
        <td>9</td>
        <td>Delete Session Data</td>
        <td><a href="{{url('session/remove')}}">Demo</a></td>
        <td><a href="">View Steps</a></td>
    </tr>
	  
	  

	  

      <tr>
        <td>10</td>
        <td>Add Header And Footer</td>
        <td><a href="{{url('header-footer-demo')}}">Demo</a></td>
        <td><a href="">View Steps</a></td>
      </tr>



      <tr>
        <td>11</td>
        <td>Echo Data Demo</td>
        <td><a href="{{url('echo-data-demo')}}">Demo</a></td>
        <td><a href="">View Steps</a></td>
      </tr>
      
      

      <tr>
        <td>11</td>
        <td>If Else Demo</td>
        <td><a href="{{url('if-else-demo')}}">Demo</a></td>
        <td><a href="">View Steps</a></td>
      </tr>

      <tr>
        <td>12</td>
        <td>For Loop Demo</td>
        <td><a href="{{url('for-loop-demo')}}">Demo</a></td>
        <td><a href="">View Steps</a></td>
      </tr>
	  
	  
	  <tr>
        <td>13</td>
        <td>Validation using jquery</td>
        <td><a href="{{url('jqueyvalidation')}}">Demo</a></td>
        <td><a href="">View Steps</a></td>
      </tr>
	  
	 <tr>
        <td>13</td>
        <td>Generate PDF</td>
        <td><a href="{{url('dynamic_pdf')}}">Demo</a></td>
        <td><a href="">View Steps</a></td>
      </tr>
	  
	 <tr>
        <td>13</td>
        <td>Generate PDF</td>
        <td><a href="{{url('generate-pdf')}}">Demo</a></td>
        <td><a href="">View Steps</a></td>
      </tr>

    </tbody>
  </table>
</div>

</body>
