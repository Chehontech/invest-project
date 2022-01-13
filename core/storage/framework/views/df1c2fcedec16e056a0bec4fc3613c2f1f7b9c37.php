<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo e($gnl->title); ?></title>
</head>

<body>

<form method="POST" action="http://localhost/vgc/ext_transfer" >
    <input type="hidden" name="merchant_key" value="fr2M3GjLh5BYx7P4" />
    <input type="hidden" name="public_key" value="PUB-nDEYKEHIiamkzvtUAV61sbdl7sTN8QkN"/>
    <input type="hidden" name="callback_url" value="<?php echo e(route('ipn.boompay')); ?>" />
    <input type="hidden" name="return_url" value="<?php echo e(route('ipn.boompay')); ?>" />
    <input type="hidden" name="tx_ref" value="<?php echo e($boompay['track']); ?>" />
    <input type="hidden" name="amount" value="<?php echo e($boompay['amount']); ?>" />
    <input type="hidden" name="email" value="<?php echo e($user->email); ?>" />
    <input type="hidden" name="first_name" value="<?php echo e($user->first_name); ?>" />
    <input type="hidden" name="last_name" value="<?php echo e($user->last_name); ?>" />
    <input type="hidden" name="title" value="Payment For Item" />
    <input type="hidden" name="description" value="What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book it has?" />
    <input type="hidden" name="quantity" value="1" />
    <input type="hidden" name="currency" value="38" />
    <input type="submit" value="submit" />
</form>

</body>

</html>

<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/kingsmen/new/core/resources/views/user/payment/boompay.blade.php ENDPATH**/ ?>