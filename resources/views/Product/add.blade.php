<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Add Products</h1>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        @method('post')
        <div>
            <input type="text" name="name" placeholder="name">
        </div>

        <div>
            <input type="text" name="qty" placeholder="qty">
        </div>
        <div>
            <input type="text" name="price" placeholder="Price">
        </div>
        <div>
            <input type="text" name="description" placeholder="Description">
        </div>
        <div>
            <input type="submit" value="Add Product">
        </div>
    </form>
    <div>

</body>

</html>
