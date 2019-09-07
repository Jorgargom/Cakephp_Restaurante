<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meseros</title>
</head>
<body>
    <h2>Lista de mesas</h2>

    <?php echo $this->Html->link('Crear mesa', array('controller' => 'mesas', 'action' => 'nuevo')) ;?>
   
    <table>
        <tr>
            <td>Serie</td>
            <td>Puestos</td>
            <td>Posición</td>
            <td>Creado</td>
            <td>Modificado</td>
            <td>Responsable</td>
            <td>Editar</td>
            <td>Eliminar</td>
        </tr>
         <?php foreach ($mesas as $mesa): ?>
            <tr>
                <td><?php echo $mesa['Mesa']['serie'];?></td>
                <td><?php echo $mesa['Mesa']['puestos'];?></td>
                <td><?php echo $mesa['Mesa']['posicion'];?></td>
                <td><?php echo $this->Time->format('d-m-Y ; h:i A', $mesa['Mesa']['created']) ;?></strong></p></td>
                <td><?php echo $this->Time->format('d-m-Y ; h:i A', $mesa['Mesa']['modified']) ;?></strong></p></td>
                <td><?php echo $this->Html->link($mesa['Mesero']['nombre'].' '.$mesa['Mesero']['apellido'], array('controller' => 'meseros', 'action' => 'ver', $mesa['Mesero']['id'])) ;?></td>
                <td><?php echo $this->Html->link('Editar', array('controller' => 'mesas', 'action' => 'editar', $mesa['Mesa']['id'])) ;?></td>
                <td><?php echo $this->Form->postLink('Eliminar', array('controller' => 'mesas', 'action' => 'eliminar', $mesa['Mesa']['id']), array('confirm' => 'Elimiar mesa '.$mesa['Mesa']['id'])) ;?></td>
            </tr>
        <?php endforeach; ?>     
    </table>
    
</body>
</html>
