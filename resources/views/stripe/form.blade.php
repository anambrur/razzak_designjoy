<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment</title>
</head>

<body>

    <h2> Product: Mobile Phone</h2>
    <h3> Price: $25</h3>
    <form action="{{ route('stripe') }}" method="post">
        @csrf
        <input type="hidden" name="price" value="25">
        <button type="submit">Pay with Stripe</button>
    </form>
</body>

</html>
