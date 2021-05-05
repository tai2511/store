
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Store Project</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
</head>
<body>
    {{View::make('blocks.header')}}
    <div class="container">
        @yield('content')
    </div>
    
    
    {{View::make('blocks.footer')}}
    <script>
        $('.order').on('click',function(e){
            if($('.address').val() == ""){
                e.preventDefault();
                alert('Please add your address!')
            }
        })
    </script>
</body>
<style>
    ul li{
        list-style-type: none
    }
    a:link {
        text-decoration: none;
    }
    .quantity{
        max-width: 70px;
        padding: 5px
    }
    .img-product-cart{
        max-width: 100px;
    }
    .cart{
        position: relative;
    }
    .cart-total{
        position: absolute;
        top: -9px;
        right: -8px;
        font-size: 12px
    }
    .dropdown-menu{
        min-width: 100px;
    }
    .form{
        max-width: 350px;
        margin: 0 auto
    }
</style>
</html>