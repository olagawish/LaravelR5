<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

@include('includes.nav')

<div class="container" style="margin-left:20px ">
<h2>Insert Client</h2>

    <form action="{{ route('insertClient')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <label for="clientName">client Name:</label><br>
       <p style ="color:red"> 
          @error('clientName')
            {{ $message }}
          @enderror
      </p>
        <input type="text" id="clientName" name="clientName" class="form-control" value="{{ old('clientName') }}"><br>

        <label for="phone">phone:</label><br>
        <p style ="color:red"> 
          @error('phone')
            {{ $message }}
          @enderror
      </p>
        <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone') }}"><br><br>

        <label for="email">email:</label><br>
        <p style ="color:red"> 
          @error('email')
            {{ $message }}
          @enderror
      </p>
        <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}"><br><br>

        <label for="website">website:</label><br>
        <p style ="color:red"> 
          @error('website')
            {{ $message }}
          @enderror
      </p>
        <input type="text" id="website" name="website" class="form-control" value="{{ old('website') }}"><br><br>

        <label for="city">city:</label><br>
       <p style ="color:red"> 
          @error('city')
            {{ $message }}
          @enderror
      </p>
      <select name="city" id="city" class="form-control">
        <option value="">Please Select City</option>
        <option value="cairo" {{ old('city') == 'Cairo' ? 'selected' : '' }}>Cairo</option>
        <option value="giza" {{ old('city') == 'Giza' ? 'selected' : '' }}>Giza</option>
        <option value="alex" {{ old('city') == 'Alex' ? 'selected' : '' }}>Alex</option>
      </select>
      <br><br>

        <label for="active">Active:</label><br>
        <input type="checkbox" id="active" name="active" class="form-control" {{ old('active') ? 'checked' : '' }}><br>

        <label for="image">image:</label><br>
        <input type="file" id="image" name="image" class="form-control"><br>

        <input type="submit" value ="Submit">
    </form> 

    <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>
</div>

</body>
</html>
