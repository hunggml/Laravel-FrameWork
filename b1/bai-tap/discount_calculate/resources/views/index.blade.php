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
<form action="/result" method="post">
    @csrf
    <input type="text" name="productDescription" placeholder="productDescription">
    <input type="number" name="listPrice" placeholder="listPrice">
    <input type="number" name="discountPercent" placeholder="discountPercent">
    <button type="submit">calculate</button>
</form>
</body>
</html>
