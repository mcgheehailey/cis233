<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Musicians</title>
    <link rel="stylesheet" href="/css/global.css" />
</head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>
    <h1>Musicians: </h1>
   
<table>
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Instrument</th>
    <th>Website</th>
  </tr>
  @foreach ($musicians as $musician)
  <tr>
    <th>{{$musician->first_name}}</th>
    <th>{{$musician->last_name}}</th>
    <th>{{$musician->instrument}}</th>
    <th>{{$musician->website}}</th>
  </tr>
  @endforeach
</table>

</body>
</html>