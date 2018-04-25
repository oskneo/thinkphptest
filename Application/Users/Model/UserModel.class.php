<?php
namespace Users\Model;
use Think\Model;
class UserModel extends Model {
    protected $tableName="Users";
    protected $fields = array('id', 'username', 'email', 'age');
    protected $pk     = 'id';
}