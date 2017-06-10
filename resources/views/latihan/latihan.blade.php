<!DOCTYPE html>
<html>
<head>
	<title>Latihan</title>
</head>
<body>
<center>
 Daftar : <b>{{$data}} {{$data2}}</b>
 @foreach($query as $key)
 <li>{{$key}}</li>
 @endforeach

</center>
</body>
</html>