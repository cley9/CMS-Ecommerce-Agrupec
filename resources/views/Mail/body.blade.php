<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            font-weight: 300;
            color: #888;
            background-color: rgba(230, 225, 225, 0.5);
            line-height: 30px;
            text-align: center;
        }
        .contenedor {
            width: 80%;
            min-height: auto;
            text-align: center;
            margin: 0 auto;
            padding: 40px;
            background: #ececec;
            border-top: 3px solid #E64A19;
        }
        .bold {
            color: #333;
            font-size: 25px;
            font-weight: bold;
        }
        img {
            margin-left: auto;
            margin-right: auto;
            display: block;
            padding: 0px 0px 20px 0px;
        }
    </style>

<div class='contenedor'>
    {{-- <p>&nbsp;</p>
    <p>&nbsp;</p>
    <span>Hola <strong class='bold'>[Nombre del Admin]</strong></span>
    <p>&nbsp;</p>
    <p><strong>Asunto: </strong>[Asunto del Cliente]</p>
    <p>&nbsp;</p>
    <p>El cliente <strong>[Nombre del Cliente]</strong> ha enviado un mensaje para usted.</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><strong>Mensaje: </strong>[Mensaje del Cliente]</p>
    <p>&nbsp;</p> --}}
    <p>¡Gracias por comprar en agrupec.com!</p>
    <p>&nbsp;</p>
    <p><span class='bold'>Agrupec</span></p>
    <p>&nbsp;</p>
    <p>
        <a title='WebProgramin' href='http://agrupec.com/'>
            {{-- <img src='https://img.freepik.com/vector-gratis/gente-negocios-trabajando-desarrollo-computadoras-portatiles_1262-18907.jpg?size=626&ext=jpg' alt='Logo' width='300px'/> --}}
            <img src='https://img.freepik.com/vector-gratis/gente-negocios-trabajando-desarrollo-computadoras-portatiles_1262-18907.jpg?size=626&ext=jpg' class="card-img-top" alt='Logo'/>
        </a>
    </p>
</div>
    {{-- <h2>Buenas tardes estimado usuario de agrupec</h2> --}}
</body>
</html>