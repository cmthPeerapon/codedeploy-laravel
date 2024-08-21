<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <table>
            <tr><th>ID</th><th>name</th></tr>
            @foreach ($customers as $customer)
                <tr>
                    <td><a href="{{ route('customer.show', ['id' => $customer->id]) }}">{{ $customer->id }}</a></td>
                    <td>{{ $customer->firstname }} {{ $customer->lastname }}</td>
                </tr>
            @endforeach
        </table>
    </body>
</html>
