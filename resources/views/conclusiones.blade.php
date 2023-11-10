<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <title>Seguridad de Windows</title>
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
        box-shadow: 0px 5px 10px 0px gray;
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

    .imgmain{
        background: url('images/Windows-11-fondo-Dark.webp') no-repeat center center/cover;
        width: 100%;
        height: 30vh;
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

    .integrantes{
        text-align: center;
    }

    .integrantes td,th{
        border: 1px solid black;
        width: 17vw;
        height: 6vh;
        font-size: small;
    }
</style>

<body>
    <section>
        <div class="container-fluid">
            <div class="row" style="display: felx; justify-content: center;">
                <div class="col-12 header">
                    <div class="row">
                        <div class="col-1 menu"><img id="menu" src="images/menu-burger.png" alt=""></div>
                        <div class="col-10" style="display: flex; align-items: center; justify-content: center;">
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
                            <p><a href="/conclusiones">Conclusiones</a></p>
                        </div>
                </div>
            </div>
        </nav>

    </section>

    <style>
        .caja{
            width: 80%;
            height: 40vh;
            border-radius: 30px;
            background-color: transparent;
            margin: auto;
            transition: .3s;
            position: relative;
            margin-bottom: 5vh;
        }

        .caja div{
            position: absolute;
            backface-visibility: hidden;
            transition: 1s;
            width: 100%;
        }

        .papo{
            background: url('images/43ce8e33-d58b-48e5-91a3-0fb8f28eb157.webp');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center; 
            width: 100%;
            height: inherit;
            border-radius: 30px;
            transform: perspective(500px) rotateY(0deg);
            box-shadow: 0px 5px 10px 0px gray;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .infopapo{
            width: 100%;
            height: inherit;
            border-radius: 30px;
            transform: perspective(500px) rotateY(180deg);
            border: 1px solid #EFEBEB;
            box-shadow: 0px 5px 10px 0px gray;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .infopapo p{
            font-size: 2vh;
            text-align: center;
        }

        .infopapo h4{
            text-align: center;
        }

        .papodos{
            transform: perspective(500px) rotateY(180deg);
        }

        .infopapodos{
            transform: perspective(500px) rotateY(360deg);
        }
    </style>

    <section style="top: 16vh; position: relative;">
        <div class="container-fluid">
            <div class="row" style="display:flex;align-items:center;justify-content:center;">
                <div class="col-4">
                    <div class="caja">
                        <div id="luis" class="papo">
                            <img style="width: 10vw;" src="images/WhatsApp Image 2023-11-09 at 3.07.30 PM.jpeg" alt="">
                        </div>
                        <div id="luisinfo" class="infopapo">
                            <div>
                                <h4>Luis Roberto Contreras Parra</h4>
                                <p>El Sistema Operativo Windows es una plataforma sólida para el uso doméstico Su interfaz de usuario accesible, herramientas versátiles y compatibilidad con una variedad de tecnologías lo convierten en una elección popular para los desarrolladores. La creación de contenido en línea en Windows ofrece la flexibilidad necesaria para atender a una audiencia global y garantiza un entorno seguro y confiable.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="caja">
                        <div id="adrian" class="papo">
                            <img style="width: 13vw;" src="images/WhatsApp Image 2023-11-09 at 3.10.16 PM.jpeg" alt="">
                        </div>
                        <div id="adrianinfo" class="infopapo">
                            <div>
                                <h4>Adrian Garza</h4>
                                <p>Puedo concluir con que el sistema operativo Windows ha tenido un papel esencial en la revolución de la informática personal, experimentando una evolución a lo largo de décadas hasta convertirse en una plataforma ampliamente utilizada en todo el mundo. Proporciona una interfaz de usuario intuitiva, es compatible con una amplia variedad de aplicaciones y hardware, además de ofrecer herramientas de gestión y seguridad sólidas. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="caja">
                        <div id="grecia" class="papo">
                            <img style="width: 10vw;" src="images/WhatsApp Image 2023-11-09 at 3.16.08 PM.jpeg" alt="">
                        </div>
                        <div id="greciainfo" class="infopapo">
                            <div>
                                <h4>Grecia Ardines</h4>
                                <p>En conclusión, la historia de Microsoft Windows se lanzó en 1975 por Bill Gates y Paul Allen, con su principal objetivo que era en un inicio desarrollar y comercializar programas. Posteriormente se desarrollo el primer lenguaje de programación para el Altair Basic. A medida del paso de los años, se fueron lanzando y desarrollando nuevas versiones, las cuales se mejoraban poco a poco, tales como a su sistema operativo, interfaz, explorador de archivos, compatibilidad de hardware, pantallas táctiles, entre muchas otros factores que nos facilitan mucho nuestra vida en la actualidad.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4" style="margin-top:13vh;">
                    <div class="caja">
                        <div id="marco" class="papo">
                            <img style="width: 12vw;" src="images/WhatsApp Image 2023-11-09 at 3.21.58 PM.jpeg" alt="">
                        </div>
                        <div id="marcoinfo" class="infopapo">
                            <div>
                                <h4>Marco Arreola</h4>
                                <p>Para concluir puedo decir que el sistema operativo Windows, lanzado por Microsoft hace ya más de 3 décadas, revolucionó para siempre la concepción de lo que es un sistema operativo. Las metáforas implementadas en su momento como el escritorio, las ventanas y la papelera perduran hasta nuestros días y creo que son actualmente la base de futuros desarrollos. Tengo claro que sin su innovación la computación no sería lo que es hoy.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4" style="margin-top:13vh;">
                    <div class="caja">
                        <div id="david" class="papo">
                            <img style="width: 13vw;" src="images/WhatsApp Image 2023-11-09 at 3.24.03 PM.jpeg" alt="">
                        </div>
                        <div id="davidinfo" class="infopapo">
                            <div>
                                <h4>David Alejandro López Huerta</h4>
                                <p>Las funcionalidades de Windows han evolucionado significativamente a lo largo de los años y versiones. Desde su inicio en la década de 1980, Windows ha pasado de ser un simple entorno gráfico a un sistema operativo completo con características como la multitarea, la interfaz de usuario moderna, la seguridad mejorada y una amplia gama de aplicaciones integradas. Con cada nueva versión.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4" style="margin-top:13vh;">
                    <div class="caja">
                        <div id="alexis" class="papo">
                            <img style="width: 12vw;" src="images/WhatsApp Image 2023-11-09 at 5.28.15 PM.jpeg" alt="">
                        </div>
                        <div id="alexisinfo" class="infopapo">
                            <div>
                                <h4>Oscar Alexis Neira Gutiérrez</h4>
                                <p>El sistema operativo Windows ha desempeñado un papel fundamental en la informática personal y empresarial a lo largo de décadas. Con una interfaz intuitiva, amplia compatibilidad de hardware y una constante evolución, ha sido una opción confiable y versátil para una variedad de usuarios.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4" style="margin-top:13vh;">
                    <div class="caja">
                        <div id="samu" class="papo">
                            <img style="width: 14vw;" src="images/WhatsApp Image 2023-11-09 at 5.32.16 PM.jpeg" alt="">
                        </div>
                        <div id="samuinfo" class="infopapo">
                            <div>
                                <h4>Samuel González</h4>
                                <p>En conclusión, el sistema operativo Windows ha desempeñado un papel fundamental en la revolución de la informática personal y empresarial desde su lanzamiento inicial en la década de 1980. A lo largo de las décadas, Windows ha evolucionado constantemente, brindando a los usuarios una interfaz familiar y una amplia gama de aplicaciones y servicios. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4" style="margin-top:13vh;">
                    <div class="caja">
                        <div id="guapo" class="papo">
                            <img style="width: 10vw;" src="images/WhatsApp Image 2023-11-09 at 10.44.48 PM.jpeg" alt="">
                        </div>
                        <div id="guapoinfo" class="infopapo">
                            <div>
                                <h4>Emilio Dorantes García</h4>
                                <p>Windows es un sistema operativo que ofrece una amplia gama de características y herramientas que abarcan desde la gestión de archivos hasta la conectividad en línea. Esto lo convierte en una opción versátil y poderosa para satisfacer las necesidades tanto de usuarios comunes como de profesionales en informática.</p>
                            </div>
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
                    <div class="col-1" style="display:flex;align-items:center;justify-content:center;"><a href="/desarrollos"><div class="anterior"></div></a></div>
                    <div class="col-10 foot">
                        <p>Universidad Autónoma de Nuevo León, Facultad de Ingenieria Mecanica y Electrica, Equipo #3 SISPO, 2023</p>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const luis = document.getElementById("luis");
        const luisinfo = document.getElementById("luisinfo");

        luis.addEventListener("click", function(){
            luisinfo.classList.add("infopapodos")
            luis.classList.add("papodos")
        });

        luisinfo.addEventListener("click", function(){
            luisinfo.classList.remove("infopapodos")
            luis.classList.remove("papodos")
        });
    </script>

    <script>
        const adrian = document.getElementById("adrian");
        const adrianinfo = document.getElementById("adrianinfo");

        adrian.addEventListener("click", function(){
            adrianinfo.classList.add("infopapodos")
            adrian.classList.add("papodos")
        });

        adrianinfo.addEventListener("click", function(){
            adrianinfo.classList.remove("infopapodos")
            adrian.classList.remove("papodos")
        });
    </script>

    <script>
        const grecia = document.getElementById("grecia");
        const greciainfo = document.getElementById("greciainfo");

        grecia.addEventListener("click", function(){
            greciainfo.classList.add("infopapodos")
            grecia.classList.add("papodos")
        });

        greciainfo.addEventListener("click", function(){
            greciainfo.classList.remove("infopapodos")
            grecia.classList.remove("papodos")
        });
    </script>

    <script>
        const marco = document.getElementById("marco");
        const marcoinfo = document.getElementById("marcoinfo");

        marco.addEventListener("click", function(){
            marcoinfo.classList.add("infopapodos")
            marco.classList.add("papodos")
        });

        marcoinfo.addEventListener("click", function(){
            marcoinfo.classList.remove("infopapodos")
            marco.classList.remove("papodos")
        });
    </script>

    <script>
        const david = document.getElementById("david");
        const davidinfo = document.getElementById("davidinfo");

        david.addEventListener("click", function(){
            davidinfo.classList.add("infopapodos")
            david.classList.add("papodos")
        });

        davidinfo.addEventListener("click", function(){
            davidinfo.classList.remove("infopapodos")
            david.classList.remove("papodos")
        });
    </script>

    <script>
        const alexis = document.getElementById("alexis");
        const alexisinfo = document.getElementById("alexisinfo");

        alexis.addEventListener("click", function(){
            alexisinfo.classList.add("infopapodos")
            alexis.classList.add("papodos")
        });

        alexisinfo.addEventListener("click", function(){
            alexisinfo.classList.remove("infopapodos")
            alexis.classList.remove("papodos")
        });
    </script>

    <script>
        const samu = document.getElementById("samu");
        const samuinfo = document.getElementById("samuinfo");

        samu.addEventListener("click", function(){
            samuinfo.classList.add("infopapodos")
            samu.classList.add("papodos")
        });

        samuinfo.addEventListener("click", function(){
            samuinfo.classList.remove("infopapodos")
            samu.classList.remove("papodos")
        });
    </script>

    <script>
        const guapo = document.getElementById("guapo");
        const guapoinfo = document.getElementById("guapoinfo");

        guapo.addEventListener("click", function(){
            guapoinfo.classList.add("infopapodos")
            guapo.classList.add("papodos")
        });

        guapoinfo.addEventListener("click", function(){
            guapoinfo.classList.remove("infopapodos")
            guapo.classList.remove("papodos")
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
</body>
</html>