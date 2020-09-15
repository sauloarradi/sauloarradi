<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="3saulop2.css">
    <title>Projeto P1</title>
</head>
<body>
    <?php include 'cabecalho.php' ?>
    <section>
        <div class="aba">
            <h2 class="contato">CONTATO</h2>
            <h3>Saulo Arradi
            </h3>
            <p> Rua José Stringueta, 338<br>
            Barra Bonita - SP - CEP: 17340-000<br><br>
            Telefone: (16) 99211-7531<br>
            Whatsapp: (14) 99660-2624 &nbsp;<img src="iconzap.jpg" title="whatsapp" id="iconzap"><br><br>
            
            E-mail: <span class="color_1">sauloarradi@gmail.com</span>
            <br><br>
            <a href="https://www.facebook.com/saulocole" target="self" title="meu face"><img src="icon.face.png" id="iconface" alt="facebook"></a>
            <a href="https://www.instagram.com/sauloarradi/" target="self" title="meu insta"><img src="icon.insta.jpeg" id="iconinsta" alt="instagram"></a>
            <a href="https://br.linkedin.com/in/saulo-arradi-72a991178?trk=people-guest_people_search-card" title="meu linkedin"><img src="iconlinke.jpg" id="iconlinke" alt="linkedin"></a>
        </div>

        <form name="formu" action="4saulop2.php" method="post" onsubmit="return validar()" enctype="multipart/form-data">
            <h2>Responderei seu email em breve.</h2>
            
            <p class="nome">
                <input type="text" name="nome" placeholder="Nome*" id="nome">
                <div id="errosn"></div>
            </p>
            <p class="assunto">
                <input type="number" name="cpf" placeholder="CPF" id="cpf">
                <div id="erros"></div>
            <p class="email">
                <input type="email" name="email" placeholder="E-mail*" id="email">
            </p>
            </p>
            <p class="mensagem">
            <textarea name="mensagem" placeholder="Mensagem"></textarea>
            
            </p>
            <fieldset>
                <legend>Marque as opções de seu interesse</legend>
                <div class="hobbie"> 
                <input type="checkbox" name="hobbie[]" value="c#" id="hobbie" checked>C#
                <input type="checkbox" name="hobbie[]" value="js" id="hobbie">JavaScript
                <input type="checkbox" name="hobbie[]" value="php" id="hobbie">PHP
                <input type="checkbox" name="hobbie[]" value="python" id="hobbie">Python
                </div>
            </fieldset>
            
            <p class="arq">
            <spam id="fotop">Envie uma foto:</spam><input type="file" name="arq" class="arq" required>
            </p>
            <p class="enviar">
                <input type="submit" name="enviar" value="Enviar" id="btn">
            </p>
        </form>
        
    </section>
    
    <?php include 'rodape.php'?>
    
    <script>
        var eerrosn = document.getElementById("errosn");
        var eerros = document.getElementById("erros");
        var enome = document.getElementById("nome");
        var ecpf = document.getElementById("cpf");
        var vnome, vcpf;
        function validar()
        {
            
            vnome = enome.value;
            if(vnome.length<4)
            {
                
                eerrosn.innerHTML = "Nome muito curto!";
                enome.style.backgroundColor = "#72AB00";
                enome.focus();
                return false;
            }
            vcpf = ecpf.value;
            if(vcpf.length!=11 || isNaN(vcpf))
            {
                eerros.innerHTML = "CPF inválido";
                ecpf.style.backgroundColor="#72AB00";
                ecpf.focus();
                return false;
            }
        }
    </script>
    
    
</body>
</html>