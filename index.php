<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Biblioteca</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
  		<div class="container">
    		<a class="navbar-brand" href="#">Biblioteca</a>
    		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      			<span class="navbar-toggler-icon"></span>
    		</button>
    		<div class="collapse navbar-collapse" id="navbarSupportedContent">
      			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
        		<li class="nav-item">
          			<a class="nav-link active" aria-current="page" href="index.php">Home</a>
        		</li>
        		<li class="nav-item dropdown">
          			<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            		Categorias
          			</a>
          			<ul class="dropdown-menu">
            			<li><a class="dropdown-item" href="?page=categoria-listar">Listar</a></li>
            			<li><a class="dropdown-item" href="?page=categoria-cadastrar">Cadastrar</a></li>
          			</ul>
        		</li>
        		<li class="nav-item dropdown">
          			<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            		Livros
          			</a>
          			<ul class="dropdown-menu">
            			<li><a class="dropdown-item" href="?page=livros-listar">Listar</a></li>
            			<li><a class="dropdown-item" href="?page=livros-cadastrar">Cadastrar</a></li>
          			</ul>
        		</li>
        		<li class="nav-item dropdown">
          			<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            		Funcionários
          			</a>
          			<ul class="dropdown-menu">
            			<li><a class="dropdown-item" href="?page=funcionario-listar">Listar</a></li>
            			<li><a class="dropdown-item" href="?page=funcionario-cadastrar">Cadastrar</a></li>
          			</ul>
        		</li>
        		<li class="nav-item dropdown">
          			<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            		Usuários
          			</a>
          			<ul class="dropdown-menu">
            			<li><a class="dropdown-item" href="?page=usuarios-listar">Listar</a></li>
            			<li><a class="dropdown-item" href="?page=usuarios-cadastrar">Cadastrar</a></li>
          			</ul>
        		</li>
        		<li class="nav-item dropdown">
          			<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            		Empréstimos
          			</a>
          			<ul class="dropdown-menu">
            			<li><a class="dropdown-item" href="?page=emprestimos-listar">Listar</a></li>
            			<li><a class="dropdown-item" href="?page=emprestimos-cadastrar">Cadastrar</a></li>
          			</ul>
        		</li>
        		<li class="nav-item">
          			<a class="nav-link disabled" aria-disabled="true">Disabled</a>
        		</li>
      			</ul>
      			<form class="d-flex" role="search">
        			<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        			<button class="btn btn-outline-success" type="submit">Search</button>
      			</form>
    		</div>
  		</div>
	</nav>

	<div class="container mt-5">
		<div class="row">
			<div class="col">
				<?php
					//include da conexão
					include('config.php');

					//include das páginas
					switch (@$_REQUEST['page']) {
						//categoria
						case 'categoria-listar':
							include('categoria-listar.php');
							break;
						case 'categoria-cadastrar':
							include('categoria-cadastrar.php');
							break;
						case 'categoria-editar':
							include('categoria-editar.php');
							break;
						case 'categoria-salvar':
							include('categoria-salvar.php');
							break;

						//livros
						case 'livros-listar':
							include('livros-listar.php');
							break;
						case 'livros-cadastrar':
							include('livros-cadastrar.php');
							break;
						case 'livros-editar':
							include('livros-editar.php');
							break;
						case 'livros-salvar':
							include('livros-salvar.php');
							break;

						//funcionarios
						case 'funcionario-listar':
							include('funcionario-listar.php');
							break;
						case 'funcionario-cadastrar':
							include('funcionario-cadastrar.php');
							break;
						case 'funcionario-editar':
							include('funcionario-editar.php');
							break;
						case 'funcionario-salvar':
							include('funcionario-salvar.php');
							break;

						//usuarios
						case 'usuarios-listar':
							include('usuarios-listar.php');
							break;
						case 'usuarios-cadastrar':
							include('usuarios-cadastrar.php');
							break;
						case 'usuarios-editar':
							include('usuarios-editar.php');
							break;
						case 'usuarios-salvar':
							include('usuarios-salvar.php');
							break;

						//emprestimos
						case 'emprestimos-listar':
							include('emprestimos-listar.php');
							break;
						case 'emprestimos-cadastrar':
							include('emprestimos-cadastrar.php');
							break;
						case 'emprestimos-editar':
							include('emprestimos-editar.php');
							break;
						case 'emprestimos-salvar':
							include('emprestimos-salvar.php');
							break;

						default:
							print "<h1>Seja bem vindo ao sistema da Biblioteca</h1>";

							print "<b>Biblioteca é um espaço físico em que se guardam livros, dispostos
							ordenamente para estudos e consultas. É a coleção de livros. É uma palavrade origem
							grega. Biblioteca é todo espaço, seja ele concreto ou virtual que reúne coleção de informações
							de qualquer tipo, sejam livros, enciclopédias, dicionários, monografias, revista, folhetos, etc.,
							ou digitalizados e armazenados em CD, DVD ou Banco de Dados.
							
							As bibliotecas podem ser públicas ou particulares. Nas bibliotecas públicas o acesso aos livros e
							outros materiais, costumam ser gratuitos, sendo permitidos o empréstimo de livros por um determinado
							período. As bibliotecas públicas têm o objetivo de propiciar o acesso à informações que sejam úteis para
							os indivíduos, e que levem cultura à sociedade. Existem também as bibliotecas comunitárias, que geralmente
							situam-se em bairros da periferia, e nem sempre recebem apoio do governo.
							
							As bibliotecas particulares podem ser mantidaspor instituições de ensino privadas, fundações
							instituições de pesquisa ou grandes colecionadores. Abrindo suas portaspara estudantes, leitores 
							e pesquisadores.
							
							Existem também as bibliotecas especializadas, que oferecem coleções de informações sobre
							determinado assunto, tais como medicina, matemática, cinema e outros.</b>";
					}
				?>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>