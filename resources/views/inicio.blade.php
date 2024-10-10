<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/js/app.js'])

    <title>ITPN</title>
</head>

<body style="background-color:#e5e5e5">


    @include('menu')
    @if (Auth::check())
        <div>
            <section class="d-flex justify-content-center align-items-center"
                style="background-image: url('./img/fondo2.jpg'); background-size: cover; background-position: center; padding: 50px; color: white;">
                <div class="text-center">
                    <img src=" {{ asset('img\logo-tec.png') }}" width="250px">
                    <article>
                        <h2>BIENVENIDOS <br>
                            A TECNM
                        </h2>
                        <p> La visión del Tecnológico Nacional de México TecNM 
                            <strong>es ser una institución de educación superior de excelencia a nivel nacional e internacional, </strong> <br>
                            <strong>enfocada en la formación integral <br>
                                de profesionales innovadores y líderes en ciencia, tecnología.</strong> 
                                <br> y que nuestros servicios cuenten esas grandes 
                        </p>

                        <p>
                            El objetivo del Tecnológico Nacional de México TecNM es proporcionar educación superior <br>
                             <strong>tecnológica y de calidad que fomente el desarrollo integral de los estudiantes, <br>
                                formando profesionales competentes y comprometidos con la innovación, el emprendimiento <br>
                                 y el desarrollo sustentable, contribuyendo así al progreso económico. </strong></p>

                        <p>El Tecnológico Nacional de México (TecNM) se fundó el 6 de septiembre de 1948.   <br>
                            Esta fecha marca el inicio de la institución como una red de instituciones de educación tecnológica en México,<br>
                            <strong> con el objetivo de ofrecer formación técnica </strong>
                        </p>
                    </article>
                </div>
            </section>
        </div>

    @else
        <div>
            <section class="d-flex justify-content-center align-items-center"
                style="background-image: url('./img/fondo-tec.jpg'); background-size: cover; background-position: center; padding: 50px; color: white;">
                <div class="text-center">
                    <img src=" {{ asset('img\logo-tec.png') }}" width="250px">
                    <article style="color: #000000">
                        <h2>BIENVENIDO INVITADO <br>
                            A ITPN
                        </h2>
                        <p> Te invitamos a ser parte de nuestra escuela <strong style="color: tomato">puedes</strong>
                            <br>
                            <strong style="color: tomato">registrarte gratis!</strong> se parte de la universidad mas
                            grande de Piedras Negras <br>
                        </p>
                    </article>
                </div>
        </div>
        
    @endif


    @yield('contenido1')


</body>



</html>
