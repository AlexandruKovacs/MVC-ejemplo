<?php

require_once 'models/PersonasModel.php';

$personas = new PersonasModel();
$datos = $personas->get_personas();

require_once 'views/PersonasView.phtml';

?>