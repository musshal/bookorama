<?php

namespace App\Controllers;

use App\Models\CustomersModel;

class Home extends BaseController
{
  protected $customersModel;

  public function __construct()
  {
    $this->customersModel = new CustomersModel();
  }

  public function index()
  {
    $data = [
      'title' => 'View Customer',
      'customer' => $this->customersModel->getCustomer()
    ];


    return view('customer/view_customer', $data);
  }

  public function add_customer()
  {
    $data = [
      'title' => 'Add Customer',
      'validation' => \Config\Services::validation()
    ];

    return view('customer/add_customer', $data);
  }

  public function edit_customer($id)
  {
    $data = [
      'title' => 'Edit Customer',
      'validation' => \Config\Services::validation(),
      'customer' => $this->customersModel->getCustomer($id)
    ];

    return view('customer/edit_customer', $data);
  }
  
  public function confirm_delete_customer($id)
  {
    $data = [
      'title' => 'Confirm Delete Customer',
      'customer' => $this->customersModel->getCustomer($id),
    ];

    return view('customer/confirm_delete_customer', $data);
  }

  public function save()
  {
    if (!$this->validate([
      'name' => 'required|alpha_space',
      'address' => 'required',
      'city' => 'required'
    ])) {
      $validation = \Config\Services::validation();

      return redirect()->to('/add-customer')->withInput()->with('validation', $validation);
    }

    $this->customersModel->save([
      'name' => $this->request->getVar('name'),
      'address' => $this->request->getVar('address'),
      'city' => $this->request->getVar('city')
    ]);

    return redirect()->to('/');
  }

  public function update($id)
  {
    if (!$this->validate([
      'name' => 'required|alpha_space',
      'address' => 'required',
      'city' => 'required'
    ])) {
      $validation = \Config\Services::validation();

      return redirect()->to('/edit-customer/' . $id)->withInput()->with('validation', $validation);
    }

    $this->customersModel->save([
      'customerid' => $id,
      'name' => $this->request->getVar('name'),
      'address' => $this->request->getVar('address'),
      'city' => $this->request->getVar('city')
    ]);

    return redirect()->to('/');
  }

  public function delete($id) 
  {
    $this->customersModel->delete($id);

    return redirect()->to('/');
  }
}