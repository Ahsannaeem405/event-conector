<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="./css/login.css">
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    

<body>
    <div class="wrapper">
        <h1>Welcome!</h1>
        <p>Event Management</p>
        <form method="POST" action="<?php echo e(route('register')); ?>">
            <?php echo csrf_field(); ?>
           
            <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus placeholder="Enter Your Name">

                               
            <input type="text" placeholder="Enter Your Number" name="phone">
            <input type="text" placeholder="Enter Your Address"  name="address">



            <input  type="email" placeholder="Enter Your Email" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>

            
            <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password" placeholder="Enter Your New Password">

           
           <input id="password-confirm" placeholder="Confirm password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

        <button type="submit" class="btn btn-primary">
            <?php echo e(__('Register')); ?>

        </button>
        </form>
        <p class="or">
            ----- or continue with -----
        </p>
        <div class="icons">
            <a href="<?php echo e(url('auth/google')); ?>">
                    
                <i class="fab fa-google"></i></a>
             <a href="<?php echo e(url('auth/facebook')); ?>"><i class="fab fa-facebook"></i></a>
        </div>
        <div class="not-member">
            Already have account? <a href="#">Login Now</a>
        </div>
    </div>
</body>


    <!-- aos animaitons -->
    
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


    <script>
        <?php if(Session::has('success')): ?>
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("<?php echo e(session('success')); ?>");
        <?php endif; ?>

            <?php if(Session::has('info')): ?>
            toastr.options = {
               
                "progressBar": true
            }
            toastr.info("<?php echo e(session('info')); ?>");
        <?php endif; ?>

        <?php if($errors->any()): ?>
            toastr.options = {
                
                "progressBar": true
            }
           
             <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              toastr.error("<?php echo e($error); ?>");
         
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

        <?php if(Session::has('warning')): ?>
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.warning("<?php echo e(session('warning')); ?>");
        <?php endif; ?>
        $(document).ready(function(){
   
});
    </script>

</html><?php /**PATH C:\xampp\htdocs\event-conector\resources\views/auth/register.blade.php ENDPATH**/ ?>