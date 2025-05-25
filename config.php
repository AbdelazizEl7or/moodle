<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'turntable.proxy.rlwy.net';
$CFG->dbname    = 'starfish_lms';
$CFG->dbuser    = 'postgres';
$CFG->dbpass    = 'JFFIVnQJvZzvaZVJgcWhHZJfvBndJbpd';
$CFG->dbport    = '11670';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbsocket' => 0,
  'dbcollation' => 'utf8mb4_general_ci',
);

$CFG->wwwroot   = 'https://ai.starfishlms.com';
$CFG->dataroot  = '/bitnami/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;
$CFG->passwordsaltmain = 'starfish_custom_salt_2025';

require_once(__DIR__ . '/lib/setup.php');
