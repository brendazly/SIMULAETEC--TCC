<!DOCTYPE html>
<html lang="pt-br">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SimulaEtec</title>

  <style>
    @font-face {
      font-family: 'Poppins';
      src: url('<?= HOME_ASSETS ?>fonts/Poppins.ttf') format('truetype');
      font-weight: normal;
      font-style: normal;
    }

    body {
      font-family: 'Poppins';
      margin: 0;
      padding: 0;
      background-color: #f0f2f5;
      color: #333;
    }
  </style>


  <link id="tema-estilo" rel="stylesheet" href="">

</head>

<body>



  <header id="topo">
  <div class="header-top">

    <!-- Logo -->
    <div class="header-content">
      <!-- <img src="<?= HOME_ASSETS ?>imgs/Logo.svg" alt="Logo SimulaEtec" class="logo"> -->
      <h4><span class="highlight">SIMULA</span>ETEC</h4>
    </div>

    <!-- Menu central -->
    <nav class="categories-nav">
      <ul class="categories-list">
        <li class="category-item1">
        <a href="<?= BASE_URL ?>?page=bloqmenuprovas" class="category-link1">Home</a>
        </li>
        <li class="category-item">
          <a href="<?= BASE_URL ?>?page=bloqmenuprovas" class="category-link1">Provas anteriores</a>
        </li>

        <li class="category-item">
          <a href="<?= BASE_URL ?>?page=bloqmenuprovas" class="category-link1">Guia de Estudos</a>
        </li>

        <li>
          <button class="mode-btn" onclick="trocarEstilo()">Trocar Estilo</button>
        </li>
      </ul>
    </nav>

    <!-- Login alinhado à direita -->
    <div class="login-container">
      <a href="<?= BASE_URL ?>login" class="category-link">Login</a>
      <img src="<?= HOME_ASSETS ?>imgs/iconp.png" alt="Ícone de perfil" class="icon-img">
    </div>

  </div>

  <!-- Caixa de login/cadastro abaixo do header -->
  <div class="login-box <?= (isset($_GET['show_login']) || !empty($mensagem)) ? 'show' : '' ?>">
    <?php if (!empty($mensagem)): ?>
        <p style="color: red; font-weight: bold;"><?= htmlspecialchars($mensagem) ?></p>
    <?php endif; ?>

    <!-- Formulário de Login -->
    <div class="form-container login-form-container active">
      <h3 class="login-title">Login</h3>
      <form class="login-form" action="<?= BASE_URL ?>?page=login" method="post">
        <input type="email" name="email" placeholder="E-mail" class="login-input" required>
        <input type="password" name="senha" placeholder="Senha" class="login-input" required>
        <button type="submit" class="login-button">Entrar</button>
      </form>
      <a href="#" class="register-link toggle-form">Criar nova conta</a>
      <a href="#" class="register-link toggle-form">Esqueceu a senha?</a>
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
      <a href="#" class="register-link toggle-form">Já tenho uma conta</a>
    </div>
  </div>
</header>





  <!-- <div class="container"> -->
    <div class="box1">

    <div class="intro">


      <div class="texto">


       <div class="frase">    

              <h2>
                <span class="texto-pt-roxo">ESTUDE</span> 
                <span class="texto-pt-preto">PARA O<br>VESTIBULINHO&nbsp;&nbsp;</span>
              </h2> 
        </div>

          <p>Prepare-se para o Vestibulinho das Etecs com nosso simulado online. Acesse questões semelhantes às das provas reais e melhore seu desempenho.</p>
        </a>

        <div class="botoes">
        <button class="btn" id="btn1-roxo"> Guia de estudos </button>
        <button class="btn">Provas anteriores</button>
      </div>

            </div>

</div>

