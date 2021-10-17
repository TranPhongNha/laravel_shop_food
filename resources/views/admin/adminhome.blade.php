<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.admincss");
</head>
<body>
<div class="container-scroller">
{{--load giao diện admin bên file navbar.blade.php--}}
@include("admin.navbar")
</div>

@include("admin.adminscript")
</body>
</html>
