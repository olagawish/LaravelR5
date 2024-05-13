<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

@include('includes.navS')
<div class="container" style="margin-left:20px ">
<h2>Insert Student</h2>

<form action="{{ route('insertStudent')}}" method="POST">
   @csrf
    <label for="studentName">student Name:</label><br>
    <input type="text" id="studentName" name="studentName" class="form-control"><br>
    <label for="age">age:</label><br>
    <input type="text" id="age" name="age" class="form-control"><br><br>
    <input type="submit" value ="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>
</div>

</body>
</html>
