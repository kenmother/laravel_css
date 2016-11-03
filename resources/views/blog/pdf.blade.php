<html>
	<head>
	<title>PDF</title>
	</head>

		<body>
			<h3>{{$artikel->judul}}</h3>
			<img src = "{{storage_path('sampul/'.$artikel->sampul)}}" style ="width:d100%">

		<p>{{$artikel->isi}}</p>

		</body>
		</html>