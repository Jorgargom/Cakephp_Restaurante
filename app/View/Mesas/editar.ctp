<h2>Editar Mesa</h2>

<?php echo $this->Form->create('Mesa') ;?>
    <?php echo $this->Form->input('serie') ;?>
    <?php echo $this->Form->input('puestos') ;?>
    <?php echo $this->Form->input('posicion', array('rows' => 3 )) ;?>
    <?php echo $this->Form->input('mesero_id') ;?>
<?php echo $this->Form->end('Editar Mesa') ;?>

<?php echo $this->Html->link('Volver a la lista de mesas', array('controller' => 'mesas', 'action' => 'index')) ;?>
