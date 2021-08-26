<!DOCTYPE html>
<html lang="en">

    <head>
        <!--
        <div class="img-area">
            <img src="C:\Laravel Projects\profile\public\img\Photo-by-Alfons-Morales-on-Unsplash-scaled-1535x900.jpg">
        </img>
    </div>
    -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <style>
        body{
            background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(/img/lib.jpg);
            height:1500px;

        }
        #top_bar{
            height: 50px;
            width: 1510px;
            background-color:#000000;
            color: #d9dfeb;
            margin-left: 0px;
            margin-top: -30px;
        }
        .img-area{
            filter: blur(6px);
            -webkit-filter: blur(6px);
        }
        #profile_pic{
            width: 150px;
            margin-top: -200px;
            border-radius: 50%;
            border: solid 2px white;
            margin-left: -750px;
            overflow: hidden;

        }

        body{
            font-family:Arial, Helvetica, sans-serif;
            background-color:#fafafa;
            padding: 20px;
        }
        .combo{
            padding:10px;
        }
        .navigationList{
            list-style: none;
            display: flex;
            justify-content: center;
            border-top:1px solid black;
            margin-bottom: -200px;

        }
        .navigationItem_Icon_add {
            margin-left: 1200px;
            padding-bottom: 3px;
            align-items:center;
            background-position: right;
        }
        .navigationItem_Icon {
            margin-right: 0px;
            align-items: center;
        }
        .navigationItem.active::before{
            content: '';
            position: absolute;
            height: 1px;
            width: 100%;
            background-color: #000;
            top: -1px;
            right: 0;
            margin: auto;
            align-items: center;
        }
        .navigationItem.active .navigationItem_Text {
            color: #000;

        }
        .navigationItem_Icon{
            margin-right: 15px;
            width: 12px;
            height: 12px;
            align-items: center;
        }

        .navigationItem.active .navigationItem_Icon path {
            color: #000;
            align-items: center;

        }
        .navigationItem {
            /*font-weight: bold;*/
            display: flex;
            margin-right: 50px;
            position: relative;
            align-items: center;

        }
        .navigationItem_Text{
            font-weight: bold;
            font-size:15px;
            color: #000000;
            letter-spacing: 0.7px;
            align-items: center;

        }
        .photosGrid{
            display: flex;
            flex-wrap:wrap ;
            justify-content: space-between;
        }
        .photosGrid_Photo{
            width: 30%;
            min-height: 22vw;
            background-position: center;
            background-size: cover;
            margin-bottom: 8px;
        }
        .navigationItem_Button{
            border: none;
            background: transparent;
            appearance: none;
            -webkit-appearance: none;
            padding: 20px 0;
        }


        button:hover{
            transform: scale(1.1);
        }


.box{
box-sizing: border-box;
width: 153px;
height: 153px;
border:2px solid  rgb(204, 85, 38);;
box-shadow: -3px -3px 7px #ffffff73,
3px 3px 5px rgba(94,104,121,0.288);
border-radius: 50%;
background-color: black;
margin-top: 50px;
overflow: hidden;
transition: all 1s;
align-items: center;
}
.box:hover{
width: 360px;
height: 500px;
border-radius: 5px;
align-items: center;
}
#set{
box-sizing: border-box;
width:149px;
height:149px;
border-radius:50%;
margin:0;
border:5px solid  rgb(204, 85, 38);;
padding: 20px;
background-color: white;
overflow: hidden;
transition: all 1s;
align-items: center;

}
.box:hover #set{
width: 100px;
height: 100px;
margin:20px 35% ;
}
#usernammeField{
    align-items: center;
}
#Add_btn{
border:1px solid  rgb(204, 85, 38);;
background-color: black;
color:white;
height: 30px;
width: 100px;
border-radius: 5px;
align-items: center;
margin-left: 130px;
margin-top: 10px;
transition: all .3s;
}

