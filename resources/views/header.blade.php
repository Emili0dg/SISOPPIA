<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

    <style>
        .desplegable{
            background-color: black;
            width: 50%;
            height: 100vh;
            position:fixed;
            left: -100%;
            transition: 1s;
            z-index: 99999;
        }

        .desplegable-on{
            left: 0;
        }

        .header{
            position: fixed;
            padding: 1vw;
            padding-left: 1.5vw;
            width: 95%;
            border-radius: 35px;
            background-color: white;
            margin: 4px;
            z-index: 99999;
        }

        .menu{
            display: flex;
            align-items: center;
            justify-content: initial;
        }

        .menu img{
            cursor: pointer;
            z-index: 9999;
        }

        .index{
            display: flex;
            align-items: center;
            justify-content: end;
        }

        .index a{
            width: 1%;
            display: flex;
            align-items: center;
            justify-content: end;
        }

        .index img{
            cursor: pointer;
            width: 4.5vw;
            z-index: 9999;
        }

        .cruz{
            display: flex;
            justify-content: end;
            position: absolute;
        }

        .cruz img{
            cursor: pointer;
            margin: 1vw;
        }

        .sub{
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .sub a{
            font-size: 5vh;
            text-decoration: none;
            color: white;
            display: inline-block;
            position: relative;
        }

        .sub a:after{
            content:'';
            position: absolute;
            width: 100%;
            height: 3px;
            bottom: 0;
            left: 0;
            background-color: yellow;
            transform: scaleX(0);
            transform-origin: bottom right;
            transition: transform 0.6s;
        }

        .sub a:hover:after{
            transform: scaleX(1);
            transform-origin: bottom left;
        }
    </style>

    <body>
        <div class="container-fluid">
            <div class="row" style="display: felx; justify-content: center;">
                <div class="col-12 header">
                    <div class="row">
                        <div class="col-1 menu"><img id="menu" src="images/menu-burger.png" alt=""></div>
                        <div class="col-10"></div>
                        <div class="col-1 index"><a href="/"><img src="images/uanl-removebg-preview.png" alt=""></a></div>
                    </div>
                </div>
            </div>
        </div>
            
        <nav>
            <div class="desplegable" id="desplegable">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 cruz"><img id="cruz" src="images/arrow-small-left.png" alt=""></div>
                    </div>
                </div>
                <div class="sub">
                    <div>
                        <p><a href="/historiadewindows">Historia de Windows</a></p>
                        <p><a href="/funcionalidaddewindows">Funcionalidad de Windows</a></p>
                        <p><a href="/componenteswindows">Componentes de Windows</a></p>
                        <p><a href="/usuariowindows">Interfaz de Usiario de Windows</a></p>
                        <p><a href="/seguridadwindows">Seguridad en Windows</a></p>
                        <p><a href="/compatibilidad">Compatibilidad de Software y Hardware</a></p>
                        <p><a href="/desarrollos">Desarrollos Recientes</a></p>
                    </div>
                </div>
            </div>
        </nav>

        <script>
            const menu = document.getElementById("menu");
            const desplegable = document.getElementById("desplegable");
            const cruz = document.getElementById("cruz");

            menu.addEventListener("click", function(){
                desplegable.classList.add("desplegable-on")
            });

            cruz.addEventListener("click", function(){
                desplegable.classList.remove("desplegable-on")
            })
        </script>
    </body>
</html>
@yield('content')