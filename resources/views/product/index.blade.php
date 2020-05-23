<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Products</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Image</th>
              <th scope="col">Name</th>
              <th scope="col">Price</th>
              <th scope="col">Date</th>
            </tr>
          </thead>
          <tbody>
              @forelse ($products as $product)
              <tr>
                  <th scope="row">{{ $product->ID }}</th>
                  <td>
                      <img src="{{ $product->ImageLink }}" alt="">
                  </td>
                  <td>
                      <a href="{{ $product->path() }}">{{ $product->Name }}</a>
                  </td>
                  <td>Rp. {{ number_format($product->Price,2,",",".") }}</td>
                  <td>{{ date('Y-M-d H:i:s', $product->CreatedAt) }}</td>
              </tr>
            @empty
            <li>No products yet.</li>
            @endforelse
          </tbody>
        </table>
    </body>
</html>
