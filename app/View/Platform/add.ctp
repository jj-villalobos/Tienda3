<!DOCTYPE html>
<html>
<body>

<h5>Añadir una nueva plataforma a la lista</h5>
<h1></h1>
<?php
        echo $this->Form->create('Platform');
        echo $this->Form->input('id', array('type' => 'hidden'));
        echo $this->Form->input('name', array('label' => 'Nombre de la plataforma:'));
        echo $this->Form->end('Guardar');
        ?>
</body>
</html>