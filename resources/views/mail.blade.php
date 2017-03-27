<!DOCTYPE html>
<html>
<head>
	<title>Mailer test</title>
</head>
<body>
	<form action="send_email" method="post">
	{{ csrf_field() }}
		<label for="email">Email</label>
		<input type="email" name="email">
		<label for="content">Content</label>
		<textarea name="content" rows="5"></textarea>
		<button type="submit">Kirim</button>
	</form>
</body>
</html>