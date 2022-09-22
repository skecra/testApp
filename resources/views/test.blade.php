<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>nesto</h1>

    <p>Welcome {{$ime}}</p>

    @if($list)
    <ul>
        @foreach($niz as $clan)
            <li>{{$clan}}</li>
        @endforeach
    </ul>
    @else
        <table border="1">
            <thead>
            <th>R. br.</th>
            <th>Ime</th>
            </thead>
            <tbody>
            @foreach($niz as $key=>$clan)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$clan}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
