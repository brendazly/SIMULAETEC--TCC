<?php
// Se você quiser, aqui pode vir alguma lógica PHP antes do HTML, 
// por exemplo, para definir $mensagem, constantes etc.
// Estou assumindo que as constantes como HOME_ASSETS e BASE_URL já estão definidas.

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SimulaEtec</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?= HOME_ASSETS ?>css/hometw.css" />
  <style>
    @font-face {
      font-family: 'Poppins';
      src: url('<?= HOME_ASSETS ?>fonts/Poppins.ttf') format('truetype');
      font-weight: normal;
      font-style: normal;
    }

    /* CSS para caixa de login */
    .login-box {
      position: absolute;
      top: 70px; /* aparece logo abaixo do header */
      right: 20px;
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.15);
      width: 280px;
      z-index: 1000;
      display: none;
    }

    .login-box.show {
      display: block;
    }

    .login-input {
      width: 100%;
      box-sizing: border-box;
      margin-bottom: 10px;
      padding: 8px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .login-button {
      width: 100%;
      padding: 10px;
      background-color: #7c3aed;
      border: none;
      border-radius: 4px;
      color: white;
      font-weight: 600;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s ease;
    }

    .login-button:hover {
      background-color: #5b21b6;
    }

    .register-link {
      display: block;
      margin-top: 10px;
      text-align: center;
      color: #7c3aed;
      cursor: pointer;
      text-decoration: underline;
      font-size: 14px;
    }

    /* Formulário de cadastro oculto inicialmente */
    .cadastro-form-container {
      display: none;
    }
  </style>
</head>

<body>


  <!-- Caixa de login/cadastro abaixo do header -->
  <div class="login-box <?= (isset($_GET['show_login']) || !empty($mensagem)) ? 'show' : '' ?>">
    <?php if (!empty($mensagem)): ?>
        <p style="color: red; font-weight: bold;"><?= htmlspecialchars($mensagem) ?></p>
    <?php endif; ?>

    <!-- Formulário de Login -->
    <div class="form-container login-form-container">
      <h3 class="login-title">Login</h3>
      <form class="login-form" action="<?= BASE_URL ?>?page=login" method="post">
        <input type="email" name="email" placeholder="E-mail" class="login-input" required>
        <input type="password" name="senha" placeholder="Senha" class="login-input" required>
        <button type="submit" class="login-button">Entrar</button>
      </form>
      <a href="#" class="register-link toggle-form" data-target="cadastro">Criar nova conta</a>
      <a href="#" class="register-link toggle-form" data-target="esqueci">Esqueci a senha</a>
    </div>

    <!-- Formulário de Cadastro -->
    <div class="form-container cadastro-form-container">
      <h3 class="login-title">Criar Conta</h3>
      <form class="login-form" action="<?= BASE_URL ?>?page=cadastro" method="post">
        <input type="text" name="nome" placeholder="Nome completo" class="login-input" required>
        <input type="email" name="email" placeholder="E-mail" class="login-input" required>
        <input type="password" name="senha" placeholder="Senha" class="login-input" required>
        <input type="password" name="confirmar_senha" placeholder="Confirmar senha" class="login-input" required>
        <button type="submit" class="login-button">Cadastrar</button>
      </form>
      <a href="#" class="register-link toggle-form" data-target="login">Já tenho uma conta</a>
    </div>
  </div>



  <!-- CONTEÚDO PRINCIPAL -->
  <div class="bloco1">
    <main class="main-content">

  <!-- SIDEBAR -->
  <div class="sidebar">
    <div class="logo">

      <div class="logo-icon">            <img src="<?= HOME_ASSETS ?>imgs/svgs/logoroxo.svg" id="logo-topo" alt="Análise de Desempenho" />
</div>
    </div>
    <div class="nav-section">
      <a href="#" class="nav-item active">
        <span class="icon icon-dashboard"></span>
        Home
      </a>
      <a href="#" class="nav-item">
        <span class="icon icon-projects"></span>
        Guia de Estudos
      </a>
      <a href="bloqmenuprovas.php" class="nav-item">
        <span class="icon icon-documents"></span>
        Simulados
      </a>
    </div>

    <!-- Login alinhado à direita -->
    <div class="login-container">
      <a href="#" class="category-link">Login</a>
     </div>
  </div>


      <section class="hero">
        <h1><span class="texto-roxo">ESTUDE</span> PARA O <br /> VESTIBULINHO</h1>
        <p>
          Prepare-se para o Vestibulinho das Etecs com nosso simulado online.
        </p>

        <div class="hero-buttons">
          <a href="#" class="btn btn-primary">Começar</a>
          <a href="#" class="btn btn-secondary">Guia de estudos ⭢</a>
        </div>

        <div class="iconsText">
          <div class="iconItem">
            <img src="<?= HOME_ASSETS ?>imgs/svgs/ok.svg" alt="Análise de Desempenho" />
            <p class="descIcons">Análise de Desempenho</p>
          </div>

          <div class="iconItem">
            <img src="<?= HOME_ASSETS ?>imgs/svgs/timer.svg" alt="Cronômetro" />
            <p class="descIcons">Cronômetro</p>
          </div>

          <div class="iconItem">
            <img src="<?= HOME_ASSETS ?>imgs/svgs/ferramenta.svg" alt="Correção Imediata" />
            <p class="descIcons">Correção Imediata</p>
          </div>
        </div>

        <div id="meio">
          <div class="texto2">
            <h2>Análise de desempenho</h2>
            <p>Conheça as funcionalidades que vc poderá utulizar aqui no Simulaetec</p>
          </div>

          <div class="retangulos">
            <!-- Card 1 -->
            <div class="retangulo">
              <img src="<?= HOME_ASSETS ?>imgs/svgs/caderno.svg" alt="Correção imediata" class="icone" />
              <h3>Estatísticas</h3>
              <p>Geração da contabilidade de acertos e erros realizados durante o simulado.</p>
              <ul>
                <li>Acertos</li>
                <li>Erros</li>
              </ul>
            </div>

            <!-- Card 2 -->
            <div class="retangulo">
              <img src="<?= HOME_ASSETS ?>imgs/svgs/fogo.svg" alt="Correção imediata" class="icone" />
              <h3>Correção imediata</h3>
              <p>Assim que terminar o simulado, entregamos todas as questões corrigidas.</p>
              <ul>
                <li>Acompanhe seu progresso</li>
                <li>Evolução</li>
              </ul>
            </div>

            <!-- Card 3 -->
            <div class="retangulo">
              <img src="<?= HOME_ASSETS ?>imgs/svgs/timer.svg" alt="Cronômetro" class="icone" />
              <h3>Cronômetro</h3>
              <p>Utilizamos um cronômetro integrado para ajudar você a medir e controlar melhor o tempo de estudo.</p>
              <ul>
                <li>Tempo real</li>
                <li>Incentivo</li>
              </ul>
            </div>

            

          </div>
           <!-- FOOTER -->
  <footer class="footer">
    <div class="footer-container">
      <div class="footer-col">
        <h3><span class="highlight">SIMULA</span>ETEC</h3>
        <p>
          Plataforma de preparação para os vestibulinhos da ETEC,
          com simulados atualizados e baseados em provas anteriores,
          ajudando na melhoria do desempenho dos candidatos.
        </p>
        <p>📞 1306420691</p>
        <p>📧 simulaetec@gmail.com</p>
        <p>📷 @simulaetec</p>
      </div>
      <div class="footer-col">
        <h4>Links</h4>
        <ul>
          <li><a href="#">Simulados</a></li>
          <li><a href="#">Guia de Estudos</a></li>
          <li><a href="#">Login</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Instituições</h4>
        <ul>
          <li><a href="https://etec.sp.gov.br/">ETEC</a></li>
          <li><a href="https://www.vestibulinhoetec.com.br/">Vestibulinho</a></li>
          <li><a href="https://www.cps.sp.gov.br/">CPS</a></li>
        </ul>
      </div>
    </div>
  </footer>
        </div>
      </section>

      
    </main>
    
  </div>

 

  <!-- Script para abrir/fechar o formulário login/cadastro -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const loginBtn = document.querySelector('.login-container .category-link');
      const loginBox = document.querySelector('.login-box');

      loginBtn.addEventListener('click', function(e) {
        e.preventDefault();
        loginBox.classList.toggle('show');
        // Sempre mostrar o formulário de login ao abrir
        document.querySelector('.login-form-container').style.display = 'block';
        document.querySelector('.cadastro-form-container').style.display = 'none';
      });

      document.querySelectorAll('.toggle-form').forEach(link => {
        link.addEventListener('click', function(e) {
          e.preventDefault();
          const target = this.getAttribute('data-target');

          if(target === 'login') {
            document.querySelector('.login-form-container').style.display = 'block';
            document.querySelector('.cadastro-form-container').style.display = 'none';
          } else if(target === 'cadastro') {
            document.querySelector('.login-form-container').style.display = 'none';
            document.querySelector('.cadastro-form-container').style.display = 'block';
          } else if(target === 'esqueci') {
            alert('Funcionalidade de recuperação de senha ainda não implementada.');
          }
        });
      });
    });
  </script>

</body>
</html>
