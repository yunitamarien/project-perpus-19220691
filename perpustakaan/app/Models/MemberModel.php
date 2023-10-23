<?php

namespace App\Models;

use CodeIgniter\Model;

class MemberModel extends Model
{
    protected $table = 'members';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'phone'];

    // Metode CRUD
    public function getMembers()
    {
        return $this->findAll();
    }

    public function getMember($id)
    {
        return $this->find($id);
    }

    public function addMember($data)
    {
        return $this->insert($data);
    }

    public function updateMember($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteMember($id)
    {
        return $this->delete($id);
    }
}
