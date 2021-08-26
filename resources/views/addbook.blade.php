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

        @include('layouts.sidebar')


        <div class="add-book feed">
            <h1>Add a book to your collection</h1>
            <div class="add-book">
                <form action="/feed.html/bookadded/{userid}" method="GET">
                    <input type="text" id="title" name="title" placeholder="Title">
                    <input type="text" id="author" name="author" placeholder="Author">
                    <input type="text" id="description" name="description" placeholder="Description">
                    <p>Add an image</p>
                    <input type="file" id="image" name="image">
                    <input type="submit" value="Add">
                </form>
            </div>

        </div>


    </div>

</body>
</html>
