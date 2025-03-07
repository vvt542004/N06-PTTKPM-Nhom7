<!DOCTYPE html>
<html lang="en">
<head>
    @include('parts.head')
</head>
<body>
    <!--header-->
   @include('parts.header')
   <!--menu-->
   @include('parts.menu')   
   <!--content-->
   @yield('content')
   
   
   @include('parts.footer')

</body>
</html>