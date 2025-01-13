<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Edit Products</h1>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form action="{{ route('product.update',$product->id) }}" method="POST">
        @csrf
        @method('put')
        <div>
            <input type="text" name="name" placeholder="name" value="{{$product->name}}">
        </div>

        <div>
            <input type="text" name="qty" placeholder="qty" value="{{$product->qty}}">
        </div>
        <div>
            <input type="text" name="price" placeholder="Price" value="{{$product->price}}">
        </div>
        <div>
            <input type="text" name="description" placeholder="Description" value="{{$product->description}}">
        </div>
        <div>
            <input type="submit" value="Edit Product">
        </div>
    </form>
    <div>

</body>

</html>
