<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://live.staticflickr.com/65535/52294851155_263db00b22_c.jpg">
    <title>Login</title>
    <style>
        body {
            padding: 0;
            margin: 0;
            background-color: #e4f3fd;
        }
        
        #login {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        
        .card {
            background-color: #d3e8f7;
            padding: 40px;
            border-radius: 2px;
            width: 280px;
        }
        
        .card-header {
            padding-bottom: 50px;
            opacity: 0.8;
            color: #000000;
        }
        
        .card-header::after {
            content: "";
            width: 70px;
            height: 1px;
            background-color: #0A0808;
            display: block;
            margin-top: -17px;
            margin-left: -5px;
        }
        
        .card-content label {
            color: #0e0c0c;
            font-size: 12px;
            opacity: 0.8;
        }
        
        .card-content-area {
            display: flex;
            flex-direction: column;
            padding: 10px 0;
        }
        
        .card-content-area input {
            margin-top: 10px;
            padding: 0 5px;
            background-color: transparent;
            border: none;
            border-bottom: 1px solid #0A0808;
            outline: none;
            color: rgb(12, 9, 9);
        }
        
        .card-footer {
            display: flex;
            flex-direction: column;
        }
        
        .card-footer .submit {
            width: 100%;
            height: 40px;
            background-color: #2bd9e5;
            border: none;
            color: #041C3F;
            margin: 10px 0;
        }
        
        .card-footer a {
            text-align: center;
            font-size: 12px;
            opacity: 0.8;
            color: #070707;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div id="login">
        <form class="card">
            <div class="card-header">
                <h2>Login</h2>
            </div>
            <div class="card-content">
                <div class="card-content-area">
                    <label for="usuario">Usuário</label>
                    <input type="text" id="usuario" autocomplete="off">
                </div>
                <div class="card-content-area">
                    <label for="password">Senha</label>
                    <input type="password" id="password" autocomplete="off">
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" value="login" class="submit">
                <a href="#" class="recuperar_senha">Esqueceu a senha?</a>
            </div>
        </form>
    </div>
</body>

</html>