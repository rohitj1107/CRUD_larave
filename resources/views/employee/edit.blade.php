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
      <form action="{{ Route('employee.update', $employee->id) }}" method="post">
        @CSRF
        @method('put')
        <label for="">Name</label>
        <input type="text" name="name" value="{!! $employee->name !!}" class="form-control">
        <label for="">Company Name</label>
        <select class="form-control" name="company_name">
          <option value="{!! $employee->company_name !!}">{!! $employee->company_name !!}</option>
          @foreach($list as $value)
            @if($employee->company_name != $value->name)
              <option value="{!! $value->name !!}">{!! $value->name !!}</option>
            @endif

          @endforeach
        </select>
        <label for="">Profile</label>
        <input type="text" name="profile" value="{!! $employee->profile !!}" class="form-control">
        <br><br>
        <button type="submit" class="btn btn-success" name="button">Create Company</button>
      </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
