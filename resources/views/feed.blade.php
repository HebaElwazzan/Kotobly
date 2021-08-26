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


        <div class="feed">
            <div class="book">
                <img src="/img/book1.jpg" alt="Gone girl" width="163" height="250" class="image">
                <p class="description">
                   Gone Girl<br>
                   Set in Missouri, the story is a postmodern
                   mystery that follows the events surrounding Nick Dunne
                  , who becomes the prime suspect in the sudden
                  disappearance of his wife Amy.<br><br><br>
                  <a href="#"class="button">Buy/Rent</a>
                </p>
            </div>
            <div class="book">
                <img src="/img/book2.jpg" alt="Girl on the train" width="163" height="250" class="image">
                <p class="description">
                    The Girl on the train<br>
                    Rachel takes the same commuter train every morning and night.
                     Every day she rattles down the track, flashes past a stretch of cozy suburban homes,
                     and stops at the signal that allows her to daily watch the same couple breakfasting on their deck.
                     She’s even started to feel like she knows them. Jess and Jason, she calls them.
                     Their life—as she sees it—is perfect. Not unlike the life she recently lost.<br><br><br>
                   <a href="#"class="button">Buy/Rent</a>
                 </p>

            </div>
        </div>


    </div>

</body>
</html>
