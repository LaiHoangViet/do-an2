<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{Route('public.news.add')}}" method="post" enctype="multipart/form-data">
		{{csrf_field()}}
	anh<input type="file" name="Anh">
	<input type="submit" name="submit" value="upload">
</form>
</body>
</html>
