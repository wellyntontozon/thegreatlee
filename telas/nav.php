<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="/../bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            
          <a class="navbar-brand" href="index.php">Project name</a>

          <div class="dropdown navbar-text">
              <a class="navbar-link" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  <b><?php  Require_once '/../controllers/Sessao.php'; session::valida('id');echo session::get('nome');?></b>
                  <span class="caret"></span>
              </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </div>
      </div>
    </div>	
</nav>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="/../bootstrap/js/bootstrap.min.js"></script>

        <!-- <script src="/../controllers/criarservicos.js"></script> -->


    
   