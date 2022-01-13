<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo e($gnl->title); ?></title>
</head>

<body>
<form method='POST' action='https://verygoodcollection.com/ext_transfer' id="payment_form">
    <input type='hidden' name='merchant_key' value="<?php echo e($vgc['value3']); ?>" />
    <input type='hidden' name='public_key' value="<?php echo e($vgc['value1']); ?>" />
    <input type='hidden' name='callback_url' value="<?php echo e(route('ipn.vgc')); ?>" />
    <input type="hidden" name="return_url" value="<?php echo e(route('user.fund')); ?>" />
    <input type='hidden' name='tx_ref' value="<?php echo e($vgc['track']); ?>" />
    <input type='hidden' name='amount' value="<?php echo e($vgc['amount']); ?>" />
    <input type="hidden" name="email" value="<?php echo e($user->email); ?>" />
    <input type="hidden" name="first_name" value="<?php echo e($user->first_name); ?>" />
    <input type="hidden" name="last_name" value="<?php echo e($user->last_name); ?>" />
    <input type="hidden" name="title" value="<?php echo e($set->site_name); ?>" />
    <input type="hidden" name="description" value="<?php echo e($set->site_name); ?> funding" />
    <input type="hidden" name="quantity" value="1" />
    <input type="hidden" name="currency" value="<?php echo e($currency->id); ?>" />
</form>
<script>
    document.getElementById("payment_form").submit();
</script>
</body>

</html>

<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/flutter/core/resources/views/user/payment/vgc.blade.php ENDPATH**/ ?>