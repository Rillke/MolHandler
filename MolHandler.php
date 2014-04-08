<?php
/**
 * MolHandler extension
 *
 * @file
 * @ingroup Extensions
 *
 * Stores the setup instructions for MolHandler.
 *
 * Usage: Include the following line in your LocalSettings.php
 * require_once( "$IP/extensions/MolHandler/MolHandler.php" );
 *
 * @author Rainer Rillke <[lastname]@wikipedia.de>
 * @license GPL v2 or later
 * @version 0.1
 */

/* Configuration */

// Credits
$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'Mol Handler',
	'author' => array(
		'Rainer Rillke'
	),
	'version' => '0.1.0',
	'descriptionmsg' => 'molhandler-desc',
	'url' => 'https://www.mediawiki.org/wiki/Extension:MolHandler'
);

$wgMolHandlerDir = __DIR__;

# Require modules
$wgAutoloadClasses += array(
	// Hooks
	// 'UploadWizardHooks' => $wgMolHandlerDir . '/MolHandler.hooks.php',
);

// $wgHooks['UnitTestsList'][] = 'Class::staticProc';
