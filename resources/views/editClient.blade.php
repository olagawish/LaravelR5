<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Edit Client</title>
</head>
<body>

@include('includes.nav')

<div class="container" style="margin-left:20px ">
<h2>Edit Client</h2>

    <form action="{{ route('updateClients', $client->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
        <label for="clientName">client Name:</label><br>
        <p style ="color:red"> 
          @error('clientName')
            {{ $message }}
          @enderror
      </p>
        <input type="text" id="clientName" name="clientName" class="form-control" value="{{ $client->clientName }}" ><br>
        <label for="phone">Phone:</label><br>
        <p style ="color:red"> 
          @error('phone')
            {{ $message }}
          @enderror
      </p>
        <input type="text" id="phone" name="phone" class="form-control" value="{{ $client->phone }}"><br><br>
        <label for="email">email:</label><br>
        <p style ="color:red"> 
          @error('email')
            {{ $message }}
          @enderror
      </p>
        <input type="email" id="email" name="email" class="form-control" value="{{ $client->email }}"><br><br>
        <label for="website">website:</label><br>
        <p style ="color:red"> 
          @error('website')
            {{ $message }}
          @enderror
      </p>
        <input type="text" id="website" name="website" class="form-control" value="{{ $client->website }}"><br><br>

        <label for="city">city:</label><br>
       <p style ="color:red"> 
          @error('city')
            {{ $message }}
          @enderror
      </p>
      <select name="city" id="city" class="form-control">
        <option value="">Please Select City</option>
        <option value="cairo" {{ $client->city == 'cairo' ? 'selected' : '' }}>Cairo</option>
        <option value="giza" {{ $client->city == 'giza' ? 'selected' : '' }}>Giza</option>
        <option value="alex" {{ $client->city == 'alex' ? 'selected' : '' }}>Alex</option>
      </select>
      <br><br>

        <label for="active">Active:</label><br>
        <input type="checkbox" id="active" name="active" {{ $client->active ? 'checked' : '' }}><br><br>

        <p><img src="{{ asset('assets/images/' . $client->image) }}" alt="{{ $client->clientName }}"></p>
        <label for="image">Image:</label><br>
        <input type="file" id="image" name="image" class="form-control"><br>
        <p style="color:red">
        @error('image')
            {{ $message }}
        @enderror
        </p>

        <input type="submit" value ="Submit">
    </form> 

    <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>
</div>

</body>
</html>
