<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Muhamad Nauval Azhar">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>Category</title>
    <!--Saying livewire these are the style links and path of css-->
    @livewireStyles
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    
</head>

 <!--Body background image-->
<body Style="  background-image:url('assets/images/wood.jpg');     background-size: cover; " >
   
    <div >

            <!--Content container-->
            <div class="container-fluid ">
                <!--Code to display the different blade flies through routing-->
                {{$slot}}
            </div>

             {{-- @livewire('data-insert') --}}


     </div>

            
	 <!--Saying livewire these are the script links and path of .js-->
    @livewireScripts
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/popper.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
  
  <script>
    window.addEventListener('show-form',event => {
        $('#form').modal('show');
    })

    window.addEventListener('hide-form',event => {
        $('#form').modal('hide');
    })

    window.addEventListener('show-form-edit',event => {
        $('#modelUpdate').modal('show');
    })

    window.addEventListener('hide-form-edit',event => {
        $('#modelUpdate').modal('hide');
    })

    window.addEventListener('show-delete-form',event => {
        $('#delete').modal('show');
    })

    window.addEventListener('hide-delete-form',event => {
        $('#delete').modal('hide');
    })
  </script> 
</body>
</html>
