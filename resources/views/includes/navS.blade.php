<!-- Start nav bar-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Students</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ route('addStudent')}}">Add</a></li>
      <li><a href="{{ route('students')}}">students</a></li>
      <li><a href="{{ route('trashStudent')}}">Trash</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>
<!-- End nav bar-->