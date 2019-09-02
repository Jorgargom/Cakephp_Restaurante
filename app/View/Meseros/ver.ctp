<h2>Detalle del mesero <?php echo $mesero['Mesero']['nombre'] ;?> <?php echo $mesero['Mesero']['apellido'] ;?></h2>

<p><strong>DNI: <?php echo $mesero['Mesero']['dni'] ;?></strong></p>
<p><strong>Teléfono: <?php echo $mesero['Mesero']['telefono'] ;?></strong></p>
<p><strong>Creado el: <?php echo $this->Time->format('d-m-Y ; h:i A', $mesero['Mesero']['created']);  ;?></strong></p>
<p><strong>Modificado el: <?php echo $this->Time->format('d-m-Y ; h:i A', $mesero['Mesero']['modified']) ;?></strong></p>

<?php echo $this->Html->link('Volver a la lista de meseros', array('controller' => 'meseros', 'action' => 'index')) ;?>
