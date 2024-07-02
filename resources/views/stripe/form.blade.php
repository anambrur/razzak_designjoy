<!DOCTYPE html>
<html>
<head>
    <title>Redirecting to Stripe</title>
</head>
<body>
    <form id="stripeForm" action="{{ route('stripe') }}" method="POST">
        @csrf
        <input type="hidden" name="price" value="{{ $price }}">
        <input type="hidden" name="productName" value="{{ $productName }}">
    </form>
    <script type="text/javascript">
        document.getElementById('stripeForm').submit();
    </script>
</body>
</html>
