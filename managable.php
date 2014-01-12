<?php
/*
 *  Root Script (include this file into your project)
 * 
 *  "Managable" - A custom database generator and manager
 *  Written by Doug Matlack, in 2014, under GNU GPL
 * 
 *  You don't have to leave this notice intact, and I
 *  don't take donations. No need to credit me anywhere.
 *  
 *  You can pay me back by contributing to the open source 
 *  community that so many of us depend on to buy bread
 *  and pay rent.
 * 
 *  Please also feel free to show me any projects you create
 *  using this tool, as well as offer any suggestions to improve
 * 	it, at doug@mad-factory.com.
 * 
 * 	CODE IS POETRY ~
 * 
 */
 
 //store the root directory for simplicity and consistency
 define('MANAGABLE_ROOT',__DIR__);

 //fetch the Managable bindings, core and database object classes
 $bindings = glob(MANAGABLE_ROOT.'/core/bindings/*.php');
 $corefiles = glob(MANAGABLE_ROOT.'/core/*.php');
 $objectfiles = glob(MANAGABLE_ROOT.'/objects/*.php');
 
 $allfiles = array_merge($bindings,$corefiles,$objectfiles);
 
 foreach($allfiles as $file) require_once($file);

?>
