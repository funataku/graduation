<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('assets/favicon.ico',true)); ?>">

    <title>Share House Hoppers</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--<link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">-->
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <!--<div class="navbar-header">-->
                     <!--Image and text -->
                    
                <!--      <a class="navbar-brand" href="<?php echo e(url('/')); ?>">-->
                <!--        <img src="/docs/4.3/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">-->
                <!--        Share House Hoppers-->
                <!--      </a>-->
                    
                    <!--Branding Image -->
                    <!--<a class="navbar-brand" href="<?php echo e(url('/')); ?>">-->
                    <!--    <?php echo e(config('app.name', 'Laravel')); ?>-->
                    <!--</a>-->
                <!--</div>-->

                <!--<div class="collapse navbar-collapse" id="app-navbar-collapse">-->
                     <!--Left Side Of Navbar -->
                <!--    <ul class="nav navbar-nav">-->
                <!--        &nbsp;-->
                <!--    </ul>-->

                     <!--Right Side Of Navbar -->
                <!--    <ul class="nav navbar-nav navbar-right">-->
                         <!--Authentication Links -->
                <!--        <?php if(auth()->guard()->guest()): ?>-->
                <!--            <li><a href="<?php echo e(route('login')); ?>">Login</a></li>-->
                <!--            <li><a href="<?php echo e(route('register')); ?>">Register</a></li>-->
                <!--        <?php else: ?>-->
                <!--            <li class="dropdown">-->
                <!--                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>-->
                <!--                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>-->
                <!--                </a>-->

                <!--                <ul class="dropdown-menu">-->
                <!--                    <li>-->
                <!--                        <a href="<?php echo e(route('logout')); ?>"-->
                <!--                            onclick="event.preventDefault();-->
                <!--                                     document.getElementById('logout-form').submit();">-->
                <!--                            Logout-->
                <!--                        </a>-->

                <!--                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">-->
                <!--                            <?php echo e(csrf_field()); ?>-->
                <!--                        </form>-->
                <!--                    </li>-->
                <!--                </ul>-->
                <!--            </li>-->
                <!--        <?php endif; ?>-->
                <!--    </ul>-->
                <!--</div>-->
            </div>
        </nav>

        <?php echo $__env->yieldContent('content'); ?>
    </div>

     <!--Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html>
