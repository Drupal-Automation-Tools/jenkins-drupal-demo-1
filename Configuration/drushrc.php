<?php
/**
 * @file drushrc.php
 * Drush configuration settings.
 */

/**
 * Customize this associative array with your own tables. This is the list of
 * tables whose *data* is skipped by the 'sql-dump' and 'sql-sync' commands when
 * a structure-tables-key is provided. You may add new tables to the existing
 * array or add a new element.
 */
$options['structure-tables'] = array(
 'common' => array(
   'cache',
   'cache_filter',
   'cache_menu',
   'cache_page',
   'history',
   'sessions',
   'watchdog',
  ),
);

/**
 * Customize this associative array with your own tables. This is the list of
 * tables that are entirely omitted by the 'sql-dump' and 'sql-sync' commands
 * when a skip-tables-key is provided. This is useful if your database contains
 * non Drupal tables used by some other application or during a migration for
 * example. You may add new tables to the existing array or add a new element.
 */
// $options['skip-tables'] = array(
//  'common' => array(
//    'migration_data1', 'migration_data2'
//   ),
// );

/**
 * Set command-specific defaults for different drush commands.
 */
// Default module downloads into the Install Profile.
$command_specific['dl'] = array('destination' => 'profiles/drupaldemo/modules/contrib');
// Destination for SQL-DUMP commands of local environments
$options['result-file'] = '../Database/drupaldemo.sql';
