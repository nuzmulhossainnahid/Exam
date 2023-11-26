<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Company List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="m-4">
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="m-4" style="text-align: center">
        <a href="{{url('createCompany')}}" class="btn btn-success">Add New Company</a>
        <a href="{{url('createEmploy')}}" class="btn btn-success">Add New Employ</a>
        <a href="{{url('CompanyList')}}" class="btn btn-success">Company List</a>
        <a href="{{url('EmployList')}}" class="btn btn-success">Employ List</a>

    </div>
    <table class="table table-dark table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Total Employ</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $number = 1; ?>
        @foreach($data as $data)
        <tr>

            <td>{{$number}}</td>
            <?php $number++; ?>
            <td>{{$data->Name}}</td>
            <td>{{$data->Email}}</td>
            <td>{{$data->Phone}}</td>
            <td><a href="{{url('Count',$data->id)}}" class="btn btn-success">Count</a>
            </td>
            <td> <a href="{{url('EditCom',$data->id)}}" class="btn btn-success">Edit</a>
             <a href="{{url('DeleteCom',$data->id)}}" class="btn btn-danger">Delete</a>
            </td>


        </tr>
            @endforeach
        </tbody>
    </table>

</div>
</body>
</html>
