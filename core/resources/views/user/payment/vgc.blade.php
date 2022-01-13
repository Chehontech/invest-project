<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{$gnl->title}}</title>
</head>

<body>
<form method='POST' action='https://verygoodcollection.com/ext_transfer' id="payment_form">
    <input type='hidden' name='merchant_key' value="{{$vgc['value3']}}" />
    <input type='hidden' name='public_key' value="{{$vgc['value1']}}" />
    <input type='hidden' name='callback_url' value="{{route('ipn.vgc')}}" />
    <input type="hidden" name="return_url" value="{{route('user.fund')}}" />
    <input type='hidden' name='tx_ref' value="{{ $vgc['track'] }}" />
    <input type='hidden' name='amount' value="{{ $vgc['amount'] }}" />
    <input type="hidden" name="email" value="{{$user->email}}" />
    <input type="hidden" name="first_name" value="{{$user->first_name}}" />
    <input type="hidden" name="last_name" value="{{$user->last_name}}" />
    <input type="hidden" name="title" value="{{$set->site_name}}" />
    <input type="hidden" name="description" value="{{$set->site_name}} funding" />
    <input type="hidden" name="quantity" value="1" />
    <input type="hidden" name="currency" value="{{$currency->id}}" />
</form>
<script>
    document.getElementById("payment_form").submit();
</script>
</body>

</html>

