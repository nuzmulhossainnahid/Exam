<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Employ</title>
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
    <form action="{{url('EditEmployFrom',$data->id)}}" method="post">
        @csrf
        <div class="form-group">
            <label >First Name</label>
            <input required type="text" name="FirstName" class="form-control"  value="{{$data->FirstName}}">
        </div>
        <div class="form-group">
            <label >Last Name</label>
            <input required type="text" name="LastName" class="form-control"  value="{{$data->FirstName}}">
        </div>
       <div class="form-group">

            <label >Company</label>
            <select class="form-control" name="Company">
                @foreach($data1 as $data1)
                    <option value="{{$data1->Name}}" style="color: #1a202c">{{$data1->Name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label >Email</label>
            <input type="email" name="Email" class="form-control"  value="{{$data->Email}}">
        </div>
        <div class="form-group">
            <label >Phone</label>
            <input type="number" name="Phone" class="form-control"  value="{{$data->Phone}}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary w-100 mt-2">Save</button>
        </div>
    </form>
</div>
</body>
</html>
