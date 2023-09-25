<?php

// phpcs:ignoreFile

$databases['default']['default'] = [
  'database' => 'tugboat',
  'username' => 'tugboat',
  'password' => 'tugboat',
  'host' => 'mysql',
  'port' => '3306',
  'driver' => 'mysql',
  'prefix' => '',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'collation' => 'utf8mb4_general_ci',
];

$settings['config_sync_directory'] = '../config';

$settings['hash_salt'] = hash('sha256', getenv('TUGBOAT_REPO_ID'));

$settings['file_private_path'] = '../files-private';
