<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meseros</title>
</head>
<body>
    <h2>Lista de meseros</h2>

    <?php echo $this->Html->link('Crear mesero', array('controller' => 'meseros', 'action' => 'nuevo')) ;?>
   
    <table>
        <tr>
            <td>Id</td>
            <td>Nombre</td>
            <td>Apellidos</td>
            <td>Detalle</td>
            <td>Editar</td>
            <td>Eliminar</td>
        </tr>
         <?php foreach ($meseros as $mesero): ?>
            <tr>
                <td><?php echo $mesero['Mesero']['id'];?></td>
                <td><?php echo $mesero['Mesero']['nombre'];?></td>
                <td><?php echo $mesero['Mesero']['apellido'];?></td>
                <td><?php echo $this->Html->link('Detalle', array('controller' => 'meseros', 'action' => 'ver', $mesero['Mesero']['id'])) ;?></td>
                <td><?php echo $this->Html->link('Editar', array('controller' => 'meseros', 'action' => 'editar', $mesero['Mesero']['id'])) ;?></td>
                <td><?php echo $this->Form->postLink('Eliminar mesero', array('controller' => 'meseros', 'action' => 'eliminar', $mesero['Mesero']['id']), array('confirm' => 'Eliminar a '.$mesero['Mesero']['nombre'])) ;?></td>
            </tr>
        <?php endforeach; ?>     
    </table>
    
</body>
</html>

