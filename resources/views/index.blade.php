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
<h1 class="text-center">Platformă de gestionare a sarcinilor
</h1>
<div class="container">
  <div class="row">
    <a href="{{ route('tasks.create') }}" class="btn btn-success btn-sm my-3">Adauga</a>
    <div class="row">
      <h4>Lista sarcinilor</h4>
      <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Completed</th>
                <th>Optiuni</th>
              </tr>
            </thead>
          <tbody>
            @foreach($tasks as $task)
            <tr >
              <td>{{$task->id}}</td>
              <td>{{$task->title}}</td>
              <td>{{$task->description}}</td>
                <td>
                    <form action="{{route('tasks.store') }}" method="post" >
                        @csrf
                        <div class="mb-3">
                            <label for="completed">Completed:</label>
                            <select class="form-control" id="completed" name="completed"   required>
                                <option value="" disabled selected>Selectează o opțiune:</option>
                                <option value="No" style="color: red">No</option>
                                <option value="Yes" style="color: green">Yes</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-dark btn-sm">Salveaza</button>
                    </form>
                </td>
              <td>
                <a href="{{route('tasks.show', ['task'=> $task->id]) }}" class="btn btn-info btn-sm">Show</a>
                {{-- <form action="{{route('tasks.destroy',['task'=>$task]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm my-3">Delete</button>
                  </form> --}}
              </td>
            </tr>
            @endforeach

          </tbody>
          </table>
      </div>
      

    </div>
  </div>
</div>
<footer>

</footer>

</body>
</html>