<?php

namespace WPEngine\ORM\WP;


use WPEngine\ORM\Eloquent\Model;

class User extends Model
{
    protected $primaryKey = 'ID';
    protected $timestamp = false;

    public function meta()
    {
        return $this->hasMany('WeDevs\ORM\WP\UserMeta', 'user_id');
    }
}