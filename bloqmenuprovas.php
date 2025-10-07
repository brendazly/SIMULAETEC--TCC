<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simulado - SimulaEtec</title>
  <link rel="icon" href="../public/assets/home/imgs/LogoOrca.svg">

  <link rel="preload" href="css/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
    <link rel="stylesheet" href="css/style.css">
  </noscript>

  <style>
    @font-face {
      font-family: 'Poppins';
      src: url('<?= HOME_ASSETS ?>fonts/Poppins.ttf') format('truetype');
      font-weight: normal;
      font-style: normal;
    }

    .css-loaded body {
      opacity: 1;
    }
  </style>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      setTimeout(function() {
        document.documentElement.classList.add('css-loaded');
      }, 100);

      setTimeout(function() {
        if (!document.documentElement.classList.contains('css-loaded')) {
          document.documentElement.classList.add('css-loaded');
        }
      }, 1000);
    });
  </script>
</head>

<body>
  <!-- Botão da logo -->
  <div class="menu-logo">
    <img src="<?= HOME_ASSETS ?>imgs/svgs/iconmenu.png" id="logo-topo" alt="Abrir menu" />
  </div>

  <!-- Caixa de login/cadastro abaixo do header -->
  <div class="login-box <?= (isset($_GET['show_login']) || !empty($mensagem)) ? 'show' : '' ?>">
    <?php if (!empty($mensagem)): ?>
      <p style="color: red; font-weight: bold;"><?= htmlspecialchars($mensagem) ?></p>
    <?php endif; ?>

    <!-- Formulário de Login -->
    <div class="form-container login-form-container">
      <h3 class="login-title">Login</h3>
      <form class="login-form" action="<?= BASE_URL ?>?page=login" method="post">
        <input type="email" name="email" placeholder="E-mail" id="input1" class="login-input" required>
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

  <!-- Sidebar -->
  <div class="sidebar">
    <div class="nav-section">
      <a href="home.php" class="nav-item active icon-dashboard">Home</a>
      <a href="#" class="nav-item icon-team">Guia de Estudos</a>
      <a href="bloqmenuprovas.php" class="nav-item icon-projects">Simulados</a>
    </div>
    <div class="login-container">
      <a href="#" class="category-link icon-documents">Login</a>
    </div>
  </div>

  <!-- Conteúdo principal -->
  <main class="main-content">
    <div class="prova-list">
      <div class="textos">
        <h1>Simulados <span class="etec">ETEC</span></h1>
        <h2 class="texto-modal">Faça o login para ter acesso a todas as provas.<br></h2>
      </div>

      <div class="links-container prova-list">
        <!-- Link liberado -->
        <a href="<?= BASE_URL ?>?page=provabloq" class="category-link">
          <div class="blocoAcimaLinhaDiv">
            <div class="ano-semestre">
              <img src="<?= BLOQMENUPROVAS_ASSETS ?>/imgs/Today.svg" class="icon">
              <span>2025</span>
            </div>
            <span class="TxtSemestres">1º Semestre</span>
          </div>
          <div class="bottom-actions">
            <div class="action email"><span>PDF</span></div>
            <div class="divider"></div>
            <div class="action call"><span>Gabarito</span></div>
          </div>
        </a>

        <!-- Links bloqueados (com modal) -->
        <?php for ($i = 0; $i < 5; $i++): ?>
          <a href="javascript:void(0)" class="category-link" onclick="abrirModalLogin()">
            <div class="blocoAcimaLinhaDiv">
              <div class="ano-semestre">
                <img src="<?= BLOQMENUPROVAS_ASSETS ?>/imgs/Today.svg" class="icon">
                <span>2025</span>
              </div>
              <span class="TxtSemestres">1º Semestre</span>
            </div>
            <div class="bottom-actions">
              <div class="action email"><span>PDF</span></div>
              <div class="divider"></div>
              <div class="action call"><span>Gabarito</span></div>
            </div>
          </a>
        <?php endfor; ?>
      </div>
    </div>
  </main>

  <!-- Modal personalizado -->
  <div id="modalLogin" class="modal-overlay">
    <div class="modal-content">
    <img src="<?= HOME_ASSETS ?>imgs/LogoOrca.svg" id="logo-topo" alt="Abrir menu" />

      <h3>Acesso restrito</h3>
      <p>Você precisa estar logado para acessar esta opção.</p>
      <button onclick="fecharModalLogin()">OK</button>
    </div>
  </div>

  <!-- Scripts -->
  <script>
    function abrirModalLogin() {
      document.getElementById('modalLogin').style.display = 'flex';
    }

    function fecharModalLogin() {
      document.getElementById('modalLogin').style.display = 'none';
    }

    // Fecha modal clicando fora
    window.addEventListener('click', function(e) {
      const modal = document.getElementById('modalLogin');
      if (e.target === modal) {
        modal.style.display = 'none';
      }
    });
  </script>

  <script>
    // ========== CONFIGURAÇÃO DOS TEMAS ==========
    const ASSETS_BY_PAGE = {
      'home': "<?= HOME_ASSETS ?>",
      'cadastro': "<?= CADASTRO_ASSETS ?>",
      'bloqmenuprovas': "<?= BLOQMENUPROVAS_ASSETS ?>",
      'prova1': "<?= PROVA1_ASSETS ?>",
      'prova2': "<?= PROVA2_ASSETS ?>",
      'prova3': "<?= PROVA3_ASSETS ?>",
      'default': "<?= ASSETS_URL ?>"
    };

    const temas = {
      "default": "style.css",
      "dark": "darkstyle.css",
      "light": "lightstyle.css"
    };

    const temaOrder = ["default", "dark", "light"];
    let currentTemaIndex = 0;

    function detectCurrentPage() {
      const urlParams = new URLSearchParams(window.location.search);
      const pageParam = urlParams.get('page') || 'home';
      return pageParam in ASSETS_BY_PAGE ? pageParam : 'default';
    }

    function getSavedTheme() {
      return localStorage.getItem('siteTheme') || 'default';
    }

    function applyTheme(themeName) {
      const currentPage = detectCurrentPage();
      const assetsPath = ASSETS_BY_PAGE[currentPage];
      const themeFile = temas[themeName];
      const fullPath = `${assetsPath}css/${themeFile}`;

      let styleElement = document.getElementById('tema-estilo');
      if (!styleElement) {
        styleElement = document.createElement('link');
        styleElement.id = 'tema-estilo';
        styleElement.rel = 'stylesheet';
        document.head.appendChild(styleElement);
      }

      if (styleElement.href !== fullPath) {
        styleElement.onload = () => {
          document.dispatchEvent(new CustomEvent('themeChanged'));
        };
        styleElement.href = fullPath;
      }

      localStorage.setItem('siteTheme', themeName);
      currentTemaIndex = temaOrder.indexOf(themeName);
    }

    document.addEventListener("DOMContentLoaded", function() {
      applyTheme(getSavedTheme());

      setTimeout(() => {
        if (typeof setupScrollReveal === 'function') setupScrollReveal();
        if (typeof setupLoginBox === 'function') setupLoginBox();
      }, 50);

      if (typeof BroadcastChannel !== 'undefined') {
        const channel = new BroadcastChannel('theme_channel');
        channel.addEventListener('message', (event) => {
          if (event.data.type === 'themeChanged') {
            applyTheme(event.data.theme);
          }
        });
      }

      window.addEventListener('storage', function(event) {
        if (event.key === 'siteTheme') {
          applyTheme(event.newValue);
        }
      });
    });
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const loginBtn = document.querySelector('.login-container .category-link');
      const loginBox = document.querySelector('.login-box');

      if (loginBtn) {
        loginBtn.addEventListener('click', function(e) {
          e.preventDefault();
          loginBox.classList.toggle('show');
          document.querySelector('.login-form-container').style.display = 'block';
          document.querySelector('.cadastro-form-container').style.display = 'none';
        });
      }

      document.querySelectorAll('.toggle-form').forEach(link => {
        link.addEventListener('click', function(e) {
          e.preventDefault();
          const target = this.getAttribute('data-target');

          if (target === 'login') {
            document.querySelector('.login-form-container').style.display = 'block';
            document.querySelector('.cadastro-form-container').style.display = 'none';
          } else if (target === 'cadastro') {
            document.querySelector('.login-form-container').style.display = 'none';
            document.querySelector('.cadastro-form-container').style.display = 'block';
          } else if (target === 'esqueci') {
            alert('Funcionalidade de recuperação de senha ainda não implementada.');
          }
        });
      });

      // Sidebar toggle
      const logoTopo = document.getElementById('logo-topo');
      const sidebar = document.querySelector('.sidebar');

      logoTopo.addEventListener('click', function() {
        sidebar.classList.toggle('show');
      });
    });
  </script>

</body>
</html>
