<?php
/** @package Openemr::Model::DAO */

/**
 *
 * Copyright (C) 2016-2017 Jerry Padgett <sjpadgett@gmail.com>
 *
 * LICENSE: This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as
 *  published by the Free Software Foundation, either version 3 of the
 *  License, or (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package OpenEMR
 * @author Jerry Padgett <sjpadgett@gmail.com>
 * @link http://www.open-emr.org
 */

/** import supporting libraries */
require_once("verysimple/Phreeze/Phreezable.php");
require_once("OnsiteActivityViewMap.php");

/**
 * OnsiteActivityViewDAO provides object-oriented access to the onsite_activity_view table.  This
 * class is automatically generated by ClassBuilder.
 *
 * WARNING: THIS IS AN AUTO-GENERATED FILE
 *
 * This file should generally not be edited by hand except in special circumstances.
 * Add any custom business logic to the Model class which is extended from this DAO class.
 * Leaving this file alone will allow easy re-generation of all DAOs in the event of schema changes
 *
 * @package Openemr::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class OnsiteActivityViewDAO extends Phreezable
{
	/** @var int */
	public $Id;

	/** @var date */
	public $Date;

	/** @var int */
	public $PatientId;

	/** @var string */
	public $Activity;

	/** @var int */
	public $RequireAudit;

	/** @var string */
	public $PendingAction;

	/** @var string */
	public $ActionTaken;

	/** @var string */
	public $Status;

	/** @var longtext */
	public $Narrative;

	/** @var longtext */
	public $TableAction;

	/** @var longtext */
	public $TableArgs;

	/** @var int */
	public $ActionUser;

	/** @var date */
	public $ActionTakenTime;

	/** @var longtext */
	public $Checksum;

	/** @var string */
	public $Title;

	/** @var string */
	public $Fname;

	/** @var string */
	public $Lname;

	/** @var string */
	public $Mname;

	/** @var date */
	public $Dob;

	/** @var string */
	public $Ss;

	/** @var string */
	public $Street;

	/** @var string */
	public $PostalCode;

	/** @var string */
	public $City;

	/** @var string */
	public $State;

	/** @var string */
	public $Referrerid;

	/** @var int */
	public $Providerid;

	/** @var int */
	public $RefProviderid;

	/** @var string */
	public $Pubpid;

	/** @var int */
	public $CareTeam;

	/** @var string */
	public $Username;

	/** @var int */
	public $Authorized;

	/** @var string */
	public $Ufname;

	/** @var string */
	public $Umname;

	/** @var string */
	public $Ulname;

	/** @var string */
	public $Facility;

	/** @var int */
	public $Active;

	/** @var string */
	public $Utitle;

	/** @var string */
	public $PhysicianType;



}
?>