.usernameField{
    position: relative;
    border: 2px;
    border-radius: 30%;
    align-items: center;
    background-color: black;
    color: white;
    justify-content: center;
    margin-right: -600px;
    font-family:'Fredoka One';
    height: 50px;
}
input[type="file"]{
display:none;
}
label{
box-sizing: border-box;
width:40px;
height:20px;
background-color: black;
color:white;
border:1px solid  rgb(204, 85, 38);;
background-color: black;
color:white;
padding: 4px;
border-radius: 2px;
margin-left: 150px;

}
label:hover{
background-color:  rgba(204, 85, 38, 0.767);;
transform: scale(1.1);
}
#pics{

    left: 320px;
    margin-left: 20px;
    height: 100%;
    width: 20cm;
    background-color: rgba(0, 0, 0, 0.603);
    padding: 40px;
    margin: auto;
    bottom: auto;
    overflow: scroll;
}
.image{
    grid-column: 1;
}
.description{
    grid-column: 2;
    text-decoration: none;
    font-size: 17px;
    padding: 20px;
}
    </style>
      <main>
        <body>
            <div id="top_bar">
                <div style="width: 800px; margin: auto;font-size: 30px; font-family:'Fredoka One', cursive;">
                    <a href="/feed.html/{{$user[0]->id}}">Kotobly</a>
                </div>

                <div style="justify-content: center;">


                    <input class="usernameField"id="usernameField" name = "usernameField"type="text" placeholder="{{$user[0]->username}}" style=" border: none; text-align: center; margin-right: -600; justify-content: center;" readonly="readonly">

                    <br>
                    <div class="box">
                        <form action="/profile.html" method="POST" enctype="multipart/form-data">
                            @csrf
                        <img id="set" src="{{$user[0]->image_path}}">
                        {{-- {{ asset('image/' . $user->image_path) }} --}}
                        <input id="Change_profile_pic" type="file" class="my_file" name="image">
                        <label for="Change_profile_pic">Edit pic</label>
                       <br>

                       <p>Book Cover</p>
                       <input type="file" name="bookimage" id="bookimage" class="my_file">
                       <label for="Change_profile_pic">Add Book</label>
                       <p>Title</p>
                       <input type="text" name="title" id="title" placeholder="Enter Title" class="my_file">
                       <p>Genre</p>
                       <input type="text" name="genre" id="genre" placeholder="Enter Genre" class="my_file">
                       <p>Description</p>
                       <input type="text" name="description" id="description" placeholder="Enter Description" class="my_file">
                       <input type="submit" name="submit" id="submit" value="Add"><br>

                       {{-- <input id="Add_btn" type="file" class="my_file" name="book">
                       <label for="Add_btn">Add Book</label> --}}
                        </form>
                        <!--ComboBox
                <br>
                        <select class="combo">
                            <option>Aboueir</option>
                            <option>El Maamora</option>
                            <option>Al Montaza</option>
                            <option>El Mandara</option>
                            <option>Sidi Bishr</option>
                            <option>Miami</option>
                            <option>El Seyouf</option>
                            <option>Victorya</option>
                            <option>Saraya</option>
                            <option>Louran</option>
                            <option>Tharwat</option>
                            <option>San Stefano</option>
                            <option>Zezenia</option>
                            <option>Janakleees</option>
                            <option>Glim</option>
                            <option>Hedaya</option>
                            <option>Bakoos</option>
                            <option>Bolkly</option>
                            <option>Fleming</option>
                            <option>Roushdy</option>
                            <option>Kafr Abdo</option>
                            <option>Kiroseez</option>
                            <option>Sidi Gaber</option>
                            <option>Smouha</option>
                            <option>Ezbet Saad</option>
                            <option>Ibrahimeya</option>
                            <option>Wardeyan</option>
                            <option>Sporting</option>
                            <option>El Ibrahimeya</option>
                            <option>Azarita</option>
                            <option>Waboor al maya</option>
                            <option>Saba Basha</option>
                            <option>Shatby</option>
                            <option>Camp Chezar</option>
                            <option>Mehatet Al Raml</option>
                            <option>El Mansheya</option>
                            <option>Bahary</option>
                            <option>Moharam Bek</option>
                            <option>Downtown</option>
                        -->

                    </div>
                    <br>

                    <div id="pics">
                    <section class="photosGrid">
                        <a
                        href="#"
                        title="The Interpretation of Murder"
                        class="photosGrid_Photo"
                     style="background-image: url('https://03fcd67fd51850d3ba6b-6cb392df11a341bce8c76b1898d0c030.ssl.cf3.rackcdn.com/large/9780/7553/9780755331420.jpg')"
                     ></a>
                     <a
                     href="#"
                     title="Caraval"
                     class="photosGrid_Photo"
                  style="background-image: url('https://4.bp.blogspot.com/-4ulR08qzsIs/WIi38xFaQNI/AAAAAAAAPZ8/BvD2iohZ548A7goTvi0mLhO9WPG2aCqcwCLcB/s1600/caraval-uk.jpg')"
                  ></a>
                  <a
                  href="#"
                  title="To Kill a Mokingbird"
                  class="photosGrid_Photo"
                style="background-image: url('https://cdn.penguin.com.au/covers/original/9781784752637.jpg')"
                ></a>
                <a
                href="#"
                title="Percy Jackson"
                class="photosGrid_Photo"
                style="background-image: url('https://s3.amazonaws.com/brisk-listing-resized/1000x/MSGCO8MNKO-1524369060.jpg')"
                ></a>
                <a
                href="#"
                title="Tales of Mystery and Madness"
                class="photosGrid_Photo"
                style="background-image: url('http://d28hgpri8am2if.cloudfront.net/book_images/cvr9780689848377_9780689848377_hr.jpg')"
                ></a>
                <a
                href="#"
                title="The Bazaar of bad dreams"
                class="photosGrid_Photo"
                style="background-image: url('https://www.scifinow.co.uk/wp-content/uploads/2015/11/Bazaar-of-bad-dreams-stephen-king.jpg')"
                ></a>
                    </section>


                    </div>
</main>
</body>
</html>
