<!--
+ DESENVOLVIDO POR CLEBERSON CORREIA LIMA COPYRIGHT 2017 | TODOS OS DIREITOS RESERVADOS
+ CPD ATACADÃO GUARULHOS 
+ GUARULHOS/SP
-->

<?php include("title.php");?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="content-type" content="text/xhtml"; charset="utf-8"/>

    <title>Atacad&atilde;o Guarulhos</title>
    <link rel="icon shortcut" type="image/x-icon" href="images/favicon.ico" />

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="img/icons/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/icons/114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/icons/72x72.png">
    <link rel="apple-touch-icon-precomposed" href="img/icons/default.png">

    <!-- Google Fonts 
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet">-->

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/owl.theme.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/owl.transitions.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">

    <!--Your custom colour override - predefined colours are: colour-blue.css, colour-green.css, colour-lavander.css, orange is default-->
    <link href="#" id="colour-scheme" rel="stylesheet">

</head>

<body class="page-index has-hero">
  
  <!-- <body onload="window.open('bannerCLB.php','_blank', 'width=615, height=515')"></body> -->
  
  <!--<body onload="window.open('ban.html','_blank', 'width=615, height=515')"></body>
   
    <!--Papai noel -->
    <div class="img-responsive" id="noel">                
        <img src="D:\Atacadão\Portal Atacadão New\img\icons\Noel.png" class="img-responsive">
    </div>

    <div id="background-wrapper" class="buildings" data-stellar-background-ratio="0.1">

        <!-- ======== @Region: #navigation ======== -->
        <div id="navigation" class="wrapper">
            <!--Hidden Header Region-->
            <div class="header-hidden collapse">
                <div class="header-hidden-inner container">
                    <div class="row">
                        <div class="col-md-3">
                            <h3>
                                Atacad&atilde;o Guarulhos
                            </h3>
                            <p></p>
                        </div>
                        <div class="col-md-3">
                            <!--@todo: replace with company contact details-->
                            <h3>
                                Contato
                            </h3>
                            <address>
                    <strong>Atacad&atilde;o Guarulhos</strong><br>
                    <abbr title="Address"><i class="fa fa-pushpin"></i></abbr>
                  Av. Ot&aacute;vio Braga de Mesquita, 3116  Jardim S&atilde;o Geraldo
                  <br>
                  <abbr title="Phone"><i class="fa fa-phone"></i></abbr>
                  11 2404-7444
                  <br>
                  <abbr title="Email"><i class="fa fa-envelope-alt"></i></abbr>
                  cpdguarulhos@atacadao.com.br
                </address>
                        </div>
                        <div class="col-md-6">
                            <!--Colour & Background Switch for demo - @todo: remove in production-->
                            <h3>
                                Tema
                            </h3>
                            <div class="switcher">
                                <div class="cols">
                                    Background:
                                    <br>
                                    <!--  <a href="#benches" class="background benches active" title="Benches">Benches</a> -->
                                    <a href="#buildings" class="background buildings " title="Buildings">Buildings</a>
                                </div>
                                <div class="cols">
                                    Cor:
                                    <br>
                                    <a href="#orange" class="colour orange active" title="Orange">Orange</a>
                                    <a href="#green" class="colour green active" title="Green">Green</a>
                                </div>
                            </div>
                            <p>
                                <small></small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!--Header & navbar-branding region-->
            <div class="header">
                <div class="header-inner container">
                    <div class="row">
                        <div class="col-md-8">
                            <!--navbar-branding/logo - hidden image tag & site name so things like Facebook to pick up, actual logo set via CSS for flexibility -->
                            <a class="navbar-brand" href="index.php" title="Home">
                                <h1 class="hidden">
                                    <img src="/img/logo-greenNat.png" alt="Flexor Logo"> Atacad&atilde;o
                                </h1>
                            </a>
                            <div class="navbar-slogan">
                                Portal Atacad&atilde;o Guarulhos
                                <br> Por CPD Atacad&atilde;o Guarulhos/SP
                            </div>
                        </div>
                        <!--header rightside-->
                        <div class="col-md-4">
                            <!--user menu-->
                            <ul class="list-inline user-menu pull-right">
                                <li class="hidden-xs"><i class="fa fa-sign-in text-primary"></i> <a href="loginAt.php" class="text-uppercase" target="_blank">Login</a></li>
                                <li><a class="btn btn-primary btn-hh-trigger" role="button" data-toggle="collapse" data-target=".header-hidden">Open</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="navbar navbar-default">
                    <!--mobile collapse menu button-->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <!--social media icons-->
                    <div class="navbar-text social-media social-media-inline pull-right">
                        <!--@todo: replace with company social media details-->
                        <a target="_blank" href="https://twitter.com/atacadao_sa"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="https://www.facebook.com/Atacadaosa.Oficial?fref=ts"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                    <!--everything within this div is collapsed on mobile-->
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav" id="main-menu">
                           
                            <div class="icon-link  social-media social-media-inline pull-left">
                                <a href="index.php" target="_blank"><i class="fa fa-home"></i></a>
                            </div>
                           <!-- <li class="icon-link social-media social-media-inline pull-left" >
                                <a href="index.php"><i class="fa fa-home"></i></a>
                            </li>-->
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Sistemas<b class="caret"></b></a>
                                <!-- Dropdown Menu -->
                                <ul class="dropdown-menu">
                                    <li class="dropdown-header">Links Sistemas</li>
                                    <li class="item"><a href="http://tplgru.atacadao.com.br:8080/" tabindex="-1" target="_blank">Sistema TPLinux</a></li>
                                    <li class="item"><a href="http://srvuca049/" tabindex="-1" target="_blank">Sistema RUB</a></li>
                                    <li class="item"><a href="http://srvweb2.atacadao.com.br/siscom/" tabindex="-1" target="_blank">Sistema Promotores</a></li>                       
                                    <li class="item"><a href="http://guarulhos.br-atacadao.corp/recargas/login.php" tabindex="-1" target="_blank">Sistema de Recarga</a></li>                                   
                                    <li class="item"><a href="http://portal.atacadao.com.br/suporte/mfd/index.html" tabindex="-1" target="_blank">Sistema Controle de RDZ</a></li>                                    
                                    <!--<li class="dropdown-footer">Dropdown footer</li>-->
                                </ul>
                            </li>
                            

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portais<b class="caret"></b></a>
                                <!-- Dropdown Menu -->
                                <ul class="dropdown-menu">
                                    <li class="dropdown-header">Links Portais</li>
                                    <li class="item"><a href="https://intranet12c.br-atacadao.corp/forms/frmservlet?config=dbadm" tabindex="-1" target="_blank">Portal Administrativo</a></li>
                                    <li class="item"><a href="https://intranet12c.br-atacadao.corp/forms/frmservlet?config=dbcom" tabindex="-1" target="_blank">Portal Comercial</a></li>
                                    <li class="item"><a href="https://intranet12c.br-atacadao.corp/forms/frmservlet?config=menthor" tabindex="-1" target="_blank">Portal Menthor</a></li>
									<li class="item"><a href="http://servernotes.atacadao.com.br/Portal/pwn.nsf/Principal?openform" tabindex="-1" target="_blank">Portal WorkNotes</a></li>
									<li class="item"><a href="http://matrizweb.atacadao.com.br/portal" tabindex="-1" target="_blank">Portal Corporativo</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Chamados<b class="caret"></b></a>
                                <!-- Dropdown Menu -->
                                <ul class="dropdown-menu">
                                    <li class="dropdown-header">Links Chamados</li>
                                    <li class="item"><a href="http://matrizweb.atacadao.com.br/portal/atacadao?evento=menu" tabindex="-1" target="_blank">Chamados Matriz</a></li>
                                    <li class="item"><a href="http://www.tecnoset.com.br" tabindex="-1" target="_blank">Chamados TecnoSet</a></li>
                                    <li class="item"><a href="http://csc.br-atacadao.corp/agente.html" tabindex="-1" target="_blank">Chamados CSC/Agente</a></li>
                                    <li class="item"><a href="https://www.ibm.com/support/servicerequest/" tabindex="-1" target="_blank">Chamados IBM</a></li>
                                    <li class="item"><a href="http://csc.br-atacadao.corp/cliente.html" tabindex="-1" target="_blank">Chamados CSC<a href="http://guarulhos/csc/PDM2017-002-%20Abertura%20de%20Chamados%20por%20Usu%C3%A1rio%20(CSC).pdf" tabindex="-1" target="_blank">Manual de uso CSC</a></a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Consultas<b class="caret"></b></a>
                                <!-- Dropdown Menu -->
                                <ul class="dropdown-menu">
                                    <li class="dropdown-header">Links Consultas</li>
                                    <li class="item"><a href="http://www.boavistaservicos.com.br/" tabindex="-1" target="_blank">Consulta BoaVista/SCPC</a></li>
                                    <li class="item"><a href="http://srvweb2/operacao/filiais/" tabindex="-1" target="_blank">Consulta CNPJ</a></li>
                                    <li class="item"><a href="https://satsp.fazenda.sp.gov.br/COMSAT/Public/ConsultaPublica/ConsultaPublicaCfe.aspx">Consulta Cupom Fiscal SAT</a></li>
                                    <li class="item"><a href=" http://nfe.portal.br-atacadao.corp/NFe_GDeWeb/Login.aspx" tabindex="-1" target="_blank">Consulta Triangulus NFe</a></li>
                                    <li><a href="https://sitef.portal.br-atacadao.corp/sitef/" tabindex="-1" target="_blank">Consulta SITEF</a></li>
                                    <li><a href="http://admldap.atacadao.com.br/user/" tabindex="-1" target="_blank">Consulta LDAP</a></li>
                                    <li><a href="http://admldap.atacadao.com.br/trocasenha/" tabindex="-1" target="_blank">-> LDAP/Troca de Senha</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Matriz<b class="caret"></b></a>
                                <!-- Dropdown Menu -->
                                <ul class="dropdown-menu">
                                    <li class="dropdown-header">Links Matriz</li>
                                    <li class="item"><a href="http://intranet.atacadao.com.br/" tabindex="-1" target="_blank">Matriz Intranet</a></li>
                                    <!--<li class="dropdown-footer">Dropdown footer</li>-->
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Inform&aacute;tica<b class="caret"></b></a>
                                <!-- Dropdown Menu -->
                                <ul class="dropdown-menu">
                                    <li class="dropdown-header">Links Inform&aacute;tica</li>
                                    <li class="item"><a href="http://srvweb2.atacadao.com.br/siscom/func_programas/" tabindex="-1" target="_blank">Pesquisa de Par&acirc;metros</a></li>
                                    <li class="item"><a href="http://srvnaplic2.atacadao.com.br/intranet/docSuporte.nsf/porTitulo?OpenView&Titulo=por%20T%EDtulo" tabindex="-1" target="_blank">Procedimentos</a></li>
                                    <li class="item"><a href=" http://guarulhos.br-atacadao.corp/monitor.php" tabindex="-1" target="_blank">Monitoramento</a></li>
                                    <li class="item"><a href="http://guarulhos.br-atacadao.corp/manuais.htm" tabindex="-1" target="_blank">Manuais</a></li>
                                    <li class="item"><a href="https://www.webenergy.com.br/STM-ADN/Login/Login.aspx" tabindex="-1" target="_blank">WebEnergy</a></li>
                                    <li class="item"><a href="http://srvadmldap.atacadao.com.br/pg-win/#" tabindex="-1" target="_blank">WSUS Windows Update</a></li>
									<li class="item"><a href="http://srvadmldap/principal.php?pg=abertura&lc=sys" tabindex="-1" target="_blank">Coletores e Licenças</a></li>
                                    <!--<li class="item"><a onclick='window.open("indexCA50.php?login=<?echo $user ?>","alfredo","titlebar=no,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,fullscreen=no,resizable=no,menubar=no,width=800,height=600")'>Controle de Coletores</a></li>-->
                                    <li class="item"><a href="http://guarulhos.br-atacadao.corp/ca50/menu.php" tabindex="-1" target="_blank">Controle de Coletores</a></li>
                                    <!--<li class="dropdown-footer">Dropdown footer</li>-->
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        
            <div class="hero" id="highlighted">
                <div class="inner">
                    <!--Slideshow-->
                    <div id="highlighted-slider" class="container">
                        <div class="item-slider" data-toggle="owlcarousel" data-owlcarousel-settings='{"singleItem":true, "navigation":true, "transitionStyle":"fadeUp"}'>
                            <!--Slideshow content-->
                            <!--Slide 1-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6 col-md-push-6 item-caption">
                                        <h2 class="h1 text-weight-light">
                                            Atacad&atilde;o <span class="text-primary">Guarulhos</span>
                                        </h2>
                                        <h4>
                                            O <strong id="nat">Natal</strong> vem chegando, entre no clima de festa aqui do Atacad&atilde;o
                                        </h4>
                                        <p>Dezembro está na porta e com ele a expectativa de que faltam poucos dias para o natal, época em que a maioria das pessoas espera o ano inteiro e em que o clima de festas toma conta de lares e estabelecimentos</p>
                                        <a href="https://www.atacadao.com.br/noticias/e-tempo-de-festas-no-atacadao-90" class="btn btn-more btn-lg i-right" target="_blank">Saiba mais <i class="fa fa-plus"></i></a>
                                    </div>
                                   
                                   <!--
                                    <div class="col-md-6 col-md-push-6 item-caption">
                                        <h2 class="h1 text-weight-light">
                                            Atacad&atilde;o <span class="text-primary">Guarulhos</span>
                                        </h2>
                                        <h4>
                                            Nosso maior Patrim&ocirc;nio.
                                        </h4>
                                        <p>O nosso maior patrim&ocirc;nio s&acirc;o as pessoas que fazem desta empresa um lugar no qual se tem orgulho em ser Atacad&atilde;o. Com comprometimento, inconformismo e motiva&ccedil;&atilde;o, os colaboradores transformam a empresa em uma extens&acirc;o de suas casas. Nesse ambiente, somos motivados a liderar e formar pessoas, de modo que estas se desenvolvam e evoluam tanto profissional quanto pessoalmente, para, desta forma, atingirmos cada vez mais o sentimento de valoriza&ccedil;&atilde;o nas pessoas.</p>
                                        <a href="https://www.atacadao.com.br" class="btn btn-more btn-lg i-right" target="_blank">Saiba mais <i class="fa fa-plus"></i></a>
                                    </div>
                                    -->
                                    <div class="col-md-6 col-md-pull-6 hidden-xs">
                                        <img src="img/slides/Christimas.bmp" alt="Slide 1" class="center-block img-responsive">
                                    </div>
                                </div>
                            </div>
                            <!--Slide 2-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6 text-right-md item-caption">
                                        <h2 class="h1 text-weight-light">
                                            <span class="text-primary">Atacad&atilde;o</span> Guarulhos
                                        </h2>
                                        <h4>
                                            Somos todos diferentes e &eacute; isso que nos faz mais fortes.
                                        </h4>
                                        <p>Essa &eacute; a premissa da fam&iacute;lia Atacad&atilde;o, que atua em todos os estados brasileiros e conta com mais de 40 mil colaboradores. Felizmente todos diferentes! Por isso, o Atacad&atilde;o investe na perenidade de um ambiente feito para todas as culturas, ra&ccedil;as, credos, orienta&ccedil;&atilde;o sexual, defici&ecirc;ncias.</p>
                                        <a href="https://www.atacadao.com.br" class="btn btn-more btn-lg" target="_blank"><i class="fa fa-plus"></i>Saiba mais</a>
                                    </div>
                                    <div class="col-md-6 hidden-xs">
                                        <img src="img/slides/md_3_88.png" alt="Slide 2" class="center-block img-responsive">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ======== content ======== -->
        <div id="content">
            <!-- Fotos -->
            <div class="mission text-center block block-pd-sm block-bg-noise">
                <div class="container">
                    <h2 class="text-shadow-white">
                        <p>Fotos da filial</p>
                        <img src="img/slides/pic.png" class="img-responsive" id="pic">
                        <p></p>
                        <a target="_blank" href="eventos.php" class="btn btn-more"><i class="fa fa-plus"></i>Veja as fotos</a>
                    </h2>
                </div>
                
            <div class="container">
                <h2 class="text-shadow-white">
                       <p>Aniversariantes do m&ecirc;s</p>
                        <img src="img/icons/bolo.png" class="img-resposive" id="picNiver" href="http://portal.atacadao.com.br/aniversariantes.php"  >
                        <p></p>
                        <a target="_blank" href="http://portal.atacadao.com.br/aniversariantes.php" class="btn btn-more"><i class="fa fa-plus"></i>Veja aqui</a>
                        <!--href="http://guarulhos.br-atacadao.corp/eventos.php"-->
                    </h2>
                </div>
            </div>    
            
       
                 
            <!--Showcase-->
            <!--<div class="showcase block block-border-bottom-grey">-->
                <div class="container">
                    <h2 class="block-title">
                        Links &Uacute;teis
                    </h2>
                    <p>Abaixo voc&ecirc; encontra alguns links &uacute;teis para a realiza&ccedil;&atilde;o de servi&ccedil;os</p>
                    <div class="item-carousel" data-toggle="owlcarousel" data-owlcarousel-settings='{"items":4, "pagination":false, "navigation":true, "itemsScaleUp":true}'>
                        <div class="item">
                            <a href="cardapio.html" class="overlay-wrapper" target="_blank">
                <img src="img/showcase/project1.png" alt="Project 1 image" class="img-responsive underlay">
                <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Cardápio</span> </span>
                </span>
              </a>
                            <div class="item-details bg-noise">
                                <h4 class="item-title">
                                    <a href="#">Cardápio</a>
                                </h4>
                                <a href="cardapio.html" class="btn btn-more" target="_blank"><i class="fa fa-plus"></i>Veja aqui</a>
                            </div>
                        </div>
                        <div class="item">
                            <a href="http://portal.atacadao.com.br/telefonia/ramais/index.html" class="overlay-wrapper" target="_blank">
                <img src="img/showcase/project2.png" alt="Project 2 image" class="img-responsive underlay">
                <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Busca Ramais</span> </span>
                </span>
              </a>
                            <div class="item-details bg-noise">
                                <h4 class="item-title">
                                    <a href="#">Ramais</a>
                                </h4>
                                <a href="http://portal.atacadao.com.br/telefonia/ramais/index.html" class="btn btn-more" target="_blank"><i class="fa fa-plus"></i>Veja aqui</a>
                            </div>
                        </div>
                        <div class="item">
                            <a href="http://conferencia.atacadao.com.br/index.php" class="overlay-wrapper" target="_blank">
                <img src="img/showcase/project3.png" alt="Project 3 image" class="img-responsive underlay">
                <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Frente de Caixa</span> </span>
                </span>
              </a>
                            <div class="item-details bg-noise">
                                <h4 class="item-title">
                                    <a href="#">Frente de Caixa</a>
                                </h4>
                                <a href="http://conferencia.atacadao.com.br/index.php" class="btn btn-more" target="_blank"><i class="fa fa-plus"></i>Veja aqui</a>
                            </div>
                        </div>
                        <div class="item">
                            <a href="canalrh.php" class="overlay-wrapper" target="_blank">
                <img src="img/showcase/project4.png" alt="Project 4 image" class="img-responsive underlay">
                <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Recursos Humanos</span> </span>
                </span>
              </a>
                            <div class="item-details bg-noise">
                                <h4 class="item-title">
                                    <a href="#">Recursos Humanos</a>
                                </h4>
                                <a href="canalrh.php" class="btn btn-more" target="_blank"><i class="fa fa-plus"></i>Veja aqui</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Services --
    <!-- Call out block -->
    <div class="block block-pd-sm block-bg-primary">
        <div class="container">
            <div class="row">
                <h3 class="col-md-4">
                    Alguns de Nossos Fornecedores
                </h3>
                <div class="col-md-8">
                    <div class="row">
                        <!--Client logos should be within a 120px wide by 60px height image canvas-->
                        <div class="col-xs-6 col-md-2">
                            <a href="#" title="Client 1">
                  <img src="img/clients/logo_50.png" alt="Client 1 logo" class="img-responsive">
                </a>
                        </div>
                        <div class="col-xs-6 col-md-2">
                            <a href="#" title="Client 2">
                  <img src="img/clients/logo_35.png" alt="Client 2 logo" class="img-responsive">
                </a>
                        </div>
                        <div class="col-xs-6 col-md-2">
                            <a href="#" title="Client 3">
                  <img src="img/clients/logo_36.png" alt="Client 3 logo" class="img-responsive">
                </a>
                        </div>
                        <div class="col-xs-6 col-md-2">
                            <a href="#" title="Client 4">
                  <img src="img/clients/logo_43.png" alt="Client 4 logo" class="img-responsive">
                </a>
                        </div>
                        <div class="col-xs-6 col-md-2">
                            <a href="#" title="Client 5">
                  <img src="img/clients/logo_46.png" alt="Client 5 logo" class="img-responsive">
                </a>
                        </div>
                        <div class="col-xs-6 col-md-2">
                            <a href="#" title="Client 6">
                  <img src="img/clients/logo_38.png" alt="Client 6 logo" class="img-responsive">
                </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======= footer ======== -->
    <footer id="footer" class="block block-bg-grey-dark" data-block-bg-img="img/bg_footer-map.png" data-stellar-background-ratio="">

        <div class="row subfooter">
            <!--@todo: replace with company copyright details-->
            <div class="col-md-7">


                <p>
                    <strong>Atacad&atilde;o Guarulhos</strong><br /> Av. Ot&aacute;vio Braga de Mesquita, 3116 - Jardim S&atilde;o Geraldo<br/> CEP 07140-230 - Guarulhos - SP<br /> Tel.: +55 11 2404-7444<br />CNPJ: 75.315.333/0049-53
                </p>
                <!--<hr />-->
                <p>Copyright 2017 &copy; C.C.L.</p>
                <div class="credits">
                    <a href="#">Desenvolvido</a> por CPD Guarulhos
                </div>
            </div>
            <div class="col-md-5">
                <ul class="list-inline pull-right">
                    <li><a href="#">Termos</a></li>
                    <li><a href="#">Privacidade</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </div>
        </div>

        <a href="#top" class="scrolltop">Top</a>

    </footer>

   <!-- Required JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/stellar/stellar.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="contactform/contactform.js"></script>

    <!-- Template Specisifc Custom Javascript File -->
    <script src="js/custom.js"></script>

    <!--Custom scripts demo background & colour switcher - OPTIONAL -->
    <script src="js/color-switcher.js"></script>

    <!--Contactform script -->
    <script src="contactform/contactform.js"></script>

</body>

</html>
