<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Styles -->

</head>
<body>
<div class="container-fluid">
    <div class="table">
<br>
        <a class="btn btn-primary" href="{{route('students.create')}}">Add New Student</a>
        <br>
        <br>
        <table>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Class</td>
                <td>Roll No</td>
                <td>Action</td>
            </tr>
        @foreach($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->class}}</td>
                    <td>{{$student->rollNo}}</td>
                    <td>
                        <button><a href="{{route('students.edit', $student->id)}}">Edit</a></button>
                    </td>
                    <td>
                        <form method="post" action="{{ route('students.destroy', $student->id) }}">
                            @csrf
                            @method('DELETE')
                            <button>Delete</button>
                        </form>
                    </td>
                </tr>

            @endforeach
        </table>
    </div>


</div>
</body>
</html>

