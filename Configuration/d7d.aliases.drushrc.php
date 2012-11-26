<?php
/**
 * @file d7d.aliases.drushrc.php
 * Drush aliases for Drupal Demo site
 */

/**
 * local: Local development instance on developer's machine
 * accessible as: drupaldemo.local
 * drush alias: @d7d.local
 */
$aliases['local'] = array(
  'root'             => '/Applications/MAMP/htdocs/drupaldemo/Drupal',
  'db-url'           => 'mysql://root:passw0rd@localhost/drupaldemo',
  'command-specific' => array(
    'sql-sync' => array(
      'no-cache'  => TRUE
    )
  ),
  'path-aliases'     => array(
    '%dump-dir'  => '/tmp',
    '%files'     => 'sites/default/files',
  )
);

/**
 * dev: VPS development testing instance (NavArts server)
 * accessible as: drupaldemo.dev.navigationarts.com
 * drush alias: @d7d.dev
 */
$aliases['dev'] = array(
  'root'             => '/home/d7ddev/capistrano/current',
  'db-url'           => 'mysql://d7ddev_drupal:VFVgm@.rF@G5@localhost/d7ddev_drupal',
  'os'               => 'Linux',
  'remote-host'      => '209.50.248.232',
/** 'remote-password' => '[Wykqx0SMFz6',  For reference only */
  'remote-user'      => 'd7ddev',
  'ssh-options'      => '-p 6624',
  'command-specific' => array(
    'sql-sync' => array(
      'no-cache'  => TRUE
    )
  ),
  'path-aliases'     => array(
    '%dump-dir'  => '/tmp',
    '%files'     => '/home/d7ddev/capistrano/shared/default/files',
  )
);

/**
 * qa: VPS QA staging instance (NavArts server)
 * accessible as: drupaldemo.qa.navigationarts.com
 * drush alias: @d7d.qa
 */
$aliases['qa'] = array(
  'root'             => '/home/d7dqa/capistrano/current',
  'db-url'           => 'mysql://d7dqa_drupal:=_i9yOxk7Bb3@localhost/d7dqa_drupal',
  'os'               => 'Linux',
  'remote-host'      => '209.50.248.232',
/** 'remote-password' => 'S3OHAipKHx,8',  For reference only */
  'remote-user'      => 'd7dqa',
  'ssh-options'      => '-p 6624',
  'command-specific' => array(
    'sql-sync' => array(
      'no-cache'  => TRUE
    )
  ),
  'path-aliases'     => array(
    '%dump-dir'  => '/tmp',
    '%files'     => '/home/d7dqa/capistrano/shared/default/files',
  )
);

/**
 * live: VPS live demo instance (NavArts server)
 * accessible as: drupaldemo.navigationarts.com
 * drush alias: @d7d.live
 */
$aliases['live'] = array(
  'root'             => '/home/d7dlive/capistrano/current',
  'db-url'           => 'mysql://d7dlive_drupal:TOD++E=sDR.^@localhost/d7dlive_drupal',
  'os'               => 'Linux',
  'remote-host'      => '209.50.248.232',
  'remote-user'      => 'd7dlive',
/** 'remote-password' => '8vTl[,N$RnJo',  For reference only */
  'ssh-options'      => '-p 6624',
  'command-specific' => array(
    'sql-sync' => array(
      'no-cache'  => TRUE
    )
  ),
  'path-aliases'     => array(
    '%dump-dir'  => '/tmp',
    '%files'     => '/home/d7dlive/capistrano/shared/default/files',
  )
);
