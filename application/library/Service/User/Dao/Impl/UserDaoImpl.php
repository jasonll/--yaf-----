<?php
namespace Service\User\Dao\Impl;

use Common\Dao\BaseDao;

class UserDaoImpl extends BaseDao{

	protected $table = 'user';

	public function addUser(array $user)
	{
		return $this->insert($user);
	}



}