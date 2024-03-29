<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pro saude store</title>
    <link rel="stylesheet" type="text/css" href="D:\3etim2022\TCC\css\TCCstyleTds_produtos.css" />
    <script src="https://kit.fontawesome.com/0342f8c9d6.js" crossorigin="anonymous"></script>
   <style>
    * {
            margin: 0 auto;
            padding: 0;
        }
        
        header {
            background-color: #2bd9e5;
            width: 100%;
            height: 203px;
        }
        
        body {
            background-color: #d3e8f7;
            display: flex;
        }
        /* Botões */
        
        li {
            max-width: 2000px;
            margin: 0;
            display: flex;
            font-family: Georgia, serif;
            font-size: medium;
            height: 51px;
            border-bottom: 5px solid #091d29
        }
        
        .button1 {
            color: #000000;
            background-color: #2bd9e5;
            font-size: medium;
            width: 60px;
            border: none;
            margin-top: 14px;
            margin-left: 3px;
        }
        
        .button2 {
            color: #000000;
            background-color: #2bd9e5;
            font-size: medium;
            width: 150px;
            border: none;
            margin-top: 14px;
            margin-left: 5px;
        }
        
        .button3 {
            color: #000000;
            background-color: #2bd9e5;
            font-size: medium;
            width: 90;
            border: none;
            margin-top: 14px;
            margin-left: 3px;
        }
        
        .button4 {
            color: #000000;
            background-color: #2bd9e5;
            font-size: medium;
            width: 109px;
            border: none;
            margin-top: 14px;
            margin-left: 3px;
        }
        
        .button5 {
            color: #000000;
            background-color: #2bd9e5;
            font-size: medium;
            width: 70px;
            border: none;
            margin-top: 14px;
        }
        /* barra de pesquisa */
        
        #divBusca {
            background-color: #72d8e0;
            border: solid 1px;
            width: 560px;
            height: 37px;
            margin-top: -135px;
        }
        
        #Busca {
            float: left;
            background-color: transparent;
            padding-left: 5px;
            font-style: italic;
            font-size: 14px;
            border: none;
            height: 37px;
            width: 560px;
        }
        
        .btnBuscar {
            width: 34px;
            height: 35px;
            background-color: #72d8e0;
            border: none;
        }
        /* produtos */
        
        h1 {
            display: block;
            text-align: center;
            font-size: 20;
            margin-top: 10px;
        }
        
        .header_fotos {
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: "FreeMono", monospace;
        }
        
        .card:hover {
            transform: translateY(-5px);
            cursor: pointer;
        }
        
        .card h2 {
            color: #0a3080;
            font-size: 30px;
            margin-left: 10px;
            margin-top: 80px;
        }
        
        .image {
            float: right;
            max-width: 300px;
            max-height: 300px;
        }
        
        .left {
            background-color: lightblue;
            border: solid #091d29 2px;
            margin-top: 200px;
            width: 400;
            height: 280px;
        }
        
        .right {
            background-color: lightblue;
            margin-top: 200px;
            width: 400px;
            height: 280px;
            border: solid #091d29 2px;
        }
        
        .center {
            background-color: lightblue;
            margin-top: 200px;
            width: 400px;
            height: 280px;
            border: solid #091d29 2px;
        }
   </style>
