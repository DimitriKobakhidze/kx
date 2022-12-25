<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="">
        <span>Name<span>
        <input value={{$item->name}} name='name' />
        <br>
        <span>IMG<span>
        <input value={{$item->img}} name='img' />
        <br>
        <span>Group</span>
        <input value={{$item->group}} name='group' />
        <br>
        <span>Position in group</span>
        <input value={{$item->groupId}} name='groupId' />
        <br>
        <button type="submit">Change</button>
    </form>
</body>
</html>