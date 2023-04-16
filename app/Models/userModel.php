<?php

namespace App\Models;

use CodeIgniter\Model;

class userModel extends Model
{
    protected $table = 'userqc';
    protected $allowedFields = ['username', 'password'];
    protected $session;
    public function get_data($username, $password)
    {
        return $this->db->table('userqc')
            ->where(array('username' => $username, 'password' => $password))
            ->get()->getRowArray();
    }
}
