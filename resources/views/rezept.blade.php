<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rezepte</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <div>
                <div>
                    <img  style="transform: rotate(355deg);border-color: orange;border-radius: 30;border-style: solid;width:400px;height:300px;margin: 50px;float:left;" src="..\pics\rezepte\{{ $rezept->id }}.jpg" alt="" >
                </div>
                <div class="title m-b-md" style="">
                    {{ $rezept->titel }}
                </div>
            </div>
            <div>
                {{ $rezept->text }}
            </div>
            <div>
                <a href="http://www.cookit.de/rezepte">Zurück</a>
            </div>
        </div>
        
    </body>
</html>
