<?php
require_once "CarroDAO.php";
CarroDAO::cadastrar($_GET);

echo "<h1>Deu boa!</h1>";