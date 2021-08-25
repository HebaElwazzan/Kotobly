<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kotobly</title>
    <link rel="stylesheet" href="/css/style.css">
</head>


<body>

    <div class="container">

    <header>
        <img src="/img/book-white.png" alt="logo">
     </header>

    <nav>
        <a href="homepage.html">HOME</a>
        <a href="about.html">ABOUT</a>
        <a href="login.html">LOGIN</a>
        <a href="contact.html">CONTACT</a>
    </nav>

    <link rel="homepage" href="/resources/views/homepage.html">

    @yield('content')

    <footer>
        <br><br><br><br><br><br>
        <p>all rights are reserved</p>
    </footer>


    </div>

</body>

</html>
