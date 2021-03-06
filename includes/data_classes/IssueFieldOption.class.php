<?php
	require(__DATAGEN_CLASSES__ . '/IssueFieldOptionGen.class.php');

	/**
	 * The IssueFieldOption class defined here contains any
	 * customized code for the IssueFieldOption class in the
	 * Object Relational Model.  It represents the "issue_field_option" table 
	 * in the database, and extends from the code generated abstract IssueFieldOptionGen
	 * class, which contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 * 
	 * @package Qcodo Website
	 * @subpackage DataObjects
	 * 
	 */
	class IssueFieldOption extends IssueFieldOptionGen {
		/**
		 * Default "to string" handler
		 * Allows pages to _p()/echo()/print() this object, and to define the default
		 * way this object would be outputted.
		 *
		 * Can also be called directly via $objIssueFieldOption->__toString().
		 *
		 * @return string a nicely formatted string representation of this object
		 */
		public function __toString() {
			return sprintf('IssueFieldOption Object %s',  $this->intId);
		}

		/**
		 * Given a name, this will "tokenize" it for use as a token
		 * @param string $strName
		 * @return string
		 */
		public static function TokenizeName($strName) {
			$strName = trim(strtolower($strName));
			$strToken = null;

			for ($intChar = 0 ; $intChar < strlen($strName); $intChar++) {
				$strChar = $strName[$intChar];
				if ((ord($strChar) >= ord('a')) && (ord($strChar) <= ord('z')))
					$strToken .= $strChar;
				else if ((ord($strChar) >= ord('0')) && (ord($strChar) <= ord('9')))
					$strToken .= $strChar;
			}

			return $strToken;
		}

		/**
		 * This will set the Token field of this object to the TokenizeName-d version of the Name field of this object.
		 * @return void
		 */
		public function SetToken() {
			$this->strToken = IssueFieldOption::TokenizeName($this->strName);
		}

		// Override or Create New Load/Count methods
		// (For obvious reasons, these methods are commented out...
		// but feel free to use these as a starting point)
/*
		public static function LoadArrayBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return an array of IssueFieldOption objects
			return IssueFieldOption::QueryArray(
				QQ::AndCondition(
					QQ::Equal(QQN::IssueFieldOption()->Param1, $strParam1),
					QQ::GreaterThan(QQN::IssueFieldOption()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function LoadBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return a single IssueFieldOption object
			return IssueFieldOption::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::IssueFieldOption()->Param1, $strParam1),
					QQ::GreaterThan(QQN::IssueFieldOption()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function CountBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return a count of IssueFieldOption objects
			return IssueFieldOption::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::IssueFieldOption()->Param1, $strParam1),
					QQ::Equal(QQN::IssueFieldOption()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function LoadArrayBySample($strParam1, $intParam2, $objOptionalClauses) {
			// Performing the load manually (instead of using Qcodo Query)

			// Get the Database Object for this Class
			$objDatabase = IssueFieldOption::GetDatabase();

			// Properly Escape All Input Parameters using Database->SqlVariable()
			$strParam1 = $objDatabase->SqlVariable($strParam1);
			$intParam2 = $objDatabase->SqlVariable($intParam2);

			// Setup the SQL Query
			$strQuery = sprintf('
				SELECT
					`issue_field_option`.*
				FROM
					`issue_field_option` AS `issue_field_option`
				WHERE
					param_1 = %s AND
					param_2 < %s',
				$strParam1, $intParam2);

			// Perform the Query and Instantiate the Result
			$objDbResult = $objDatabase->Query($strQuery);
			return IssueFieldOption::InstantiateDbResult($objDbResult);
		}
*/




		// Override or Create New Properties and Variables
		// For performance reasons, these variables and __set and __get override methods
		// are commented out.  But if you wish to implement or override any
		// of the data generated properties, please feel free to uncomment them.
/*
		protected $strSomeNewProperty;

		public function __get($strName) {
			switch ($strName) {
				case 'SomeNewProperty': return $this->strSomeNewProperty;

				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		public function __set($strName, $mixValue) {
			switch ($strName) {
				case 'SomeNewProperty':
					try {
						return ($this->strSomeNewProperty = QType::Cast($mixValue, QType::String));
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				default:
					try {
						return (parent::__set($strName, $mixValue));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
*/
	}
?>