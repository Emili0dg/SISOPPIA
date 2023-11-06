<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>index</title>
    </head>

    <style>
        body{
            background: linear-gradient(90deg, #fdc800, #015f9d);
        }

        .desplegable{
            background-color: black;
            width: 50%;
            height: 100vh;
            position:fixed;
            left: -100%;
            transition: 1s;
            z-index: 9999;
        }

        .desplegable-on{
            left: 0;
        }

        .menu{
            position: fixed;
            margin: 1vw;
        }

        .menu img{
            cursor: pointer;
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

        .index{
            height: 100vh;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .oso{
            width: 50%;
            animation-name: Levitationoso;
            animation-duration: 2s;
            animation-iteration-count: infinite; 
            display: flex;
            align-items: center;
            justify-content: center;
        }

        @keyframes Levitationoso{
            0%{
                transform: translateY(0);
            }
            50%{
                transform: translateY(-10px);
            }
            100%{
                transform: translateY(0);
            }
        }

        .oso img{
            width: 100%;
            transform: rotate(-30deg);
        }

        .fime{
            animation-name: levitationfime;
            animation-duration: 2s;
            animation-iteration-count: infinite;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        @keyframes levitationfime{
            0%{
                transform: translateY(-10px);
            }
            50%{
                transform: translateY(0px);
            }
            100%{
                transform: translateY(-10px);
            }
        }

        .fime img{
            width: 50%;
        }

        .integrantes{
            text-align: center;
        }

        .integrantes td,th{
            border: 1px solid black;
            width: 17vw;
            height: 6vh;
            font-size: small;
        }

        .escu{
            position: relative;
            bottom: 0vh;
        }

        .uninom{
            font-style: normal;
        }

        .escu h1{
            font-size: 4.5vh;
        }
    </style>

    <body>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 menu"><img id="menu" src="images/menu-burger.png" alt=""></div>
                </div>
            </div>
            
            <nav>
                <div class="desplegable" id="desplegable">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 cruz"><img id="cruz" src="images/arrow-small-left.png" alt=""></div>
                        </div>
                    </div>

                    <style>
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

                    <div class="sub">
                        <div>
                            <p><a href="/historiadewindows">Historia de Windows</a></p>
                            <p><a href="/funcionalidaddewindows">Funcionalidad de Windows</a></p>
                            <p><a href="/componenteswindows">Componentes de Windows</a></p>
                            <p><a href="/usuariowindows">Interfaz de Usuario de Windows</a></p>
                            <p><a href="/seguridadwindows">Seguridad en Windows</a></p>
                            <p><a href="/compatibilidad">Compatibilidad de Software y Hardware</a></p>
                            <p><a href="/desarrollos">Desarrollos Recientes</a></p>
                        </div>
                    </div>
                </div>
            </nav>
        </section>

        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-3">
                        <div class="row">
                            <div class="col-12" style="height: 50vh;display: flex;align-items: center;justify-content: center;">
                                <div class="oso">
                                    <img src="images/osofime-removebg-preview.png" alt="">
                                </div>
                            </div>
                            <div class="col-12" style="height: 50vh;display: flex;align-items: center;justify-content: center;">
                                <div class="fime">
                                    <img src="images/fime-removebg-preview.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 index">
                        <div class="row">
                            <div class="col-12 escu">
                                <h1><span class="typed"></span></h1>
                            </div>
                            <div class="col-12" style="display: flex;align-items: center;justify-content: center;">
                                <table class="integrantes">
                                    <tr>
                                        <th>Matricula</th>
                                        <th>Nombre</th>
                                        <th>Carrera</th>
                                    </tr>
                                    <tr>
                                        <td>1952328</td>
                                        <td>Emilio Dorantes García</td>
                                        <td>ITS</td>
                                    </tr>
                                    <tr>
                                        <td>1929049</td>
                                        <td>Luis Roberto Contreras Parra</td>
                                        <td>ITS</td>
                                    </tr>
                                    <tr>
                                        <td>1921822</td>
                                        <td>Adrian Jahir Garza Ramirez</td>
                                        <td>ITS</td>
                                    </tr>
                                    <tr>
                                        <td>2109542</td>
                                        <td>Marco Antonio Arreola de Leon</td>
                                        <td>ITS</td>
                                    </tr>
                                    <tr>
                                        <td>1916709</td>
                                        <td>Oscat Alexis Neira Galvan</td>
                                        <td>ITS</td>
                                    </tr>
                                    <tr>
                                        <td>1905681</td>
                                        <td>Samuel Gonzalez Gutierrez</td>
                                        <td>ITS</td>
                                    </tr>
                                    <tr>
                                        <td>1898199 </td>
                                        <td>Grecia Ardines Alejandro</td>
                                        <td>IAS</td>
                                    </tr>
                                    <tr>
                                        <td>1875139</td>
                                        <td>David Alejandro López Huerta</td>
                                        <td>IAS</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row">
                            <div class="col-12" style="height: 50vh;display: flex;align-items: center;justify-content: center;">
                                <div class="fime">
                                    <img src="images/uanl-removebg-preview.png" alt="">
                                </div>
                            </div>
                            <div class="col-12" style="height: 50vh;display: flex;align-items: center;justify-content: center;">
                                <div class="oso">
                                    <img src="images/U-removebg-preview.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>

    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    <script>
        const typed = new Typed(".typed", {
            strings: [
                '<i class="uninom">Universidad Autónoma de Nuevo León</i>', '<i class="uninom">Facultad de Ingeniería Mecanica y Electrica</i>'
            ],
            typeSpeed: 75,
            startDelay: 300,
            backSpeed: 75,
            shuffle: false,
            backDelay: 1500,
            loop: true,
            loopCount: false,
            showCursor: true,
            cursorChar: '|',
            contentType: 'html',
        });
    </script>

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
</html>