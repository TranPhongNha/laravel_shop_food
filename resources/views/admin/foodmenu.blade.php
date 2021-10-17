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
    <div style="position: relative;top: 60px;right: -150px">
        <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Title</label>
                <input style="border: 3px solid #555;color: blue;" type="text" name="title" placeholder="Write title" required>
            </div>
            <div>
                <label>Price</label>
                <input style="border: 3px solid #555;color: blue;" type="num" name="price" placeholder="Write price" required>
            </div>
            <div>
                <label>image</label>
                <input style="border: 3px solid #555;" type="file" name="image" required>
            </div>
            <div>
                <label>Description</label>
                <input style="border: 3px solid #555;color: blue;" type="text" name="description" placeholder="Description"
                       required>
            </div>
            <div>
                <input style="color: black" type="submit" value="Save">
            </div>

        </form>
    </div>
</div>

@include("admin.adminscript")
</body>
</html>
