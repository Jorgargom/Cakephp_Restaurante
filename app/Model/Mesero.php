<?php 


class Mesero extends AppModel
{
    public $validate = array(
        'dni' => array(
            'rule' => 'notEmpty'
        ),
        'nombre' => array(
            'rule' => 'notEmpty'
        ),
        'apellido' => array(
            'rule' => 'notEmpty'
        ),
        'telefono' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty'
            ),
            'numeric' => array(
                'rule' => 'numeric',
                'message' => 'Solo números'
            )
        )
    );
}











?>