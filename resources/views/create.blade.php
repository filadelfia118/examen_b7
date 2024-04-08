<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen_biletNr7</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Tasks</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('tasks.index')}}">Tasks</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>
<div class="container">
  <div class="row">
    <div class="col-md-6 m-auto">


      <form action="{{route('tasks.store') }}" method="post" class="mt-4">
        @csrf
        
        <div class="mb-3">
          <input type="text"  name="title" class="form-control" placeholder="Title">

          @error('title')
              <div class="alert text-danger">{{ $message }}</div>
          @enderror

        </div>
        <div class="mb-3">
          <input type="text"  name="description" class="form-control" placeholder="Descriere">
          @error('description')
              <div class="alert text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="completed">Completed:</label>
            <select class="form-control" id="completed" name="completed" required>
                <option value="No">No</option>
                <option value="Yes" style="color: green">Yes</option>
            </select>
          @error('completed')
              <div class="alert text-danger">{{ $message }}</div>
          @enderror
        </div>
        
        <button type="submit" class="btn btn-dark btn-sm">Salveaza</button>

      </form>

    </div>
  </div>
</div>

<footer>

</footer>

</body>
</html>