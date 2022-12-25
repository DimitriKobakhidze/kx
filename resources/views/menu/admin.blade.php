<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    @foreach($data as $group=>$items)
        <h1 style="color:red">{{$group}}</h1>
        @foreach($items as $item)
            <h1>{{$item->name}}</h1>
            <img style="width:200px;height:200px" src={{$item->img}} />
            <br>
            <a style="padding: 5px;text-decoration:none;background-color:blue;color:white" href="/edit/{{$item->id}}">EDIT</a>
            <a style="padding: 5px;text-decoration:none;background-color:red;color:white" href="/delete/{{$item->id}}">DELETE</a>
        @endforeach
    @endforeach
</body>
</html>