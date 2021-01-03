<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@forelse ($books as $book)
    <li>{{ $book->name }}</li>
@empty
    no book
@endforelse


</body>
</html>