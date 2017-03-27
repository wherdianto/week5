<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">	
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<form action="" method="post" class="form-horizontal">
			{{ csrf_field() }} 
			<div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" name="nama" class="form-control" @if(isset($nama)) value="{{ $nama }}" @endif>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" class="form-control" @if(isset($email)) value="{{ $email }} @endif">
			</div>
			<label>Jenis Kelamin</label>
			<br>
			<div class="radio">
				<label>
					<input type="radio" name="gender" value="m" @if(isset($gender) && $gender == "m") checked @endif>Laki-Laki
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="gender" value="f" @if(isset($gender) && $gender == "f") checked @endif>Perempuan	
				</label>
			</div>
			<br>
			<label>Senjata Pilihan</label>
			<br><p>Bisa pilih lebih dari satu</p>
			<div class="checkbox">
			<label>
				<input type="checkbox" name="senjata[]" value="Radiance" @if(isset($senjata) && in_array('Radiance',$senjata)) checked @endif>Radiance
			</label><br>
		    <label>
		    	<input type="checkbox" name="senjata[]" value="Rapier" @if(isset($senjata) && in_array('Rapier',$senjata)) checked @endif>Divine Rapier
		    </label><br>
		    <label>
		    	<input type="checkbox" name="senjata[]" value="Cuirass" @if(isset($senjata) && in_array('Cuirass',$senjata)) checked @endif>Cuirass
		    </label>
			</div>
			<br>
			<button type="submit" class="btn btn-warning">Submit</button>
			</form>
			<br>
			@if(isset($nama))
				Halo, {{ $nama }}
			@endif
			<br>
			@if(isset($email))
				Email kamu : {{ $email }}
			@endif
			<br>
			@if(isset($gender))
				Kamu seorang 
				@if($gender == "m") Laki-laki
				@elseif($gender == "f") Perempuan
				@endif
			@endif
			<br>
			@if(isset($senjata))
			Senjata pilihan :
			<br>
				@foreach($senjata as $value)
				-> {{ $value }}
				<br>
				@endforeach
			@endif
		</div>
	</div>
</div>
<script type="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	

</body>
</html>