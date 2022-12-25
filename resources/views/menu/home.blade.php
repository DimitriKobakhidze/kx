<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a style="padding: 5px;font-size:22px;background-color:blue;color:white" href="/admin">ADMIN PANEL</a>
    @foreach($data as $group=>$items)
        <h1 style="color: red">{{$group}}</h1>
        @foreach($items as $item)
            <h2>{{$item->name}}</h2>
            <img src={{$item->img}} />
        @endforeach
        <br>
        <a style="font-size: 20px" href="/group/{{$group}}">სრული ჯგუფის კერძები</a>
    @endforeach
</body>
</html>