<div class="iconsText">
  <div class="iconItem">
    <img src="<?= HOME_ASSETS ?>imgs/svgs/ok.svg" alt="Análise de Desempenho">
    <p class="descIcons">Análise de Desempenho</p>
  </div>

  <div class="iconItem">
    <img src="<?= HOME_ASSETS ?>imgs/svgs/timer.svg" alt="Cronômetro">
    <p class="descIcons">Cronômetro</p>
  </div>

  <div class="iconItem">
    <img src="<?= HOME_ASSETS ?>imgs/svgs/ferramenta.svg" alt="Correção Imediata">
    <p class="descIcons">Correção Imediata</p>
  </div>
</div>
             <!-- <img src="<?= HOME_ASSETS ?>imgs/svgs/estudante.svg" id="estudante" alt="Estudante"> -->


    </div>

  </div>
          <img src="<?= HOME_ASSETS ?>imgs/svgs/estudante.svg" id="estudante" alt="Estudante"> 



    <div class="sobre scroll-reveal scroll-right" id="meio">

      <div class="texto2">
        <h4>Análise de desempenho</h4>
        <p>Conheça as funcionalidades que vc poderá utulizar qui no Simulaetec</p>
      </div>

  <!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cards</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="retangulos">
    <!-- Card 1 -->
    <div class="retangulo">
      <img src="<?= HOME_ASSETS ?>imgs/svgs/caderno.svg" alt="Estudante" class="icone">
      <h3>Estatísticas</h3>
      <p>Geração da contabilidade de acertos e erros realizados durante o simulado.</p>
      <ul>
        <li>Acertos</li>
        <li>Erros</li>
      </ul>
    </div>

    <!-- Card 2 -->
    <div class="retangulo">
      <img src="<?= HOME_ASSETS ?>imgs/svgs/fogo.svg" alt="Correção imediata" class="icone">
      <h3>Correção imediata</h3>
      <p>Assim que terminar o simulado, entregamos todas as questões corrigidas.</p>
      <ul>
        <li>Acompanhe seu progresso</li>
        <li>Evolução</li>
      </ul>
    </div>

    <!-- Card 3 -->
    <div class="retangulo">
      <img src="<?= HOME_ASSETS ?>imgs/svgs/timer.svg" alt="Cronômetro" class="icone">
      <h3>Cronômetro</h3>
      <p>Utilizamos um cronômetro integrado para ajudar você a medir e controlar melhor o tempo de estudo.</p>
      <ul>
        <li>Tempo real</li>
        <li>Incentivo</li>
      </ul>
    </div>
  </div>
</body>
</html>






<!-- FOOTER -->
<footer class="footer">
  <div class="footer-container">
    <!-- Coluna 1 -->
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

    <!-- Coluna 2 -->
    <div class="footer-col">
      <h3>Créditos</h3>
      <p>Imagem de mulher jovem pulando e segurando livros, por
        <a href="https://www.freepik.com" target="_blank">Freepik</a>.
      </p>
    </div>

    <!-- Coluna 3 -->
    <div class="footer-col">
      <h3>Links Rápidos</h3>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Simulado</a></li>
        <li><a href="#">Provas anteriores</a></li>
        <li><a href="#">Guia de estudos</a></li>
      </ul>
    </div>
  </div>

  <!-- Linha inferior -->
  <div class="footer-bottom">
    <p>© 2025 ETEC Itanhaém. Todos os direitos reservados.</p>
  </div>
</footer>



</body>



