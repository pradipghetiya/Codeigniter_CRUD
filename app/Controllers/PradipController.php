<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PradipController extends BaseController
{
    protected $conn;
    public function __construct() {
        $this->conn = \Config\Database::connect();
    }

    public function index()
    {
        return view('Pradip_welcome');
    }

    public function saveData(){

        $data1 = $this->request->getVar();
        $data = array_pop($data1);
        // print_r($data1);
        $builder = $this->conn->table('Users');
        $insert = $builder->insert($data1);
        if($insert){
            
        return redirect()->to(base_url('/pradip/view'));
        }else{
            echo "Data is not inserted.";
        }
    }


    public function getData()
    {
        $builder = $this->conn->table('Users');
        $query = $builder->get();
    
        if ($query->getNumRows() > 0) {
            $data['users'] = $query->getResult();
            return view('Pradip_view', $data);
        } else {
            $data['users'] = [];
            return view('Pradip_view', $data);
        }
    }

    public function edit($id)
    {
        $builder = $this->conn->table('Users');
        $query = $builder->getWhere(['id' => $id]);
        $data['user'] = $query->getRow();
    
        if ($data['user']) {
            return view('edit_user', $data);  
        } else {
            return $this->response->setStatusCode(404)->setBody('User not found.');
        }   
    }
    

    public function update($id) {
        // Retrieve the posted data
        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
        ];
    
        // Update the user in the database
        $builder = $this->conn->table('Users');
        $builder->where('id', $id);
        $update = $builder->update($data);
    
        if ($update) {
            // Set a success message and redirect
            session()->setFlashdata('message', 'User updated successfully.');
            return redirect()->to('/pradip/view');
        } else {
            // Handle the error
            session()->setFlashdata('error', 'User update failed. Please try again.');
            return redirect()->to('/pradip/edit/' . esc($id));
        }
    }
    


public function delete($id)
{
    $builder = $this->conn->table('Users');
    $delete = $builder->delete(['id' => $id]);

    if ($delete) {
        return redirect()->to('/pradip/view')->with('message', 'User deleted successfully.');
    } else {
        return $this->response->setStatusCode(500)->setBody('Failed to delete user.');
    }
}

    



}
