<?php

namespace Config;

use CodeIgniter\Database\Config;

class Database extends Config
{
    public $defaultGroup = 'default';

	public $default = [
		'DSN'      => '',
		'hostname' => 'localhost',
		'username' => 'your_username',
		'password' => '',
		'database' => 'perpustakaan_19220691',
		'DBDriver' => 'MySQLi',
		'DBPrefix' => '',
		'pConnect' => false,
		'DBDebug'  => (ENVIRONMENT !== 'production'),
		'cacheOn'  => false,
		'cacheDir' => '',
		'charset'  => 'utf8',
		'DBCollat' => 'utf8_general_ci',
		'swapPre'  => '',
		'encrypt'  => false,
		'compress' => false,
		'strictOn' => false,
		'failover' => [],
		'port'     => 3306,
	];
	
	public $tests = [
		'DSN'      => '',
		'hostname' => '127.0.0.1',
		'username' => '',
		'password' => '',
		'database' => 'perpustakaan_19220691',
		'DBDriver' => 'SQLite3',
		'DBPrefix' => 'db_', // Diperlukan untuk memastikan kesesuaian dengan prefix live. JANGAN DIHAPUS UNTUK PENGEMBANG CI
		'pConnect' => false,
		'DBDebug'  => true,
		'charset'  => 'utf8',
		'DBCollat' => 'utf8_general_ci',
		'swapPre'  => '',
		'encrypt'  => false,
		'compress' => false,
		'strictOn' => false,
		'failover' => [],
		'port'     => 3306,
		'foreignKeys' => true,
		'busyTimeout' => 1000,
	];
}