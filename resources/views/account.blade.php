<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body{
            font-family: 'Poppins', sans-serif;
        }
        
        .navbar
        {
            display: flex;
            align-items: center;
            padding: 20px;
        }
        
        nav{
            flex: 1;
            text-align: right;
        }
        nav ul{
            display: inline-block;
            list-style-type: none;
        }
        nav ul li{
            display: inline-block;
            margin-right: 20px;
        }
        a{
            text-decoration: none;
            color: #555;
        }
        p{
            color: #555;
        }
        .container{
            max-width: 1300px;
            margin: auto;
            padding-left: 25px;
            padding-right: 25px;
        }
        .row{
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .col-2{
            flex-basis: 50%;
            min-width: 300px;
        }
        .col-2 img{
            max-width: 100%;
            padding: 50px 0;
        }
        .col-2 h1{
            font-size: 50px;
            line-height: 60px;
            margin: 25px 0;
        }
        .btn{
            display: inline-block;
            background: #ff523b;
            color: white;
            padding: 8px 30px;
            margin: 30px 0;
            border-radius: 30px;
            transition: background 0.5s;
        }
        .btn:hover{
            background: #563434;
        }
        .header{
            background: radial-gradient(#fff,#ffd6d6);
        }
        .header .row{
            margin-top: 70px;
        }
        .categories{
            margin: 70px 0;
        }
        .col-3{
            flex-basis: 30%;
            min-width: 250px;
            margin-bottom: 30px;
        }
        .col-3 img{
            width: 100%;
        }
        .small-container{
            max-width: 1080px;
            margin: auto;
            padding-left: 25px;
            padding-right: 25px;
        }
        .col-4{
            flex-basis: 25%;
            padding: 10px;
            min-width: 200px;
            margin-bottom: 50px;
            transition: transform 0.5s;
        }
        .col-4 img{
            width: 100%;
        }
        .title{
            text-align: center;
            margin: 0 auto 80px;
            position: relative;
            line-height: 60px;
            color: #555;
        }
        .title::after{
            content: '';
            background: #ff523b;
            width: 80px;
            height: 5px;
            border-radius: 5px;
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }
        h4{
            color: #555;
            font-weight: normal;
        }
        .col-4 p{
            font-size: 14px;
        }
        .rating .fa{
            color: #ff523b;
        }
        .col-4:hover{
            transform: translateY(-5px);
        }
        /* Offer */
        .offer{
            background: radial-gradient(#fff, #ffd6d6);
            margin-top: 80px;
            padding: 30px 0;
        }
        .col-2 .offer-img{
            padding: 50px;
        }
        small{
            color: #555;
        }
        
        /* Testimonial */
        .testimonial{
            margin-top: 100px;
        }
        .testimonial .col-3{
            text-align: center;
            padding: 40px 20px;
            box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: transform 0.5s;
        }
        .testimonial .col-3 img{
            width: 50px;
            margin-top: 20px;
            border-radius: 50%;
        }
        .testimonial .col-3:hover{
            transform: translateY(-10px);
        }
        .fa.fa-quote-left{
            font-size: 34px;
            color: #ff523b;
        }
        .col-3 p{
            font-size: 12px;
            margin: 12px 0;
            color: #777;
        }
        .testimonial .col-3 h3{
            font-weight: 600;
            color: #555;
            font-size: 16px;
        }
        /* Brands */
        .brands{
            margin: 100px auto;
        }
        .col-5{
            width: 160px;
        }
        .col-5 img{
            width: 100%;
            cursor: pointer;
            filter: grayscale(100%);
        }
        .col-5 img:hover{
            filter: grayscale(0);
        }
        /* Footer */
        .footer{
            background: black;
            color: #8a8a8a;
            font-size: 14px;
            padding: 60px 0 20px;
        }
        .footer p{
            color: #8a8a8a;
        }
        .footer h3{
            color: #fff;
            margin-bottom: 20px;
        }
        .footer-col-1, .footer-col-2, .footer-col-3, .footer-col-4{
            min-width: 250px;
            margin-bottom: 20px;
        }
        .footer-col-1{
            flex-basis: 30%;
        }
        .footer-col-2{
            flex: 1;
            text-align: center;
        }
        .footer-col-2 img{
            width: 180px;
            margin-bottom: 20px;
        }
        .footer-col-3, .footer-col-4{
            flex-basis: 12%;
            text-align: center;
        }
        ul{
            list-style-type: none;
        }
        .app-logo{
            margin-top: 20px;
        }
        .app-logo img{
            width: 140px;
        }
        .footer hr{
            border: none;
            background: #b5b5b5;
            height: 1px;
            margin: 20px 0;
        }
        .copyright{
            text-align: center;
        }
        .menu-icon{
            width: 28px;
            margin-left: 20px;
            display: none;
        }
        
        /* All Products */
        .row-2{
            justify-content: space-between;
            margin: 100px auto 50px;
        }
        select{
            border: 1px solid #ff523b;
            padding: 5px;
        }
        select:focus{
            outline: none;
        }
        .page-btn{
            margin: 0 auto 80px;
        }
        .page-btn span{
            display: inline-block;
            border: 1px solid #ff523b;
            margin-left: 10px;
            width: 40px;
            height: 40px;
            text-align: center;
            line-height: 40px;
            cursor: pointer;
        }
        .page-btn span:hover{
            background: #ff523b;
            color: white;
        }
        
        /* Single Product */
        .single-product{
            margin-top: 80px;
        }
        .single-product .col-2 img{
            padding: 0;
        }
        .single-product .col-2{
            padding: 20px;
        }
        .single-product h4{
            margin: 20px 0;
            font-size: 22px;
            font-weight: bold;
        }
        .single-product select{
            display: block;
            padding: 10px;
            margin-top: 20px;
        }
        .single-product input{
            width: 50px;
            height: 40px;
            padding-left: 10px;
            font-size: 20px;
            margin-left: 10px;
            border: 1px solid #ff523b;
            margin-right: 10px;
        }
        input:focus{
            outline: none;
        }
        .single-product .fa{
            color: #ff523b;
            margin-left: 10px;
        }
        .small-img-row{
            display: flex;
            justify-content: space-between;
        }
        .small-img-col{
            flex-basis: 24%;
            cursor: pointer;
        }
        
        /* Cart Items */
        .cart-page{
            margin: 80px auto;
        }
        table{
            width: 100%;
            border-collapse: collapse;
        }
        .cart-info{
            display: flex;
            flex-wrap: wrap;
        }
        th{
            text-align: left;
            padding: 5px;
            color: #fff;
            background: #ff523b;
            font-weight: normal;
        }
        td{
            padding: 10px 5px;
        }
        td input{
            width: 40px;
            height: 30px;
            padding: 5px;
        }
        td a{
            color: #ff523b;
            font-size: 12px;
        }
        td img{
            width: 80px;
            height: 80px;
            margin-right: 10px;
        }
        .total-price{
            display: flex;
            justify-content: flex-end;
        }
        .total-price table{
            border-top: 3px solid #ff523b;
            width: 100%;
            max-width: 400px;
        }
        td:last-child{
            text-align: right;
        }
        th:last-child{
            text-align: right;
        }
        
        /* Account page */
        .account-page{
            padding: 50px 0;
            background: radial-gradient(#fff, #ffd6d6);
        }
        .form-container{
            background: #fff;
            width: 300px;
            height: 400px;
            position: relative;
            text-align: center;
            padding: 20px 0;
            margin: auto;
            box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .form-container span{
            font-weight: bold;
            padding: 0 10px;
            color: #555;
            cursor: pointer;
            width: 100px;
            display: inline-block;
        }
        .form-btn{
            display: inline-block;
        }
        .form-container form{
            max-width: 300px;
            padding: 0 20px;
            position: absolute;
            top: 130px;
            transition: transform 1s;
        }
        form input{
            width: 100%;
            height: 30px;
            margin: 10px 0;
            padding: 0 10px;
            border: 1px solid #ccc;
        }
        form .btn{
            width: 100%;
            border: none;
            cursor: pointer;
            margin: 10px 0;
        }
        form .btn:focus{
            outline: none;
        }
        #LoginForm{
            left: 0;
        }
        #RegForm{
            left: -300px;
        }
        form a{
            font-size: 12px;
        }
        #Indicator{
            width: 100px;
            border: none;
            background: #ff523b;
            height: 3px;
            margin-top: 8px;
            transform: translateX(100px);
            transition: transform 1s;
        }
        
        .leftcolumn{
            width: 75%;
            float: left;
        }
        
        .rightcolumn{
            width: 25%;
            float: right;
        }
        
        /* Media query for menu */
        @media only screen and (max-width: 800px){
        
            nav ul{
                position: absolute;
                top: 70px;
                left: 0;
                background: #333;
                width: 100%;
                overflow: hidden;
                transition: max-height 0.5s;
            }
            nav ul li{
                display: block;
                margin-right: 50px;
                margin-top: 10px;
                margin-bottom: 10px;
            }
            nav ul li a{
                color: white;
            }
            .menu-icon{
                display: block;
                cursor: pointer;
            }
        }
        
        /* Media query for 600 screen size */
        @media only screen and (max-width: 600px){
        
            .row{
                text-align: center;
            }
            .col-2, .col-3, .col-4{
                flex-basis: 100%;
            }
            .single-product .row{
                text-align: left;
            }
            .single-product .col-2{
                padding: 20px 0;
            }
            .single-product h1{
                font-size: 26px;
                line-height: 32px;
            }
            .cart-info p{
                display: none;
            }
        }
        </style>
</head>
<body>
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="{{ asset('images/image1.png')}}" width="50%">
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="register()">Register</span>
                            <span onclick="login()">Login</span>
                            <hr id="Indicator">
                        </div>
                        <form id="LoginForm" action="/users" method="GET">
                            @csrf
                            <input type="text" name="uname" placeholder="Email">
                            <input type="password" name="pass" placeholder="Password">
                            <button type="submit" class="btn">Login</button>
                            <a href="">Forget Password</a>
                        </form>

                        <form id="RegForm" action="/users" method="POST">
                            @csrf
                            <input type="text" name="uname" placeholder="Username" required>
                            <input type="email" name="email" placeholder="Email">
                            <input type="text" name="mobile" placeholder="Mobile No.">
                            <input type="password" name="pass" placeholder="Password" required>
                            <button type="submit" class="btn">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and ios mobile phone.</p>
                    <div class="app-logo">
                        <img src="{{ asset('images/play-store.png')}}">
                        <img src="{{ asset('images/app-store.png')}}">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="{{ asset('images/logo-white.png')}}">
                    <p>Our Purpose Is To Sustainably Make the Pleasure and Benefits of Sports Accessible to the Many.
                    </p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2020 - Samwit Adhikary</p>
        </div>
    </div>

    

    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";
        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px"
            }
            else {
                MenuItems.style.maxHeight = "0px"
            }
        }
    </script>

    <!-- Toggle Form -->
    <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("Indicator");
        function register() {
            RegForm.style.transform = "translatex(300px)";
            LoginForm.style.transform = "translatex(300px)";
            Indicator.style.transform = "translateX(0px)";

        }
        function login() {
            RegForm.style.transform = "translatex(0px)";
            LoginForm.style.transform = "translatex(0px)";
            Indicator.style.transform = "translate(100px)";

        }
    </script>

</body>

</html>
