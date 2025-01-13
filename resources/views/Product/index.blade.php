<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    This is the Index Page
    <div>
        @if (session()->has('success'))
            <h3>{{session('success')}}</h3>
        @endif
    </div>
    <table>
        <tr>
            <th>Name</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Description</th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->qty}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->description}}</td>
            <td><a href="{{route('product.edit',$product->id)}}">Edit</a></td>
            <td>
                <form action="{{route('product-destroy',$product->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
        
    </table>

</body>

</html>
