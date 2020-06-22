<!doctype html>
<html>
<head>

</head>
<body>
    @foreach($internships as $internship)
    <div>
        {{$internship->description}}
    </div>
    @endforeach
</body>
</html>