</head>
<Body>
    <header>
        <img src="https://live.staticflickr.com/65535/52292209878_faa7da2bd3_b.jpg" width="350" height="150" alt="Pro_saude">
        <nav>
            <li>
                <input type ="submit" class="button1" value="HOME"
                        onclick="Location.href='/tcc/home/Home.php'">
                <input type ="submit" class="button2" value="PRODUTOS"
                        onclick="location.href='/tcc/produtos/Produtos.php'">
                <input type ="submit" class="button3" value="CONTA"
                        onclick="location.href='/tcc/Login/login.php'">
                <input type ="submit" class="button2" value="AJUDA"
                        onclick="location.href='/tcc/ajuda/Help.php'">
            </li>
        </nav>
        <form id="divBusca">
            <input type="text" id="Busca" placeholder="Buscar..."/>
        </form>
       <from class="header_fotos">
            <button class="card right">
                <img src="https://live.staticflickr.com/65535/52488979710_440a1815c5_n.jpg" class="image" height="240px" width="240px">
                <h1>Whey Integralmedica</h1>
                <h2>R$ 81,96</h2>
            </button>
            <div class="card center">
                <img src="https://d2vq4s943o8cb4.cloudfront.net/Custom/Content/Products/50/62/5062966_100-whey-protein-max-titanium-4443_l2_637437988317010154.png" class="image" height="250px" width="250px">
                <h1>Whey Max Titanium</h1>
                <h2>R$ 84,00</h2>
            </div>
            </h2>
            <div class="card left">
                <img scr="https://www.flickr.com/photos/196319286@N06/52325834217/in/album-72177720301775433/" class="image" height="250px" width="250px">
                <h1>Glutamina Probiótica</h1>
                <h2>R$ 40,00</h2>
            </div>
        </from>
        <from class="header_fotos">
            <div class="card right">
                <img src="https://www.madrugaosuplementos.com.br/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/p/r/probiotica_purewhey900.png" class="image" height="250px" width="250px">
                <h1>Whey Probiótica</h1>
                <h2>R$ 91,85</h2>
            </div>
            <div class="card center">
                <img src="https://d2vq4s943o8cb4.cloudfront.net/Custom/Content/Products/61/65/6165489_whey-4hd-black-skull-5400_l2_635929656261508000.png" class="image" height="250px" width="250px">
                <h1>Whey Black Skull</h1>
                <h2>R$ 81,96</h2>
            </div>
            </h2>
            <div class="card left">
                <img src="https://d2vq4s943o8cb4.cloudfront.net/Custom/Content/Products/98/25/9825795_best-whey-atlhetica-nutrition-6052_l11_636289906293788434.png" class="image" height="250px" width="250px">
                <h1>Whey Athletica Nutrition</h1>
                <h2>R$ 159,90</h2>
            </div>
        </from>
        <from class="header_fotos">
            <div class="card right">
                <img src="https://emporioquatroestrelas.vteximg.com.br/arquivos/ids/158685-292-292/whey-baunilha-1.png?v=636978513662500000" class="image" height="250px" width="250px">
                <h1>Whey Optimun Nutrition</h1>
                <h2>R$ 81,96</h2>
            </div>
            <div class="card center">
                <img src="https://integralmedica.vteximg.com.br/arquivos/ids/158599-0-0/cratina_150g.png?v=637387362471130000" class="image" height="230px" width="230px">
                <h1>Creatina Integralmedica</h1>
                <h2>R$ 81,96</h2>
            </div>
            </h2>
            <div class="card left">
                <img src="https://d2vq4s943o8cb4.cloudfront.net/Custom/Content/Products/05/81/0581_creatine-max-titanium-3310_l1_637437990877310868.png" class="image" height="250px" width="250px">
                <h1>Whey Max Titanium</h1>
                <h2>R$ 84,00</h2>
            </div>
        </from>
        <from class="header_fotos">
            <div class="card right">
                <img src="https://www.madrugaosuplementos.com.br/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/p/r/probiotica2019-creatina-pura-300g_2_.png" class="image" height="250px" width="250px">
                <h1>Creatina Propiótica</h1>
                <h2>R$ 81,96</h2>
            </div>
            <div class="card center">
                <img src="https://d2vq4s943o8cb4.cloudfront.net/Custom/Content/Products/24/56/24560850_creatine-turbo-black-skull-8526936_l1_637431960698635031.png" class="image" height="250px" width="250px">
                <h1>Creatina Black Skull</h1>
                <h2>R$ 81,96</h2>
            </div>
            </h2>
            <div class="card left">
                <img src="https://www.madrugaosuplementos.com.br/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/c/r/creatine_100_pure_300g.png" class="image" height="250px" width="250px">
                <h1>Creatina Athetica Nutrition</h1>
                <h2>R$69,90</h2>
            </div>
        </from>
        <from class="header_fotos">
            <div class="card right">
                <img src="https://ww.madrugaosuplementos.com.br/media/catalog/product/cache/1/image/650x/040ec09b1e35df139433887a97daa66f/o/n/on_creatina_em_po_300g.png" class="image" height="250px" width="250px">
                <h1>Creatina Optimun Nutrition</h1>
                <h2>R$ 81,96</h2>
            </div>
            <div class="card center">
                <img src="https://integralmedica.vteximg.com.br/arquivos/ids/158201-0-0/thumbnail_glutamina-150g.png?v=637324026842400000" class="image" height="240px" width="240px">
                <h1>Glutamina Integralmedica</h1>
                <h2>R$ 81,96</h2>
            </div>
            </h2>
            <div class="card left">
                <img src="https://www.madrugaosuplementos.com.br/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/l/-/l-g-suplemento-alimentar-de-l-glutamina-em-p_-max-titanium.png" class="image" height="250px" width="250px">
                <h1>Glutamina Max Titanium</h1>
                <h2></h2>
            </div>
        </from>
        <from class="header_fotos">
            <div class="card right">
                <img src="" class="image" height="250px" width="250px">
                <h1></h1>
                <h2></h2>
            </div>
            <div class="card center">
                <img src="" class="image" height="240px" width="240px">
                <h1> </h1>
                <h2></h2>
            </div>
            </h2>
            <div class="card left">
                <img src="" class="image" height="250px" width="250px">
                <h1> </h1>
                <h2></h2>
            </div>
        </from>
        <from class="header_fotos">
            <div class="card right">
                <img src="" class="image" height="250px" width="250px">
                <h1></h1>
                <h2></h2>
            </div>
            <div class="card center">
                <img src="" class="image" height="240px" width="240px">
                <h1> </h1>
                <h2></h2>
            </div>
            </h2>
            <div class="card left">
                <img src="" class="image" height="250px" width="250px">
                <h1> </h1>
                <h2></h2>
            </div>
        </from>
    </header>
    <script src="./busca.js"></script>
</Body>
</html>
