<!DOCTYPE html>
<html lang="pt-br">

<head>
<link rel="icon" href="<?= HOME_ASSETS ?>imgs/LogoOrca.svg" type="image/svg+xml">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Semestres - SimulaEtec</title>
      <script src="https://cdn.tailwindcss.com"></script>


  <!-- <img src="<?= HOME_ASSETS ?>imgs/svgs/iconmenu.png" id="logo-topo" alt="Abrir menu" /> -->

  <!-- <link rel="preload" href="bloqmenuprovas/css/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'"> -->
  <noscript>
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

<div class="mb-24 sm:mb-32">
<div class="mx-auto max-w-7xl px-6 lg:px-8 pt-16">
    <div class="mx-auto max-w-2xl lg:text-center">
      <h2 class="text-base/7 font-semibold text-indigo-600">SIMULAETEC</h2>
      <p class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl lg:text-balance">Escolha o semestre e a prova que deseja iniciar.</p>
      <p class="mt-6 text-lg/8 text-gray-700">O simulado do Vestibulinho ajuda você a praticar com foco, identificar pontos fracos e ganhar confiança.
É uma preparação que melhora seu desempenho.</p>
    </div>

  <!-- Conteúdo principal -->
  <main class="main-content">
    <div class="prova-list">
      <!-- <div class="textos">
        <h1>Simulados <span class="etec">ETEC</span></h1>
        <h2 class="texto-modal">Faça o login para ter acesso a todas as provas.<br></h2>
      </div> -->

      <div class="links-container prova-list">

  <!-- ITEM 2025 -->
  <div class="flex items-center bg-white rounded-lg shadow-md w-80 mb-4" style="height: 4.25rem;">
    <div class="bg-[#7541FA] flex items-center justify-center w-90 h-50 text-white font-bold text-lg rounded mr-4 ml-2">
      <img src="<?= BLOQMENUPROVAS_ASSETS ?>/imgs/Today.svg" class="w-14 h-13 invert" style="transform: scale(0.7);">
    </div>
    <div class="flex-1 px-4 py-2 text-left">
      <p class="text-gray-900 font-semibold">2025</p>
      <p class="text-gray-500 text-sm">1º Semestre</p>
    </div>
    <div class="relative px-2">
      <button class="menuBtn text-black hover:text-gray-600 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 6h.01M12 12h.01M12 18h.01" />
        </svg>
      </button>
      <div class="dropdownMenu hidden absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-lg z-10">
        <button onclick="window.location.href='https://fatweb.s3.amazonaws.com/vestibulinhoetec/gabarito/20251468190/Gabarito.pdf'" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Ver Gabarito</button>
        <button onclick="window.location.href='https://fatweb.s3.amazonaws.com/vestibulinhoetec/gabarito/20251468190/Prova.pdf'" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Ver Prova</button>
      </div>
    </div>
  </div>

  <!-- ITEM 2024 -->
  <div class="flex items-center bg-white rounded-lg shadow-md w-80 mb-4" style="height: 4.25rem;">
    <div class="bg-[#e60076] flex items-center justify-center w-12 h-12 text-white font-bold text-lg rounded mr-4 ml-2">
      <img src="<?= BLOQMENUPROVAS_ASSETS ?>/imgs/Today.svg" class="w-10 h-10 invert">
    </div>
    <div class="flex-1 px-4 py-2 text-left">
      <p class="text-gray-900 font-semibold">2024</p>
      <p class="text-gray-500 text-sm">1º Semestre</p>
    </div>
    <div class="relative px-2">
      <button class="menuBtn text-black hover:text-gray-600 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 6h.01M12 12h.01M12 18h.01" />
        </svg>
      </button>
      <div class="dropdownMenu hidden absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-lg z-10">
        <button onclick="window.location.href='https://fatweb.s3.amazonaws.com/vestibulinhoetec/gabarito/20242918930/Gabarito-retificado.pdf'" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Ver Gabarito</button>
        <button onclick="window.location.href='https://fatweb.s3.amazonaws.com/vestibulinhoetec/gabarito/20242918930/Prova.pdf'" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Ver Prova</button>
      </div>
    </div>
  </div>

  <!-- ITEM 2023 -->
  <div class="flex items-center bg-white rounded-lg shadow-md w-80 mb-4">
    <div class="bg-[#f0b100] flex items-center justify-center w-12 h-12 text-white font-bold text-lg rounded mr-4 ml-2">
      <img src="<?= BLOQMENUPROVAS_ASSETS ?>/imgs/Today.svg" class="w-10 h-10 invert">
    </div>
    <div class="flex-1 px-4 py-2 text-left">
      <p class="text-gray-900 font-semibold">2023</p>
      <p class="text-gray-500 text-sm">2º Semestre</p>
    </div>
    <div class="relative px-2">
      <button class="menuBtn text-black hover:text-gray-600 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 6h.01M12 12h.01M12 18h.01" />
        </svg>
      </button>
      <div class="dropdownMenu hidden absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-lg z-10">
        <button onclick="window.location.href='https://fatweb.s3.amazonaws.com/vestibulinhoetec/gabarito/202323718/Gabarito.pdf'" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Ver Gabarito</button>
        <button onclick="window.location.href='https://fatweb.s3.amazonaws.com/vestibulinhoetec/gabarito/202323718/Prova.pdf'" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Ver Prova</button>

      </div>
    </div>
  </div>

  <!-- ITEM 2022 -->
  <div class="flex items-center bg-white rounded-lg shadow-md w-80 mb-4" style="height: 4.25rem;">
    <div class="bg-[#F9705E] flex items-center justify-center w-12 h-12 text-white font-bold text-lg rounded mr-4 ml-2">
      <img src="<?= BLOQMENUPROVAS_ASSETS ?>/imgs/Today.svg" class="w-10 h-10 invert">
    </div>
    <div class="flex-1 px-4 py-2 text-left">
      <p class="text-gray-900 font-semibold">2022</p>
      <p class="text-gray-500 text-sm">2º Semestre</p>
    </div>
    <div class="relative px-2">
      <button class="menuBtn text-black hover:text-gray-600 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 6h.01M12 12h.01M12 18h.01" />
        </svg>
      </button>
      <div class="dropdownMenu hidden absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-lg z-10">
        <button onclick="window.location.href='https://fatweb.s3.amazonaws.com/vestibulinhoetec/gabarito/2022027483/Gabarito.pdf'" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Ver Gabarito</button>
        <button onclick="window.location.href='hhttps://fatweb.s3.amazonaws.com/vestibulinhoetec/gabarito/2022027483/Prova.pdf'" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Ver Prova</button>
      </div>
    </div>
  </div>

  <!-- ITEM 2021 -->
  <div class="flex items-center bg-white rounded-lg shadow-md w-80 mb-4">
    <div class="bg-[#2898ee] flex items-center justify-center w-12 h-12 text-white font-bold text-lg rounded mr-4 ml-2">
      <img src="<?= BLOQMENUPROVAS_ASSETS ?>/imgs/Today.svg" class="w-10 h-10 invert">
    </div>
    <div class="flex-1 px-4 py-2 text-left">
      <p class="text-gray-900 font-semibold">2020</p>
      <p class="text-gray-500 text-sm">1º Semestre</p>
    </div>
    <div class="relative px-2">
      <button class="menuBtn text-black hover:text-gray-600 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 6h.01M12 12h.01M12 18h.01" />
        </svg>
      </button>
      <div class="dropdownMenu hidden absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-lg z-10">
        <button onclick="window.location.href='https://fatweb.s3.amazonaws.com/vestibulinhoetec/gabarito/202017430/Gabarito_1modulo-retificado.pdf'" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Ver Gabarito</button>
        <button onclick="window.location.href='https://fatweb.s3.amazonaws.com/vestibulinhoetec/gabarito/202017430/Prova_1modulo.pdf'" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Ver Prova</button>
      </div>
    </div>
  </div>

  <!-- ITEM 2020 -->
  <div class="flex items-center bg-white rounded-lg shadow-md w-80 mb-4">
    <div class="bg-[#7178df] flex items-center justify-center w-12 h-12 text-white font-bold text-lg rounded mr-4 ml-2">
      <img src="<?= BLOQMENUPROVAS_ASSETS ?>/imgs/Today.svg" class="w-10 h-10 invert">
    </div>
    <div class="flex-1 px-4 py-2 text-left">
      <p class="text-gray-900 font-semibold">2019</p>
      <p class="text-gray-500 text-sm">2º Semestre</p>
    </div>
    <div class="relative px-2">
      <button class="menuBtn text-black hover:text-gray-600 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 6h.01M12 12h.01M12 18h.01" />
        </svg>
      </button>
      <div class="dropdownMenu hidden absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-lg z-10">
        <button onclick="window.location.href='https://fatweb.s3.amazonaws.com/vestibulinhoetec/gabarito/201927134/Gabarito_1modulo.pdf'" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Ver Gabarito</button>
        <button onclick="window.location.href='https://fatweb.s3.amazonaws.com/vestibulinhoetec/gabarito/201927134/Prova_1modulo.pdf'" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Ver Prova</button>
      </div>
    </div>
  </div>

</div>

<script>
  // Para cada botão com class "menuBtn"
  document.querySelectorAll('.menuBtn').forEach(button => {
    button.addEventListener('click', e => {
      e.stopPropagation(); // evita fechar ao clicar no próprio botão

      const dropdown = button.nextElementSibling; // dropdown logo depois do botão

      // Fecha todos os dropdowns exceto o atual
      document.querySelectorAll('.dropdownMenu').forEach(menu => {
        if (menu !== dropdown) menu.classList.add('hidden');
      });

      // Alterna visibilidade do dropdown atual
      dropdown.classList.toggle('hidden');
    });
  });

  // Fecha dropdowns ao clicar fora
  window.addEventListener('click', () => {
    document.querySelectorAll('.dropdownMenu').forEach(menu => {
      menu.classList.add('hidden');
    });
  });
</script>

<!-- FIM -->

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
