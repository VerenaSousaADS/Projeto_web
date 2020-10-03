<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Projeto WEB</title>
    <link rel="stylesheet" type="text/css" href="cadastrar.css">
    

</head>
<body>

    <section class="cd">
	    <div class="topo">
		
		<h1>Cadastro de Usuário</h1>
		
	</div>
	<div class="box">

        
        <form id="formCadastro" method="POST" class="cad" >

            <table class="bx">

                <tr class="bx">
                    <td><input required  autofocus placeholder="Nome" placeholder="Ex.: Marcos" type="text" name="campo_nome" id="cmpNm"></td>

                </tr>
                <tr class="bx">

                    <td><input  required placeholder="Usuário" placeholder="Ex.: marc@s" type="text" name="campo_usuario" id="cmpUs"></td>

                </tr>

                <tr class="bx">

                    <td><input required placeholder="Senha"  type="text" name="campo_senha"  id="cmpSn" ></td>

                </tr>

                <tr class="bx">

                    <td><input required placeholder="Confirmar Senha"  type="text" name="campo_confirmar" id="cmpConf" ></td>
                
                </tr>
                
               
            </table>
            <div class="bx">
                     <input required type="button" value="Cadastrar" class="cdtr">

            </div>
           
        </form>

    </div>
	
	<div class="rodape">
		<h4>created and developed by - Ana Sousa, Leonardo Castro, Verena Sousa ..version v1.0</h4>
    </div>
    </section>
</body>
</html>


