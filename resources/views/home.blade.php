

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{app('Illuminate\Foundation\Vite')
        (['resources/css/app.css', 'resources/js/app.js']) 
    }}
</head>
<body>
    <div class="row">
        <div class="col-md-4">
            <button type="button" class="btn btn-primary w-100">Primary</button>
        </div>

        <div class="col-md-1">
            <a href="{{route('stocks.orders')}}" class="btn btn-secondary w-100">Orders</a>
        </div>

        <div class="col-md-7">
            <a href="{{route('stocks.portofolio')}}" class="btn btn-success w-100">Portofolio</a>
        </div>
    </div>



    <br>

    <h1>
        This is home
    </h1>

</body>
</html>