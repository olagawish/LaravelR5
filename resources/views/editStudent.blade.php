<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Edit Student</title>
</head>
<body>

@include('includes.nav')

<div class="container" style="margin-left:20px ">
<h2>Edit Student</h2>

    <form action="{{ route('updateStudent', $student->id) }}" method="POST">
    @csrf
    @method('put')
        <label for="studentName">student Name:</label><br>
        <p style ="color:red"> 
          @error('studentName')
            {{ $message }}
        @enderror
      </p>
        <input type="text" id="studentName" name="studentName" class="form-control" value="{{ $student->studentName }}" ><br>
        <label for="age">age:</label><br>
        <p style ="color:red"> 
          @error('age')
            {{ $message }}
         @enderror
      </p>
    <input type="text" id="age" name="age" class="form-control" value="{{ $student->age }}"><br><br>
        <input type="submit" value ="Submit">
    </form> 

    <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>
</div>

</body>
</html>
