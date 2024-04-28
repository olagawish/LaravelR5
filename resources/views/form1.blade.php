<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="{{ route('submit')}}" method="POST">
   @csrf
   <label for="firstname">First Name:</label>
    <input type="text" id="firstname" name="firstname" required>
    <br>
    <label for="lastname">Last Name:</label>
    <input type="text" id="lastname" name="lastname" required>
    <br>
    <button type="submit">Submit</button>
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
