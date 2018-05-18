<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>

<div class="container" name ="header">
    @include('navbar')
</div>

<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Roll Number</th>
            <th scope="col">Email</th>
            <th scope="col">Birthday</th>
            <th scope="col">Address</th>
            <th scope="col">Phone</th>
            <th scope="col">Avatar</th>
            <th scope="col">Gender</th>
        </tr>
        </thead>
        <tbody>
        @foreach($list_product as $key => $product)
            <tr>
                <th scope="row">{{$product -> id}}</th>
                <td>{{$product -> name}}</td>
                <td>{{$product -> rollNumber}}</td>
                <td>{{$product -> email}}</td>
                <td>{{$product -> birthday}}</td>
                <td>{{$product -> address}}</td>
                <td>{{$product -> phone}}</td>
                <td>{{$product -> avatar}}</td>
                <td>{{$product -> gender}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<script src="{{asset('js/app.js')}}"></script>
@include('footer')
</body>
</html>



