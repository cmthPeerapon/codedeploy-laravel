<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <ul>
            <li>ID: {{ $customer->id }}</li>
            <li>Name: {{ $customer->firstname }} {{ $customer->lastname }}</li>
        </ul>

        <p><a href="{{ route('customer.index') }}">Index</a></p>
    </body>
</html>
