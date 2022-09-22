<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student management system</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a href=""class="navbar-brand">sms</a>

        </div>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h6>Insert Data</h6>
                        <form action=" {{route('store')}} " method="post">
                            @csrf
                            <div class="mb-3">
                                <lable for="">name</lable>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <lable for="">contact</lable>
                                <input type="text" name="contact" class="form-control">
                            </div>
                            <div class="mb-3">
                                <lable for="">email</lable>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <input type="submit"class="btn btn-danger w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>contact</th>
                        <th>email</th>
                        <th>action</th>
                    </tr>
                    @foreach($students as $std)
                        <tr>
                            <td>{{$std->id}}</td>
                            <td>{{$std->name}}</td>
                            <td>{{$std->contact}}</td>
                            <td>{{$std->email}}</td>
                            <td>
                            <a href="{{route('delete',['id'=>$std->id])}}"class="btn btn-danger">x</a>
                        </td>
                        </tr>
                       

                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
</html>