<?php
namespace app\model;

use think\Model;
use think\model\concern\SoftDelete;

class Student extends Model {
    use SoftDelete;
    protected $deleteTime = 'delete_time';
    // protected $defaultSoftDelete = 0;
}
