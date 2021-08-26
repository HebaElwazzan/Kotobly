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

        <div class="sidebar">
            <header>Kotobly</header>
         <ul>
             <li><a href="#">Search</a></li>
             <li><a href="/profile.html/{{$id}}">My profile</a></li>
             <li><a href="/addbook.html/{{$id}}">Post</a></li>
             <li><a href="/login.html">Log out</a></li>
         </ul>
        </div>


        <div class="add-book feed">
            <h1>Add a book to your collection</h1>
            <form action="feed"></form>
        </div>


    </div>

</body>
</html>
