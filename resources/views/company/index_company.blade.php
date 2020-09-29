<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Company</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>

    <div class="container">
      <h1>Company</h1>
      <a href="{{ Route('company.create') }}" class="btn btn-info"> Create Company</a>
      <a href="{{ Route('employee.create') }}" class="btn btn-info">Create Employee</a>
      <a href="{{ Route('company.index') }}" class="btn btn-info">Company List</a>
      <a href="{{ Route('employee.index') }}" class="btn btn-info">Employee List</a>
      <br><br>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">Address</th>
            <th scope="col">Category</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($company as $value)
          <tr>

            <th scope="row">{{ $value->id }}</th>
            <td>{{ $value->name }}</td>
            <td>{{ $value->address }}</td>
            <td>{{ $value->category }}</td>
            <td>
              <div class="btn-group">
                <a href="{!! Route('company.edit', $value->id ) !!}" class="btn btn-warning">Edit</a> &nbsp
                <form action="{!! Route('company.destroy', $value->id ) !!}" method="post">
                  @CSRF
                  @method('delete')
                  <button type="submit" class="btn btn-danger" name="button">Delete</button>
                </form>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
