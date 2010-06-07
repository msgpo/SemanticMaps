<?php

/**
 * This groupe contains all OpenLayers related files of the Semantic Maps extension.
 * 
 * @defgroup SMOpenLayers OpenLayers
 * @ingroup SemanticMaps
 */

/**
 * This file holds the general information for the OpenLayers service.
 *
 * @file SM_OpenLayers.php
 * @ingroup SMOpenLayers
 *
 * @author Jeroen De Dauw
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'Not an entry point.' );
}

$wgAutoloadClasses['SMOpenLayersQP'] = dirname( __FILE__ ) . '/SM_OpenLayersQP.php';
// TODO: the if should not be needed, but when omitted, a fatal error occurs cause the class that's extended by this one is not found.
if ( defined( 'SF_VERSION' ) ) $wgAutoloadClasses['SMOpenLayersFormInput'] = dirname( __FILE__ ) . '/SM_OpenLayersFormInput.php';

$egMapsServices['openlayers']['features']['qp'] = 'SMOpenLayersQP';
$egMapsServices['openlayers']['features']['fi'] = 'SMOpenLayersFormInput';