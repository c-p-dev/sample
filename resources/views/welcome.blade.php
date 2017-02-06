<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }
            @font-face {

            }
            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
                color: red;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
            body{
                background-color: #171616;
            }
            ul{

                list-style: none;
            }
            p{
                color: #fff;
                font-family: myFirstFont;
              -webkit-animation: neon1 1.5s ease-in-out infinite alternate;
              -moz-animation: neon1 1.5s ease-in-out infinite alternate;
              animation: neon1 1.5s ease-in-out infinite alternate;
            }


            @-webkit-keyframes neon1 {
              from {
                text-shadow: 0 0 20px #fff, 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #FF1177, 0 0 70px #FF1177, 0 0 80px #FF1177, 0 0 100px #FF1177, 0 0 150px #FF1177;
              }
              to {
                text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #fff, 0 0 20px #FF1177, 0 0 35px #FF1177, 0 0 40px #FF1177, 0 0 50px #FF1177, 0 0 75px #FF1177;
              }
            }

            @-webkit-keyframes neon2 {
              from {
                text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #228DFF, 0 0 70px #228DFF, 0 0 80px #228DFF, 0 0 100px #228DFF, 0 0 150px #228DFF;
              }
              to {
                text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #fff, 0 0 20px #228DFF, 0 0 35px #228DFF, 0 0 40px #228DFF, 0 0 50px #228DFF, 0 0 75px #228DFF;
              }
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <nav>
                    <ul>
                        <li>Home</li>
                        <li>Projects</li>
                        <li>About Us</li>
                        <li>Contact</li>
                    </ul>
                </nav>
                <div class="title"><p>Me</p></div>

            </div>
        </div>
    </body>
</html>
