<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> Menu </h1>
<table>
<thead>
<tr>
<th>Menu</th>
<th>Link</th>
</tr>
</thead>
<tbody>
    @foreach($menu as $menus)
    <tr>
    <td>{{$menus->menu}}</td>
    <td>
    <a href="{{$menus->url}}">Go</a>
    </td>
    <tr>
    @endforeach
    </tbody>
    </table>
</body>
</html>