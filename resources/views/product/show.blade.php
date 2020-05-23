<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Products</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
        <div class="card" style="width: 18rem;">
          <img src="{{ $product->ImageLink }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $product->Name}}</h5>
            <p class="card-text">Rp. {{ number_format($product->Price,2,",",".") }}</p>
            <p class="btn btn-primary">{{ date('Y-M-d H:i:s', $product->CreatedAt) }}</a>
          </div>
        </div>
    </body>
</html>
