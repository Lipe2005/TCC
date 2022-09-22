<!Doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pro saude store</title>
    <link rel="stylesheet" type="text/css" href="D:\3etim2022\TCC\css\TCCstyle.css" />
    <link rel="icon" href="https://live.staticflickr.com/65535/52294851155_263db00b22_c.jpg" background="none" />
    <script src="https://kit.fontawesome.com/0342f8c9d6.js" crossorigin="anonymous"></script>
   <style>
    * {
    margin: 0 auto;
    padding: 0;
}

body {
    background-color: #d3e8f7;
    display: flex;
}

header {
    background-color: #2bd9e5;
    width: 100%;
    height: 201px;
}


/* Botões */

li {
    max-width: 2000px;
    margin: 0;
    display: flex;
    font-family: Georgia, serif;
    font-size: medium;
    height: 47px;
    border-bottom: 5px solid #091d29
}

.button1 {
    color: #000000;
    background-color: #2bd9e5;
    font-size: medium;
    width: 60px;
    border: none;
    margin-top: 10px;
    margin-left: 5px;
}

.button2 {
    color: #000000;
    background-color: #2bd9e5;
    font-size: medium;
    width: 150px;
    border: none;
    margin-top: 10px;
}

.button3 {
    color: #000000;
    background-color: #2bd9e5;
    font-size: medium;
    width: 90;
    border: none;
    margin-top: 10px;
}

.button4 {
    color: #000000;
    background-color: #2bd9e5;
    font-size: medium;
    width: 109px;
    border: none;
    margin-top: 10px;
}

.button5 {
    color: #000000;
    background-color: #2bd9e5;
    font-size: medium;
    width: 70px;
    border: none;
    margin-top: 10px;
}


/*  barra de pesquisa */

#divBusca {
    background-color: #72d8e0;
    border: solid 1px;
    width: 560px;
    height: 37px;
    margin-top: -135px;
}

#txtBusca {
    float: left;
    background-color: transparent;
    padding-left: 5px;
    font-style: italic;
    font-size: 14px;
    border: none;
    height: 32px;
    width: 521px;
}

.btnBuscar {
    width: 34px;
    height: 35px;
    background-color: #72d8e0;
    border: none;
}


/* Icones */

.left {
    background: lightblue;
    border-radius: 50%;
    width: 200px;
    height: 200px;
    margin-top: 200px;
    margin-left: 500px;
    display: flex;
    justify-content: center;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    border: solid #091d29 2px;
}

.center {
    background: lightblue;
    border-radius: 50%;
    width: 200px;
    height: 200px;
    margin-left: 850px;
    margin-top: -200px;
    display: flex;
    justify-content: center;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    border: solid #091d29 2px;
}

.rigth{
    background: lightblue;
    border-radius: 50%;
    width: 200px;
    height: 200px;
    margin-top: -200px;
    margin-left: 1200px;
    display: flex;
    justify-content: center;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    border: solid #091d29 2px;
}

.circulo:hover{
        transform: translateY(-5px);
        cursor: pointer;
}
   </style>

</head>

<Body>
    <header>
        <img src="https://live.staticflickr.com/65535/52292209878_faa7da2bd3_b.jpg" width="350" height="150" alt="Pro_saude">

        <nav>
            <li>

                <a class="button1" href="D:\3etim2022\TCC\html\TCChome.html">HOME</a>

                <a class="button2" href="D:\3etim2022\TCC\html\TCC_tds_produtos.html">PRODUTOS</a>

                <a class="button4" href="D:\3etim2022\TCC\html\TCC_tds_produtos.html">CONTA</a>

                <a class="button5" href="D:\3etim2022\TCC\html\TCC_tds_produtos.html">AJUDA</a>
            </li>
        </nav>

        <form action="TCCphp.php" id="divBusca">
            <input type="text" id="txtBusca" placeholder="Buscar..." />
            <button class="btnBuscar"> <i class="fa-solid fa-magnifying-glass" name="btnBusca" ></i></button>
        </form>

        <div class="circulo left">
            <h1 width="500" height="500"><i class="fa-solid fa-person-swimming fa-4x"></i></i>
            </h1>
        </div>
        <div class="circulo center">
            <h1 width="500" height="500"><i class="fa-solid fa-dumbbell fa-4x"></i></h1>
        </div>
        <div class="circulo right">
            <h1 width="500" height="500"><i class="fa-solid fa-jar fa-4x"></i></h1>
        </div>
    </header>
</Body>

</html>
