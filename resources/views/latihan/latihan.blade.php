<!DOCTYPE html>
<html>
<head>
	<title>Latihan</title>
</head>
<body>
<center>
	<h2>Buah</h2>
	<tr>
	@foreach($buah as $data)
		{{$data}}<hr>
	@endforeach
	</tr>
	<br>
	<h2>Hewan</h2>
	<tr>
	@foreach($hewan as $data)
		{{$data}}<hr>
	@endforeach
	</tr>
	<br>
	<h2>Komputer</h2>
	<tr>
	@foreach($komputer as $data)
		{{$data}}<hr>
	@endforeach
	</tr>

</center>
</body>
</html>