<!DOCTYPE html>
<html>
<head>
	<title>Latihan</title>
</head>
<body>
<center>
 Daftar : <b>{{$pilih}}</b>
 @foreach($baru as $data)
 <li>{{$data}}</li>
 @endforeach

</center>
</body>
</html>