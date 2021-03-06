<?php

/**
 * Parameter manipulation converting the value to a integer.
 *
 * @deprecated since 0.5, removal in 0.7
 * @since 0.4
 * 
 * @file ParamManipulationInteger.php
 * @ingroup Validator
 * @ingroup ParameterManipulations
 * 
 * @author Jeroen De Dauw
 */
class ParamManipulationInteger extends ItemParameterManipulation {
	
	/**
	 * Constructor.
	 * 
	 * @since 0.4
	 */
	public function __construct() {
		parent::__construct();
	}	
	
	/**
	 * @see ItemParameterManipulation::doManipulation
	 * 
	 * @since 0.4
	 */	
	public function doManipulation( &$value, Parameter $parameter, array &$parameters ) {
		$value = (int)$value;
	}
	
}