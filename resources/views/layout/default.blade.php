<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopOP</title>
    @include('includes.head')
</head>
<body>
    <header class="container-fluid">

        @include('includes.header')

   </header>
   <div  class="container-fluid">
           @yield('content')
   </div>
   <footer class="container-fluid mt-5">
       @include('includes.footer')
   </footer>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js" integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     {{-- <script src="{{asset('public/assets/js/script.js')}}?v=<?php //echo rand(0,1000);?>"></script>  --}}
     <script src="{{asset('assets/js/script.js')}}?v=<?php echo rand(0,1000);?>"></script> 
     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</body>
</html>