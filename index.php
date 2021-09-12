<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dev Stuy</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/responsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="center two-columns">
            <h1>Dev Stuy</h1>
            <ul>
                <li>
                    <a href="#">
                        Sobre
                        <div class="line-heading"></div>
                    </a>  
                </li>
                <li>
                    <a href="#membros">
                        Membros
                        <div class="line-heading"></div>
                    </a>
                </li>
                <li>
                    <a href="#contato">
                        Contato
                        <div class="line-heading"></div>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="line-header">
        </div><!--line-->
    </header>

    <main>
        <div class="introduction">
            <div class="center">
                <h1>
                    Conheça a <strong>Dev Stuy</strong>
                </h1>
                <div class="line-heading">
                </div>
                
                <p>Somos um coletivo formado por alunos bolsistas do projeto #TeuFuturo. Através da tecnologia, queremos deixar a nossa marca no mundo. Com habilidades e características distintas, nós formamos um grupo colaborativo que anseia por novos desafios. Este projeto é apenas o começo da nossa história. Embarque com a gente nesta jornada!</p>
            </div><!-- center -->
        </div><!-- introduction -->


        <div class="description">
            <div class="center">
                <div class="two-columns">
                    <iframe width="510" height="300" src="https://www.youtube.com/embed/VpPrZA8ZHfk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <p>Em uma busca constante por aprimoramento, nossos integrantes apresentam interesses em diversas áreas, desde <strong>desenvolvimento mobile</strong> até <strong>perícia computacional</strong>. Com certeza, a IMED e o +PraTi foram essenciais em nosso autoconhecimento e para que soubessemos sobre as <strong>possibilidades</strong> no mercado de tecnologia. Esta Landing Page só demonstra que nossas diferenças, quando em conjunto, são capazes de criar algo novo que antes seria inimaginável. Com referências ao <strong>VaporWave</strong> e ao <strong>Brooklyn</strong> dos anos 80, convidamos você para uma viagem ao passado enquanto vislumbramos o futuro.</p>
                </div><!-- two-columns -->
                <div class="qualities">
                    <h2>
                        Qualidades e Características
                    </h2>
                    <div class="line-heading">
                    </div>
                    <div class="qualities-items">
                        <div class="quality">
                            <div class="circle">
                                <img src="public\assets\icons\ideia-criativa.png" alt="" class="qualities-icon">
                            </div>
                            <h3>Criativo</h3>
                        </div>
                        <div class="quality">
                            <div class="circle">
                                <img src="public\assets\icons\calma.png" alt="" class="qualities-icon">
                            </div>
                            <h3>Descontraído</h3>
                        </div>
                        <div class="quality">
                            <div class="circle">
                                <img src="public\assets\icons\equipe-de-trabalho.png" alt="" class="qualities-icon">
                            </div>
                            <h3>Multidisciplinar</h3>
                        </div>
                    </div>
                </div><!-- qualities -->
            </div><!-- center -->
        </div><!-- description -->
        <div id="membros"></div>

        <div class="members">
            <div class="center">
                <h2>
                    Conheça os integrantes
                </h2>
                <div class="line-heading">
                </div><!--line-->

                <div class="members-photos">
                    <a href="#scroll-jp">
                        <div class="member" id="joaopedro">
                            <div class="circle">
                                <img src="public\assets\members\alcalde.jpeg" class="pic">
                            </div>
                            <h3>João Pedro</h3>
                        </div><!--member-->
                    </a>
                    <a href="#scroll-lucas">
                        <div class="member" id="lucas">
                            <div class="circle">
                                <img src="public\assets\members\lucas.jpeg" class="pic">
                            </div>
                            <h3>Lucas</h3>
                        </div><!--member-->
                    </a>
                    <a href="#scroll-mari">
                        <div class="member" id="mari">
                            <div class="circle">
                                <img src="public\assets\members\mariana.jpeg" class="pic">
                            </div>
                            <h3>Mariana</h3>
                        </div><!--member-->
                    </a>    
                    <a href="#scroll-pedro">
                        <div class="member" id="pedro">
                            <div class="circle">
                                <img src="public\assets\members\pedro.jpeg" class="pic">
                            </div>
                            <h3>Pedro</h3>
                        </div><!--member-->
                    </a>
                </div><!-- members-photos -->
            </div><!-- center -->
        </div><!-- members -->

        <div id="scroll-jp" class="scroll-to-member"></div>

        <div class="personal">
            <div class="center">
                <div class="two-columns">
                    <div class="member-image">
                        <div class="circle">
                            <img src="public\assets\members\alcalde.jpeg">
                        </div>
                    </div>
                    <div class="member-information">
                        <h2>João Pedro</h2>
                        <div class="line-heading" id="line-jp">
                        </div><!--line-->
                        <p>Apaixonado por tecnologia, sempre fui entusiasta e gostei de me manter atualizado com as novidades do mercado. Esse interesse me levou a entrar no ensino médio técnico em informática no Instituto Federal (IFSul), onde atualmente curso o 3º ano. Sou uma pessoa dedicada e que gosta de desafios, tanto no âmbito profissional, quanto no pessoal.</p>
                        <div class="social-media">
                            <a href="https://www.linkedin.com/in/jo%C3%A3o-pedro-alcalde-guimar%C3%A3es-617523208/" target="_blank">
                                <div class="social-media-icon">
                                    <img src="public\assets\icons\linkedin.svg" alt="">
                                </div>
                            </a>
                            <a href="https://github.com/alcaldeguima" target="_blank">
                                <div class="social-media-icon">
                                    <img src="public\assets\icons\github.svg" alt="">
                                </div>
                            </a>
                            <a href="https://www.instagram.com/joao_pedroguima/" target="_blank">
                                <div class="social-media-icon">
                                    <img src="public\assets\icons\instagram.svg" alt="">
                                </div>
                            </a>
                        </div><!-- social media -->
                    </div><!-- member-information -->
                </div><!-- two-columns -->
            </div><!-- center -->
        </div><!-- personal -->

        <div id="scroll-lucas" class="scroll-to-member"></div>

        <div class="personal reversed">
            <div class="center">
                <div class="two-columns reversed">
                    <div class="member-image">
                        <div class="circle">
                            <img src="public\assets\members\lucas.jpeg">
                        </div>
                    </div>
                    <div class="member-information">
                        <h2>Lucas</h2>
                        <div class="line-heading" id="line-lucas">
                        </div><!--line-->
                        <p>Dedico diariamente um momento para estudar e colocar em prática os conhecimentos absorvidos, relativos a programação (tecnologia) e comunicação (soft skills). Além disso, gosto muito de apresentar projetos e utilizar a criatividade, com a finalidade de impactar as pessoas.</p>
                        <div class="social-media">
                            <a href="https://www.linkedin.com/in/lucas-santos-de-oliveira-projetos" target="_blank">
                                <div class="social-media-icon">
                                    <img src="public\assets\icons\linkedin.svg" alt="">
                                </div>
                            </a>
                            <a href="https://github.com/lucas-projetos" target="_blank">
                                <div class="social-media-icon">
                                    <img src="public\assets\icons\github.svg" alt="">
                                </div>
                            </a>
                            <a href="https://instagram.com/lucasoliveira4303?utm_medium=copy_link" target="_blank">
                                <div class="social-media-icon">
                                    <img src="public\assets\icons\instagram.svg" alt="">
                                </div>
                            </a>
                        </div><!-- social media -->
                    </div><!-- member-information -->
                </div><!-- two-columns -->
            </div><!-- center -->
        </div><!-- personal -->

        <div id="scroll-mari" class="scroll-to-member"></div>

        <div class="personal">
            <div class="center">
                <div class="two-columns">
                    <div class="member-image">
                        <div class="circle">
                            <img src="public\assets\members\mariana.jpeg">
                        </div>
                    </div>
                    <div class="member-information">
                        <h2>Mariana</h2>
                        <div class="line-heading" id="line-masiero">
                        </div><!--line-->
                        <p>Comecei a estudar sobre programação em abril de 2021 quando entrei para o projeto #TeuFuturo. Dentro do projeto conheci muitas pessoas experientes na área, as quais nos deram inúmeras dicas. Hoje eu pretendo seguir a carreira de engenharia computacional e futuramente trabalhar na perícia computacional.</p>
                        <div class="social-media">
                            <a href="https://www.linkedin.com/in/mariana-anita-masiero-b966a2210/" target="_blank">
                                <div class="social-media-icon">
                                    <img src="public\assets\icons\linkedin.svg" alt="">
                                </div>
                            </a>
                            <a href="https://github.com/mmari1" target="_blank">
                                <div class="social-media-icon">
                                    <img src="public\assets\icons\github.svg" alt="">
                                </div>
                            </a>
                            <a href="https://www.instagram.com/mariana_masiero/?hl=pt-br" target="_blank">
                                <div class="social-media-icon">
                                    <img src="public\assets\icons\instagram.svg" alt="">
                                </div>
                            </a>
                        </div><!-- social media -->
                    </div><!-- member-information -->
                </div><!-- two-columns -->
            </div><!-- center -->
        </div><!-- personal -->

        <div id="scroll-pedro" class="scroll-to-member"></div>

        <div class="personal reversed">
            <div class="center">
                <div class="two-columns reversed">
                    <div class="member-image">
                        <div class="circle">
                            <img src="public\assets\members\pedro.jpeg">
                        </div>
                    </div>
                    <div class="member-information">
                        <h2>Pedro</h2>
                        <div class="line-heading" id="line-pedro">
                        </div><!--line-->
                        <p>Desde criança, sempre gostei de criar. Me aventurei em todas as áreas possíveis para descobrir com o que eu quero trabalhar, mas foi pela programação que eu me apaixonei. Vejo a tecnologia como o caminho que escolhi para criar e deixar um impacto positivo no mundo.</p>
                        <div class="social-media">
                            <a href="https://www.linkedin.com/in/pzardin/" target="_blank">
                                <div class="social-media-icon">
                                    <img src="public\assets\icons\linkedin.svg" alt="">
                                </div>
                            </a>
                            <a href="https://github.com/PZard" target="_blank">
                                <div class="social-media-icon">
                                    <img src="public\assets\icons\github.svg" alt="">
                                </div>
                            </a>
                            <a href="https://www.instagram.com/pzardin/?hl=pt-br" target="_blank">
                                <div class="social-media-icon">
                                    <img src="public\assets\icons\instagram.svg" alt="">
                                </div>
                            </a>
                        </div><!-- social media -->
                    </div><!-- member-information -->
                </div><!-- two-columns -->
            </div><!-- center -->
        </div><!-- personal -->
        <div id="contato"></div>

        <div class="contact">
            <div class="center">
                <form method="post" class="form">
                    <h2>Contato</h2>
                    <input type="text" name="name" id="name" placeholder="Nome Completo" required>
                    <input type="text" name="email" id="email" placeholder="Email" required>
                    <input type="submit" value="Enviar" name="button" id="button">
                </form>
            </div>
        </div><!-- contact -->
    </main>

    <footer>
        <div>
            <h1>Dev Stuy</h1>
            <p>Copyright &copy; 2021 | Dev Stuy</p>
            <div class="line-footer"></div>
        </div>
    </footer>

    <div class="popup-background">
        <div class="popup">
            <div class="popup-content">
                <h2>E-mail enviado <br> com sucesso!</h2>
                <button id="popup-button">Ok</button>
            </div>           
        </div>
    </div>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="public/js/form.js"></script>
</body>
</html>


