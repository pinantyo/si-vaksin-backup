<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('title')</title>
		<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/logo.png') }}">

		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

		
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

		<style>
			body{
				height: 100vh;
			}
			.text-justify{
				text-align: justify;
			}
			@media screen and (max-width: 992px){
				.btn{
					padding: 0!important;
				}
			}
		</style>
	</head>

	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-dark">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="{{ url('/') }}">
	          <img src="{{asset('img/goVaksinwhite.png')}}" height="35" class="d-inline-block align-top" alt="">
	        </a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

		        <li class="nav-item">
		          <a class="nav-link text-white" aria-current="page" href="{{ url('admin') }}">Dashboard</a>
		        </li>

		        <li class="nav-item">
		          <a class="nav-link text-white" href="#">Laporan Pendaftaran</a>
		        </li>

		        <li class="nav-item dropdown">
		          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		            Database
		          </a>
		          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
		          	<li><a class="dropdown-item font-weight-bold" href="{{ url('admin/data-vaksin') }}">Database Vaksinasi</a></li>

		            <li><hr class="dropdown-divider"></li>

		            <li><a class="dropdown-item font-weight-bold" href="{{ url('admin/data-rumah-sakit') }}">Database Rumah Sakit</a></li>

		            <li><hr class="dropdown-divider"></li>

		            <li><a class="dropdown-item font-weight-bold" href="{{ url('admin/data-admin') }}">Database Admin</a></li>

		          </ul>
		        </li>

		      </ul>

		      	<ul class="navbar-nav mb-2 mb-lg-0">
			      	<li class="nav-item">
			          <a class="nav-link text-white" href="">Profile</a>
			      	</li>
		      	</ul>

		      	<form action="{{ url('logout') }}" method="POST">
		      		@csrf
		      		@method('post')
			        <button type="submit" name="logout" value="logout" class="btn border-0 bg-transparent text-white">Logout</button>
			    </form>
		      	
		        <!-- <form>
		        	<button class="btn border-0 bg-transparent">Login</button>
		        	<button class="btn border-0 bg-transparent">Daftar</button>
		        </form> -->
		    </div>
		  </div>
		</nav>

		<div class="container mb-5 mt-5 p-0">

			@yield('content')
			
		</div>

		

		<footer class="bg-dark p-4 h-20 bottom-0 position-relative w-100">
			
		</footer>
		
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

		<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
		<script>
			$(document).ready(function(){
			  	$('#table_id').DataTable();
			});
			function loadPreview() {
				$("#imageUpload").removeClass('d-none');
		    	var imageUpload = document.getElementById('imageUpload');
		    	imageUpload.src = URL.createObjectURL(event.target.files[0]);
			    imageUpload.onload = function() {
			      URL.revokeObjectURL(imageUpload.src) // free memory
			    }
		 	};
		</script>
	</body>
</html>