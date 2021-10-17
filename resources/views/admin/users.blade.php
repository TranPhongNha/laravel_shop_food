<!doctype html>
<html lang="en">
<head>
    <title>Admin Data</title>
</head>
<body>
<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.admincss")
</head>
<body>
<div class="container-scroller">
    {{--load giao diện admin bên file navbar.blade.php--}}
    @include("admin.navbar")
    <div style="position: relative; top: 60px;right: -60px">
        <table bgcolor="grey" border="3px">
            <tr>
                <th style="padding: 30px">Name</th>
                <th style="padding: 30px">Email</th>
                <th style="padding: 30px">Action</th>
            </tr>
            @foreach($data as $data)
                <tr align="center">
                    <th>{{$data->name}}</th>
                    <th>{{$data->email}}</th>

                    @if($data->usertype=="0")
                        <th><a href="{{url('/deleteuser',$data->id)}}">Delete</a></th>
                    @else
                        <th><a href="">Not Allowed</a></th>

                    @endif
                </tr>
            @endforeach
        </table>
    </div>

</div>

@include("admin.adminscript")
</body>
</html>

</body>
</html>
