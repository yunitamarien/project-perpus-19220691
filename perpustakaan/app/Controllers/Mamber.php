<?php

namespace App\Controllers;

use App\Models\MemberModel;

class Member extends BaseController
{
    public function index()
    {
        $model = new MemberModel();
        $data['members'] = $model->getMembers();

        return view('members/index', $data);
    }

    public function create()
    {
        return view('members/create');
    }

    public function save()
    {
        $model = new MemberModel();
        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'phone' => $this->request->getVar('phone')
        ];

        $model->addMember($data);

        return redirect()->to('/members');
    }

    public function edit($id)
    {
        $model = new MemberModel();
        $data['member'] = $model->getMember($id);

        return view('members/edit', $data);
    }

    public function update($id)
    {
        $model = new MemberModel();
        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'phone' => $this->request->getVar('phone')
        ];

        $model->updateMember($id, $data);

        return redirect()->to('/members');
    }

    public function delete($id)
    {
        $model = new MemberModel();
        $model->deleteMember($id);

        return redirect()->to('/members');
    }
}
