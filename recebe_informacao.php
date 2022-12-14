<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styleRecebimento.css" />
    <title>Recebi informaçãoes</title>
  </head>
  <body>
    <main class="container">
      <h1>Boas-vindas</h1>
      <section class="dados-recebidos">
        
        <div class="left">
          <?php
            $nome = $_POST['nome'];          
          
          echo "<h2 style='font-size:var(--font-h1);'> Seja bem-vindo: </h2>".$nome."<br>";
          ?>
          <br>
          <a href="index.html"  title="Voltar para a página anterior" alt="voltar para a página anterior">&#10226; Voltar</a>
        </div>
        <div class="right">
          <img src="./images/img1.png" alt="imagem do site" title="imagem do site" />
        </div>
        
      </section>
    </main>

    <footer>
      <p class="footer">
        Criado por <em>Felipe Y Castro</em>
        <a
          href="https://www.linkedin.com/in/felipe-y-castro-a0124522b/"
          target="_blank"
          ><img
            src="./images/linkedIn.png"
            alt="Icone do LinkedIn"
            title="Meu LinkedIn"
        /></a>
        <a href="https://github.com/FelipeYCastro" target="_blank"
          ><img
            src="./images/github.png"
            alt="Icone do github"
            title="Meu GitHub" /></a
        ><br />
        Para apresentar a resolução da terefa 3 solicitada na atividade
        interdisciplinar do 4 semestre de Análise e Desenvolvimento de Sistemas.
      </p>
    </footer>
    <script src="js/script.js"></script>
  </body>
</html>

  </body>
</html>
