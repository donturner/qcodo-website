<?php
	/**
	 * The PersonType class defined here contains
	 * code for the PersonType enumerated type.  It represents
	 * the enumerated values found in the "person_type" table
	 * in the database.
	 * 
	 * To use, you should use the PersonType subclass which
	 * extends this PersonTypeGen class.
	 * 
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the PersonType class.
	 * 
	 * @package Qcodo Website
	 * @subpackage GeneratedDataObjects
	 */
	abstract class PersonTypeGen extends QBaseClass {

		const MaxId = 0;

		public static $NameArray = array();

		public static $TokenArray = array();

		public static function ToString($intPersonTypeId) {
			switch ($intPersonTypeId) {
				default:
					throw new QCallerException(sprintf('Invalid intPersonTypeId: %s', $intPersonTypeId));
			}
		}

		public static function ToToken($intPersonTypeId) {
			switch ($intPersonTypeId) {
				default:
					throw new QCallerException(sprintf('Invalid intPersonTypeId: %s', $intPersonTypeId));
			}
		}

	}
?>