<!DOCTYPE html>
<html>
<body>

<h2>Insert Student</h2>

<form action="{{ route('insertStudent')}}" method="POST">
   @csrf
    <label for="studentName">student Name:</label><br>
    <input type="text" id="studentName" name="studentName" value=""><br>
    <label for="age">age:</label><br>
    <input type="text" id="age" name="age" ><br><br>
    <input type="submit" value ="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
