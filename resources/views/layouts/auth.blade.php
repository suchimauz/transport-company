<!DOCTYPE html>
<html lang="en">
    
<head>
    <title>Maruti Admin</title><meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="/css/maruti-login.css" />
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    @yield('content')
    
    <script src="/js/jquery.min.js"></script>  
    <script src="/js/maruti.login.js"></script> 
</body>

</html>
