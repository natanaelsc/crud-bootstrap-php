<!DOCTYPE html> <!-- Templete Projeto, Inicio da Página HTML -->
<html>
<head>
    <!-- Metadados -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Título -->
    <title>CRUD com Bootstrap</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo BASEURL_BOOTSTRAP; ?>">
    <!-- CSS -->
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
        main {
          margin-top: 50px;
        }
    </style>
    <link rel="stylesheet" href="<?php echo BASEURL_CSS; ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo BASEURL; ?>index.php">CRUD</a>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">    
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Clientes
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="<?php echo BASEURL; ?>customers">Gerenciar Clientes</a></li>
                    <li><a class="dropdown-item" href="<?php echo BASEURL; ?>customers/add.php">Novo Cliente</a></li>
                </ul>
            </li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <main class="container">