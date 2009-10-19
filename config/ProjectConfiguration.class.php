<?php

require_once '/usr/share/php/symfony-1.3-dev/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin', 'sfSymfonyTemplatingViewPlugin');
  }

  public function loadPlugins()
  {
    parent::loadPlugins();

    $this->pluginConfigurations['sfSymfonyTemplatingViewPlugin']->connectTests();
  }
}
