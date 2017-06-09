<!DOCTYPE html>
<html>
<head>
	<title>Latihan</title>
</head>
<body>
<center>
 Daftar : <b>{{$pilih}} {{pilih2}}</b>
 @foreach($query as $data)
 <li>{{$data}}</li>
 @endforeach

</center>
</body>
</html>