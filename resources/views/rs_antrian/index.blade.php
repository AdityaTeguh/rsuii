<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index Antrian</title>
</head>
<body>
<h1>Index Antrian</h1>
@foreach($antrian as $antrians)

{{$antrians->nik}}

@endforeach

</body>
</html>