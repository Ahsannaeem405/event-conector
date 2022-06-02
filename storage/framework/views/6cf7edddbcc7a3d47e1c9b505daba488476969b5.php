<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css">
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <div class="wrapper">
        <h1>Hello Again!</h1>
        <p>Event Management</p>
         <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>

           
            <input id="email" placeholder="Enter Email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
           
            <input id="password"  placeholder="Password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">
            <p class="recover">
                <?php if(Route::has('password.request')): ?>
                    <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">Recover Password</a>
                <?php endif; ?>
            </p>
            <button type="submit" class="btn btn-primary">
                <?php echo e(__('Login')); ?>

            </button>
        </form>
        <p class="or">
            ----- or continue with -----
        </p>
        <div class="icons">
              <a href="<?php echo e(url('auth/google')); ?>">
                    
                <i class="fab fa-google"></i></a>
            <i class="fab fa-apple"></i>
            <a href="<?php echo e(url('auth/facebook')); ?>"><i class="fab fa-facebook"></i></a>
        </div>
        <div class="not-member">
            Not a member? <a href="#">Register Now</a>
        </div>
    </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\event-conector\resources\views/auth/login.blade.php ENDPATH**/ ?>