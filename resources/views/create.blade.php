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
    <br>
<form method="post" action="{{route('students.store')}}">
    @csrf
    <input type="text" name="name" placeholder="Enter student name" required>
    <input type="text" name="class" placeholder="Enter class" required>
    <input type="text" name="rollNo" placeholder="Enter roll" required>
    <input type="submit" value="Add New Student">

</form>

</div>
</body>
</html>

