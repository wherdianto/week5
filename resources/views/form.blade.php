<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<form>
		Nama <input type="text" name="nama">
		Email <input type="email" name="email">
	</form>
	<br><br>
	@if(isset($nama))
	Halo, {{ nama }}
	@endif
	<br>
	@if(isset(email))
	Email kamu {{ email }}
	#endif
</body>
</html>