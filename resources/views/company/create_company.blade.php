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
      <form action="{{ Route('company.store') }}" method="post">
        @CSRF
        <label for="">Name</label>
        <input type="text" name="name" class="form-control">
        <label for="">Address</label>
        <textarea name="address" class="form-control"></textarea>
        <label for="">Category</label>
        <input type="text" name="category" class="form-control">
        <br><br>
        <button type="submit" class="btn btn-success" name="button">Create Company</button>
      </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
