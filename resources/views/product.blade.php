<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Products </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-lg-10 mx-auto">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $key=>$product)
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$product->title}}</td>
                        <td>${{$product->price}}</td>
                        <td><a href="" class="btn btn-success btn-sm">Delete</a></td>
                    </tr>
                @endforeach
                <tr>
                    <td></td>
                    <td></td>
                    <td> Total : ${{$products->sum('price')}}</td>
                    <td></td>
                </tr>
                </tbody>
            </table>
            <h3></h3>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</body>
</html>
