<?php
/**
* @package Pages
* @copyright Copyright 2008-2009 RubikIntegration.com
* @copyright Copyright 2003-2006 Zen Cart Development Team
* @copyright Portions Copyright 2003 osCommerce
* @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
* @version $Id: link.php 149 2009-03-04 05:23:35Z yellow1912 $
*/
if(MANUFACTURERS_CAROUSEL_ENABLED == "true"){
$loaders[] = array('conditions' => array('pages' => array('*')),
								'jscript_files'	=> array(
									'jquery/jquery-1.11.0.min.js' => 1,
                                                                        'jquery/jquery-migrate-1.2.1.min.js' => 2,
									'jquery/manufacturers_carousel.min.js' => 3,
                                                                        'jquery/manufacturers_carousel.php' => 4,
								),
								'css_files' => array(
                                                                                'manufacturers_carousel.css' => 1,
										'manufacturers_carousel_theme.css' => 2,
                                                                                'manufacturers_carousel_transitions.css' => 3
									)									
								); 
}