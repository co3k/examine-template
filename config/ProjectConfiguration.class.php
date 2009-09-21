<?php

require_once '/usr/share/php/symfony-1.3-dev/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin');

    require_once sfConfig::get('sf_lib_dir').'/vendor/SymfonyTemplating/sfTemplateAutoloader.php';
    sfTemplateAutoloader::register();
  }
}
