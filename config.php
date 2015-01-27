<?php
$settingsDirectory = dirname(__FILE__) . '/';
if(file_exists($settingsDirectory . 'config.local.php')){
    require_once($settingsDirectory . 'config.local.php');
}else{
    require_once($settingsDirectory . 'config.production.php');
}

define('WOW_REGION', 'US');
define('WOW_LOCALE', 'en_US');
define('GUILD_NAME', 'Crisis');
define('GUILD_SERVER', 'Area 52');
define('MAX_LEVEL', 100);
define('CHARACTERS_TO_CHECK', 25);

//Number of players required for kill verification
define('NORMAL_THRESHOLD', 10);
define('HEROIC_THRESHOLD', 10);
define('MYTHIC_THRESHOLD', 10);

// Only use the two below if you have received API keys from Blizzard.
$GLOBALS['wowarmory']['keys']['api'] = 'YOUR_API_KEY'; 
$GLOBALS['wowarmory']['keys']['share'] = ''; // Currently unused
include('wowarmoryapi/BattlenetArmory.class.php');

$GLOBALS['bosses'] = array(
	'Kargath Bladefist' => array(
			'raid' 	 => 'Highmaul',
			'normal' => 0,
			'heroic' => 0,
			'mythic' => 0,
		),
	'The Butcher' => array(
			'raid' 	 => 'Highmaul',
			'normal' => 0,
			'heroic' => 0,
			'mythic' => 0,
		),
	'Brackenspore' => array(
			'raid' 	 => 'Highmaul',
			'normal' => 0,
			'heroic' => 0,
			'mythic' => 0,
		),
	'Tectus' => array(
			'raid' 	 => 'Highmaul',
			'normal' => 0,
			'heroic' => 0,
			'mythic' => 0,
		),
	'Twin Ogron' => array(
			'raid' 	 => 'Highmaul',
			'normal' => 0,
			'heroic' => 0,
			'mythic' => 0,
		),
	'Ko\'ragh' => array(
			'raid' 	 => 'Highmaul',
			'normal' => 0,
			'heroic' => 0,
			'mythic' => 0,
		),
	'Imperator Mar\'gok' => array(
			'raid' 	 => 'Highmaul',
			'normal' => 0,
			'heroic' => 0,
			'mythic' => 0,
		),
	'Oregorger' => array(
			'raid' 	 => 'Blackrock Foundry',
			'normal' => 0,
			'heroic' => 0,
			'mythic' => 0,
		),
	'Gruul' => array(
			'raid' 	 => 'Blackrock Foundry',
			'normal' => 0,
			'heroic' => 0,
			'mythic' => 0,
		),
	'The Blast Furnace' => array(
			'raid' 	 => 'Blackrock Foundry',
			'normal' => 0,
			'heroic' => 0,
			'mythic' => 0,
		),
	'Hans\'gar and Franzok' => array(
			'raid' 	 => 'Blackrock Foundry',
			'normal' => 0,
			'heroic' => 0,
			'mythic' => 0,
		),
	'Flamebender Ka\'graz' => array(
			'raid' 	 => 'Blackrock Foundry',
			'normal' => 0,
			'heroic' => 0,
			'mythic' => 0,
		),
	'Kromog' => array(
			'raid' 	 => 'Blackrock Foundry',
			'normal' => 0,
			'heroic' => 0,
			'mythic' => 0,
		),
	'Beastlord Darmac' => array(
			'raid' 	 => 'Blackrock Foundry',
			'normal' => 0,
			'heroic' => 0,
			'mythic' => 0,
		),
	'Operator Thogar' => array(
			'raid' 	 => 'Blackrock Foundry',
			'normal' => 0,
			'heroic' => 0,
			'mythic' => 0,
		),
	'The Iron Maidens' => array(
			'raid' 	 => 'Blackrock Foundry',
			'normal' => 0,
			'heroic' => 0,
			'mythic' => 0,
		),
	'Blackhand' => array(
			'raid' 	 => 'Blackrock Foundry',
			'normal' => 0,
			'heroic' => 0,
			'mythic' => 0,
		),
	);
?>