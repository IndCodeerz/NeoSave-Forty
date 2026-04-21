<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
</head>
<body>

    <h1>User Listt</h1>

    <ul>
        @foreach ($users as $user)
            <li>{{ $user['name'] }}</li>
        @endforeach
    </ul>

</body>
</html>