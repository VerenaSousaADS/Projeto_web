<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
</head>
<body>

    <div class="box_login">

        <div class="cover">
            <div class="cover-top">
                <img src="computer.png" height="70" width="70">
                </br>
                <img src="printer.png" height="55" width="55">
                <img src="laptop.png" height="60" width="60">
                <h1>Developer Store</h1>
            </div>
            <div>

                <h1 class="form-title">Faça seu Login</h1>

                <form>

                    <input type="email" name="e-mail" placeholder = "Email" required>
                    <input type="password" name="password" placeholder="Senha" required>

                    <button class="btn-login">LOGAR</button>
                    
                    
                </form>

            </div>
            <span class="msg_error"><i class="fa fa-exclamation-triangle" style="font-size: 16px; color: #FF6D6D; padding-right: 5px;"></i> Tentativa Inválida!</span>
        </div>

    </div>

</body>
</html>