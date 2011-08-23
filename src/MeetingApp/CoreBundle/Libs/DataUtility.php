<?php

namespace MeetingApp\CoreBundle\Libs;

use Doctrine\ORM\EntityManager;

use Doctrine\DBAL\Connection;

/**
 * Contains all db-related utility functions
 * @author Nam Hoang
 * @package DataUtility
 */
class DataUtility
{
	/**
	 * Entity Manager
	 * @access private
	 * @var EntityManager
	 */
	private static $_entityManager = NULL;

	/**
	 * Get the Entity Manager
	 * @return EntityManager
	 */
	public static function getEntityManager()
	{
		return self::$_entityManager;
	}
	/**
	 * Set the Entity Manager
	 * @param $em : Entity manager
	 * @return none
	 */
	public static function setEntityManager(EntityManager $em)
	{
		self::$_entityManager =  $em;
	}

	/**
	 * Start a SERIALIZABLE transaction
	 * @return none
	 */
	public static function startTransaction()
	{
		if(self::$_entityManager != NULL)
		{
			$conn = self::$_entityManager->getConnection();
			//set Isolation level to Serializabe
			$conn->setTransactionIsolation(Connection::TRANSACTION_SERIALIZABLE);
			$conn->beginTransaction();
		}
	}

	/**
	 * Commit current transaction
	 * @return none
	 */
	public static function commitTransaction()
	{
		if(self::$_entityManager != NULL)
		{
			$conn = self::$_entityManager->getConnection();
			$conn->commit();
		}
	}

	/**
	 * Rollback current transaction
	 * @return none
	 */
	public static function rollbackTransaction()
	{
		if(self::$_entityManager != NULL)
		{
			$conn = self::$_entityManager->getConnection();
			$conn->rollback();
		}
	}
}