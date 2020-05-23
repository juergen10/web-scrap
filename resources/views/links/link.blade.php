<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
         <form class="" action="/link/scrap" method="post">
             {{ csrf_field() }}
             <input type="text" name="link" required value="">
             <button type="submit" name="button">Scrap!</button>
         </form>
    </body>
</html>
