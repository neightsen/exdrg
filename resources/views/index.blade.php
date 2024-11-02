<!-- resources/views/products.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <h1>Products</h1>
        @foreach ($products as $product)
            <h3>Название:  {{ $product['name'] }}</h3>
            <p>Количество: {{ $product['amount'] }}</p>
            <p>Цена: {{ $product['cost'] }} руб.</p>
        @endforeach
</body>
</html>
