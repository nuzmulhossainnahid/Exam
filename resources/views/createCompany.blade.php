<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="m-4">
    <div class="m-4" style="text-align: center">
        <a href="{{url('createCompany')}}" class="btn btn-success">Add New Company</a>
        <a href="{{url('createEmploy')}}" class="btn btn-success">Add New Employ</a>
        <a href="{{url('CompanyList')}}" class="btn btn-success">Company List</a>
        <a href="{{url('EmployList')}}" class="btn btn-success">Employ List</a>
    </div>
    <form action="{{url('createCompanyFrom')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Name</label>
            <input type="text" name="Name" class="form-control"  placeholder="Company Name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email</label>
            <input type="email" name="Email" class="form-control" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Phone</label>
            <input type="number" name="Phone" class="form-control"  placeholder="Phone Number">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary w-100 mt-2">Save</button>
             </div>
    </form>
</div>
</body>
</html>
