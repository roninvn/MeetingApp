<?php

namespace MeetingApp\CoreBundle\Libs\Biz;

use MeetingApp\CoreBundle\Entity\UsersRole;
use MeetingApp\CoreBundle\Libs\DataUtility;

/**
* Business class for UsersRole
* @author Nam Hoang
* @package UsersRoleBiz
*/
class UsersRoleBiz
{
	const _getAllRoleSQL = "SELECT r.id, r.rolename, r.description FROM MeetingApp\CoreBundle\Entity\UsersRole r";
	
	/**
	 * Get all roles in DB
	 * @return Array of UsersRole
	 */
	public static function getAllRoleAsArray()
	{
		$em 	= DataUtility::getEntityManager();
		$query = $em->createQuery(self::_getAllRoleSQL);		
		return $query->getArrayResult();
	}

}