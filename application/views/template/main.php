<!-- Header -->
<header id="header-home">
      <div class="container">
        <nav id="main-nav">
          <img src="<?= base_url('dist/img/logo.png') ?>" alt="DS" id="logo">
          <ul>
            <li><a href="#home" class="current">Início</a></li>
            <li><a href="#home-a">Sobre</a></li>
            <li><a href="#home-b">Projetos</a></li>
            <li><a href="#home-c">Contato</a></li>
          </ul>
        </nav>
        <div class="header-content">
          <h1>Olá, eu sou Débora</h1>
          <p class="h1">D<span class="h1 txt-type" data-wait="3000" data-words='["esenvolvedora Frontend"]'></span></p>
          <a href="#home-b" class="btn-light my-2">Projetos</a>
        </div>
      </div>
    </header>
    <!-- Section A: About Me -->
    <section id="home-a" class="text-center py-2">
      <div class="container">
        <h2 class="section-title">Sobre Mim</h2>
        <div class="bottom-line"></div>
          <p class="lead">
            Olá! Eu me chamo Débora Silva, moro em Ouro Fino - MG, sou formada em Engenharia de Computação e sou desenvolvedora frontend desde 2018. Adquiri boa parte da minha experiência fazendo implementação e manutenção de sites. Sou apaixonada pelos desafios que a tecnologia proporciona e tenho extremo interesse na busca de conhecimento na área.
          </p>
          <div class="specials">
            <div>
              <i class="fas fa-laptop-code fa-2x"></i>
              <h3>Frontend</h3>
              <ul>
                <li>React/Redux</li>
                <li>Javascript</li>
                <li>Node.js</li>
                <li>HTML/CSS/SASS</li>
                <li>Bootstrap</li>
              </ul>      
            </div>
            <div>
              <i class="fas fa-database fa-2x"></i>
              <h3>Backend</h3>
              <ul>
                <li>PHP</li>
                <li>CodeIgniter</li>
                <li>MySQL</li>
                <li>MongoDB</li>
              </ul>
            </div>
            <div>
              <i class="fas fa-tools fa-2x"></i>
              <h3>Outros</h3>
              <ul>
                <li>Wordpress</p>
              </ul>
            </div>
          </div>
      </div>
    </section>

    <!-- Section B: Projects -->
    <section id="home-b" class="text-center py-2">
      <div class="container">
        <h2 class="section-title">Projetos</h2>
        <div class="bottom-line"></div>
        <div class="projects">

          <div class="project">
            <div class="project-image">
              <img src="<?= base_url('dist/img/items/item1.png')?>" alt="Projeto 1">
            </div>
            <div class="project-text">
              <div class="project-text-wrap">
                <p class="project-text-category">Design</p>
                <h2 class="item-text-title">Great Gradients</h2>
              </div>
            </div>
          </div>

          <div class="project">
            <div class="project-image">
              <img src="<?= base_url('dist/img/items/item2.png') ?>" alt="Projeto 2">
            </div>
            <div class="project-text">
              <div class="project-text-wrap">
                <p class="project-text-category">UI/UX</p>
                <h2 class="item-text-title">World Experience</h2>
              </div>
            </div>
          </div>

          <div class="project">
            <div class="project-image">
              <img src="<?= base_url('dist/img/items/item3.png') ?>" alt="Projeto 3">
            </div>
            <div class="project-text">
              <div class="project-text-wrap">
                <p class="project-text-category">Photography and Design</p>
                <h2 class="item-text-title">Vanishing</h2>
              </div>
            </div>
          </div>

        </div> <!-- ./projects -->
      </div>  
    </section>

    <!-- Section C: Contact -->
    <section id="home-c" class="text-center py-2">
        <div class="container">
          <h2 class="section-title">Contato</h2>
          <div class="bottom-line"></div>
          <p class="lead">Entre em contato comigo</p>
          <?php echo validation_errors('<div class="alert alert-danger">','</div>') ?>
          <?php
            if($enviado == 1) {
              echo '<div class="alert alert-success"> E-mail enviado! </div>';
            } else if($enviado == 2) {
              echo '<div class="alert alert-danger"> E-mail não enviado! </div>';
            }
          ?>
            <form action="<?= base_url('portfolio/enviar_mensagem') ?>" method="POST">
              <div class="text-fields">
                <input type="text" name="nome" value="<?= $this->input->post('nome') ?>" class="text-input name-input" placeholder="Nome">
                <input type="email" name="email" value="<?= $this->input->post('email') ?>" class="text-input email-input" placeholder="E-mail">
                <textarea class="text-input message-input" value="<?= $this->input->post('email') ?>" name="mensagem" placeholder="Digite sua mensagem"></textarea>
              </div>
              <button type="submit" class="btn-dark">Enviar</button>
            </form>
        </div>  
    </section>

      <!-- Section D: Contact Info -->
      <section id="home-d" class="text-center py-2 bg-dark">
          <div class="container">
            <div class="contact-info">
              <div class="contact-border">
                <i class="fas fa-envelope fa-2x"></i>
                <h3>E-mail</h3>
                <p>debora_rss@hotmail.com</p>
              </div>
              <div class="contact-border">
                  <i class="fas fa-phone fa-2x"></i>
                  <h3>Celular</h3>
                  <p>(35) 9 9708-2589</p>
                </div>
            </div>
          </div>  
      </section>

      <!-- Section E: Tagline -->
      <section id="home-e" class="bg-main py-4">
        <div class="container">
          <h1>Vamos começar o seu novo projeto!</h1>
        </div> 
      </section>

      <!-- Footer -->
      <footer id="main-footer">
        <div class="footer-content container">
          <p>Copyright &copy; 2019. Todos os direitos reservados.</p>
          <div class="social">
            <a href="https://github.com/Deborarss" target="_blank"><i class="fab fa-github"></i></a>
            <a href="https://www.linkedin.com/in/deborarss/" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="https://www.facebook.com/debora.silva.39545464" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/debora.rss22" target="_blank"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </footer>