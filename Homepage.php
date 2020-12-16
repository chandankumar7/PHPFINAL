<!DOCTYPE>
<html>

<head>
    <meta charset="utf-8">
    <title>Home page</title>
</head>
<style>
    header {
        background-image: url(Assets/bg-01.jpg);
    }
    
    body {
        padding: 0;
    }
    .label {
        margin-left: 20px;
        border-radius: 1em;
        border: none;
    }
    .search {
        margin-left: 15px;
        border-radius: 1em;
        font-family: sans-serif;
    }
    .cart {
        width: 70px;
        height: 70px;
        margin-left: 30px;
    }
    nav {
        width: 100%;
        /*        position: fixed;*/
        background: aqua;
        padding: 10px 0;
        text-align: center;
    }
    nav a {
        color: black;
        text-decoration: none;
        padding: 7px 25px;
        display: inline-block;
        height: 5px;
        padding-right: 100px;
    }
    a:link { /*Anchor Pseudo-classes*/
        color: red;
    }

    a:visited {   /* visited link */
        color: green;
    }
    a:hover {  /* mouse over link */
        color: hotpink;
    }
    a:active {  /* selected link */
        color: blue;
    }
    .text-center img {
        width: 50%;
        height: 50%;
    }
    .font1 {
        color: black;
        text-align: center;
        align-items: center;
        padding-left: 200px;
    }

    .font2 {
        padding-left: 375px;
    }

    .font3 {
        padding-left: 380px;
    }

    .font4 {
        padding-left: 180px;
    }

    .font5 {
        padding-left: 355px;

    }

    .font6 {
        padding-left: 370px;

    }

    .item1 {
        width: 30%;
        height: 50%;
        margin: 20px;
    }

    .item4 {
        width: 30%;
        height: 50%;
        margin: 10px;
    }

    /*-----------footer--------------*/
    #footer {
        background-image: linear-gradient(to right, #a517ba, blue);
        padding: 0;
        color: #fff;
    }

    .footer-box {
        padding: 20px;
    }

    hr {
        background-color: #fff;
    }

    .copyright {

        padding-bottom: 10px;
        text-align: center;
    }

    .bottomspace {
        margin-bottom: 20px;
    }

    span { /*Inherited properties*/
       
        color: black;
        font-size: 20px;
    }

.hed{
    text-align: center;
    color:black;
    font-size: 20px;
}

</style>

<body>
    <header>
         <div class="hed">WELCOME TO ECART</div>
        <img src="Assets/HomeLogo.png" width="100px" padding-left="10px">
        <input class="label" type="text" name="text" width="10px">
        <button class="search">Search</button>
        <img class="cart" src="Assets/Cartlogo.png">
        <button class="search" style="margin-left:100px">
        <a href="Login%20Page.html">Login</a> </button>
        <button class="search" style="margin-left:100px">Account</button><br><br>

    </header>


    <nav>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Products</a>
        <a href="#">Services</a>
        <a href="#">Contact Us</a>
    </nav>
    <img class="item1" src="HomeAssets/mes.jpg">
    <img class="item1" src="HomeAssets/photo-1576558345433-58e777a5e423.jpg">
    <img class="item1" src="HomeAssets/photo-1588063765533-8c50d519194b.jpg">

    <a class="font1" href="Men.html">Men</a>
    <a class="font2" href="Women.html">Women</a>
    <a class="font3" href="Baby.html">Baby</a>


    <img class=" item4" src="HomeAssets/electronics.jpg">
    <img class=" item1" src="Assets/sports/5.jpg">
    <img class=" item1" src="HomeAssets/booksjpg.jpg">


    <div class="bottomspace">
        <a class="font4" href="Electronics.html">Electronics</a>
        <a class="font5" href="Sports.html">Sports</a>
        <a class="font6" href="Books.html">Books</a>
    </div>

    <!-----------------------------------Footer Tag-------------------------------------------->
    <footer id="footer">
        <!----------------------id as a selector------------------------------------------->
        <div class="container">
            <div class="row">
                <div class="col-md-6 footer-box">
                    <p><b>CONTACT US </b></p>
                    <p> Phone no. +1 123456789</p>
                    <p> Email : xyz@gmail.com</p>
                </div>
            </div>
            <hr>
            <p class="copyright">Website crafted by Chandan kumar gupta | Copyright &copy; 2020 E-CommerceCGK.com</p>
        </div>
    </footer>


</body>

</html>
