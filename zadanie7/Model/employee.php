<?php
App::uses('AppModel', 'Model');
/**
 * employee Model
 *
 */
class employee extends AppModel {
  var $validate = array('etat'=> array('rule' => 'notBlank'),
  'nazwisko'=>array('rule' => 'notBlank'),
  'placa_pod' => array('rule' => array('range', 0, 2000),
  'message' => 'Płaca musi być z zakreso 0-2000'));
  
}
