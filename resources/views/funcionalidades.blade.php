<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <title>Funcionalidades de Windows</title>
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
        border-radius: 7vh;
        background-color: white;
        margin: 10px;
        z-index: 99999;
        box-shadow: 0px 5px 10px 0px black;
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

    .info{
        width: 80%;
        margin: auto;
    }

    .subt{
        display: flex;
        align-items: center;
        justify-content: center;
        width: auto;
        padding-left: 3vw;
        padding-right: 3vw;
    }

    .subt a{
        text-decoration: none;
        color: black;
        font-size: 2.5vh;
    }

    .subt a:hover{
        transition: 0.2s;
        color: blue; 
    }

    .info p{
        font-size: 2.5vh;
    }
</style>

<body>
    <section>
        <div class="container-fluid">
            <div class="row" style="display: felx; justify-content: center;">
                <div class="col-12 header">
                    <div class="row">
                        <div class="col-1 menu"><img id="menu" src="images/menu-burger.png" alt=""></div>
                        <div class="col-10">
                        </div>
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
                        <p><a href="/usuariowindows">Interfaz de Usuario de Windows</a></p>
                        <p><a href="/seguridadwindows">Seguridad en Windows</a></p>
                        <p><a href="/compatibilidad">Compatibilidad de Software y Hardware</a></p>
                        <p><a href="/desarrollos">Desarrollos Recientes</a></p>
                    </div>
                </div>
            </div>
        </nav>
    </section>

    <section style="top: 16vh; position: relative;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 info">
                    <div class="row" style="display: flex;align-items: center;justify-content: center;">
                        <div class="col-5">
                            <h1 style="text-align: center;">Funcionalidad de Windows</h1>
                            <p>¿Para qué sirve Windows? Windows ofrece un entorno visual atractivo, ameno e intuitivo. La función básica de Windows es proveer al núcleo del sistema operativo de un entorno visual atractivo, ameno e intuitivo, en el que las operaciones básicas de uso del computador están representadas gráficamente a través de íconos. <br><br> Windows evolucionó notablemente a través de los años, sin embargo, mantiene características que lo identifican y que destacan su personalidad. Entre las principales se encuentran:</p></div>
                        <div class="col-7">
                            <img class="p-0 m-0" style="width:-webkit-fill-available; margin: 3.5vh !important;"src="images/Imagen1.png" alt="">
                        </div>
                        <div class="col-12">
                            <ul>
                                <li><p>El escritorio. Consiste en el fondo de la pantalla del monitor que es la base sobre la que el usuario puede ejecutar el sistema operativo, los programas y aplicaciones.</p></li>
                                <li><p>Los íconos. Consisten en pequeñas imágenes simbólicas de acceso directo a programas, archivos o carpetas, que se localizan en el escritorio. El tipo de ícono y su ubicación pueden ser personalizados por el usuario.</p></li>
                                <li><p>La barra de tareas. Consiste en una barra ubicada en la parte inferior del escritorio que permite visualizar, mediante íconos, los programas, archivos o carpetas que se encuentran activos, para seleccionarlos de manera rápida.</p></li>
                                <li><p>Botón de inicio. Consiste en un acceso al menú principal desplegable. El botón se encuentra ubicado en la parte inferior de la barra de tareas.</p></li>
                                <li><p>El menú. Consiste en un panel o lista desplegable que se puede visualizar u ocultar desde el botón de inicio. Ofrece accesos directos a programas, a archivos y a determinadas funciones del equipo (como de mantenimiento del equipo o de dispositivos).</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .foot{
                display: flex;
                align-items: center;
                justify-content: center;
                margin-top: 4vh;
                padding: auto;
                opacity: 0.5;
            }

            .anterior{
                background: url('images/flecha-pequena-izquierdados.png') no-repeat center center/cover ;
                width: 32px;
                height: 32px;
                transition: .5s;
            }

            .anterior:hover{
                background: url('images/flecha-pequena-izquierda.png') no-repeat center center/cover ;
            }

            .siguiente{
                background: url('images/flecha-pequena-derechados.png') no-repeat center center/cover ;
                width: 32px;
                height: 32px;
                transition: .5s;
            }

            .siguiente:hover{
                background: url('images/flecha-pequena-derecha.png') no-repeat center center/cover ;
            }
        </style>

        <div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-1" style="display:flex;align-items:center;justify-content:center;"><a href="/historiadewindows"><div class="anterior"></div></a></div>
                    <div class="col-10 foot">
                        <p>Universidad Autónoma de Nuevo León, Facultad de Ingenieria Mecanica y Electrica, Equipo #3 SISPO, 2023</p>
                    </div>
                    <div class="col-1" style="display:flex;align-items:center;justify-content:center;"><a href="/componenteswindows"><div class="siguiente"></div></a></div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script>
        $('.slider').slick();
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
</body>
</html>