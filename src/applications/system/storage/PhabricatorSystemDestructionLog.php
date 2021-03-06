<?php

final class PhabricatorSystemDestructionLog extends PhabricatorSystemDAO {

  protected $objectClass;
  protected $rootLogID;
  protected $objectPHID;
  protected $objectMonogram;
  protected $epoch;

  public function getConfiguration() {
    return array(
      self::CONFIG_TIMESTAMPS => false,
      self::CONFIG_COLUMN_SCHEMA => array(
        'objectClass' => 'text128',
        'rootLogID' => 'id?',
        'objectPHID' => 'phid?',
        'objectMonogram' => 'text64?',
      ),
    ) + parent::getConfiguration();
  }

}
