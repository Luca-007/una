<?php
/**
 * Copyright (c) UNA, Inc - https://una.io
 * MIT License - https://opensource.org/licenses/MIT
 */

$aConfig = array(
    /**
     * Main Section.
     */
    'title' => 'Shopify',
    'version_from' => '9.0.5',
	'version_to' => '9.0.6',
    'vendor' => 'BoonEx',

    'compatible_with' => array(
        '9.0.0-RC10'
    ),

    /**
     * 'home_dir' and 'home_uri' - should be unique. Don't use spaces in 'home_uri' and the other special chars.
     */
    'home_dir' => 'boonex/shopify/updates/update_9.0.5_9.0.6/',
	'home_uri' => 'shopify_update_905_906',

	'module_dir' => 'boonex/shopify/',
	'module_uri' => 'shopify',

    'db_prefix' => 'bx_shopify_',
    'class_prefix' => 'BxShopify',

    /**
     * Installation/Uninstallation Section.
     */
    'install' => array(
		'execute_sql' => 1,
        'update_files' => 1,
        'update_languages' => 0,
		'clear_db_cache' => 1,
    ),

	/**
     * Category for language keys.
     */
    'language_category' => 'Shopify',

	/**
     * Files Section
     */
    'delete_files' => array(),
);
