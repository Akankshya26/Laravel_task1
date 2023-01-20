<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email send </title>
</head>

<body>
    <h1>Employee details </h1>
    <table border=1 cellspacing=1>
        <th>Name</th>
        <th>email</th>
        <th>city</th>
        <tr>
            <td>{{ $order['name'] }}</td>
            <td>{{ $order['email'] }}</td>
            <td>{{ $order['city'] }}</td>
        </tr>
    </table>
</body>

</html>