<script>
  // ========== CONFIGURAÇÃO DOS TEMAS ==========
  const ASSETS_BY_PAGE = {
    'home': "<?= HOME_ASSETS ?>",
    'cadastro': "<?= CADASTRO_ASSETS ?>",
    'perfil': "<?= PERFIL_ASSETS ?>",
    'menuprovas': "<?= MENUPROVAS_ASSETS ?>",
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

  // ========== FUNÇÕES DOS TEMAS ==========
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

  function trocarEstilo() {
    if (detectCurrentPage() === 'home') {
      currentTemaIndex = (currentTemaIndex + 1) % temaOrder.length;
      const nextTheme = temaOrder[currentTemaIndex];
      applyTheme(nextTheme);

      if (typeof BroadcastChannel !== 'undefined') {
        const channel = new BroadcastChannel('theme_channel');
        channel.postMessage({
          type: 'themeChanged',
          theme: nextTheme
        });
      }
    }
  }

  // ========== SCROLL REVEAL ==========
  function setupScrollReveal() {
    const elements = document.querySelectorAll(".scroll-reveal");
    let lastScrollTop = window.scrollY;

    function revealOnScroll() {
      const currentScrollTop = window.scrollY;
      const windowHeight = window.innerHeight;
      const middleScreen = windowHeight / 2;

      elements.forEach((element) => {
        const elementTop = element.getBoundingClientRect().top;
        const elementBottom = element.getBoundingClientRect().bottom;

        if (elementTop < middleScreen && elementBottom > middleScreen) {
          element.classList.add("show");
        } else if (currentScrollTop < lastScrollTop) {
          element.classList.remove("show");
        }
      });

      lastScrollTop = currentScrollTop;
    }

    window.addEventListener("scroll", revealOnScroll);
    revealOnScroll();
  }

  // ========== LOGIN BOX ==========
 function setupLoginBox() {
  console.log('Configurando login box...'); // Debug
  
  const loginLink = document.querySelector('.login-container .category-link');
  console.log('Login link encontrado:', loginLink); // Debug

  if (loginLink) {
    const toggleLoginBox = (e) => {
      e.preventDefault();
      const loginBox = document.querySelector('.login-box');
      if (loginBox) {
        loginBox.classList.toggle('show');
        console.log('Login box show class:', loginBox.classList.contains('show')); // Debug

        if (loginBox.classList.contains('show')) {
          setTimeout(() => {
            document.addEventListener('click', closeOnClickOutside);
          }, 10);
        } else {
          document.removeEventListener('click', closeOnClickOutside);
        }
      }
    };

    const closeOnClickOutside = (e) => {
      const loginBox = document.querySelector('.login-box');
      const isClickInside = loginBox.contains(e.target) || e.target === loginLink;

      if (!isClickInside && loginBox.classList.contains('show')) {
        loginBox.classList.remove('show');
        document.removeEventListener('click', closeOnClickOutside);
      }
    };

    loginLink.addEventListener('click', toggleLoginBox);
    console.log('Event listener adicionado ao login link'); // Debug
  }
}

// ========== TOGGLE FORMULÁRIO LOGIN/CADASTRO ==========
function setupFormToggle() {
    const toggleLinks = document.querySelectorAll('.toggle-form');
    const loginForm = document.querySelector('.login-form-container');
    const cadastroForm = document.querySelector('.cadastro-form-container');

    toggleLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Alterna entre os formulários
            loginForm.classList.toggle('active');
            cadastroForm.classList.toggle('active');
        });
    });
}
  // ========== INICIALIZAÇÃO ==========
// ========== INICIALIZAÇÃO ==========
document.addEventListener("DOMContentLoaded", function() {
  console.log('DOM completamente carregado'); // Debug

  // 1. Aplica o tema
  applyTheme(getSavedTheme());

  // 2. Configura tudo após pequeno delay para garantir que o DOM esteja pronto
  setTimeout(() => {
    if (typeof setupScrollReveal === "function") setupScrollReveal();
    if (typeof setupLoginBox === "function") setupLoginBox();
    if (typeof setupFormToggle === "function") setupFormToggle();
    console.log('Todas as funções de setup executadas'); // Debug
  }, 100);

  // Sincronização entre abas
  if (typeof BroadcastChannel !== 'undefined') {
    const channel = new BroadcastChannel('theme_channel');
    channel.addEventListener('message', (event) => {
      if (event.data.type === 'themeChanged') {
        applyTheme(event.data.theme);
      }
    });
  }

  // Sincronização via localStorage
  window.addEventListener('storage', function(event) {
    if (event.key === 'siteTheme') {
      applyTheme(event.newValue);
    }
  });
});

// ========== EVENTOS CUSTOMIZADOS ==========
document.addEventListener('themeChanged', () => {
  if (typeof setupScrollReveal === 'function') {
    setupScrollReveal();
  }
});

</script>



</body>

</html>