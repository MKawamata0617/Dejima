<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form action="{{ route('books.create.exec') }}" method="post">
    <label>名前</label>
    <input type="text" name="name">
    <p><button>保存</button></p>
</form>
</body>
</html>