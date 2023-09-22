<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProductController extends BaseController
{
    private $product;
    public function __construct(){
        $this->product = new \App\Models\ProductModel();
        $this->category = new \App\Models\CategoryModel();
    }
    public function save(){
       $id = $_POST['ProductId'];
       $data = [
            'ProductId' => $this->request->getVar('ProductId'),
            'ProductName' => $this->request->getVar('ProductName'),
            'ProductDescription' => $this->request->getVar('ProductDescription'),
            'ProductCategoryId' => $this->request->getVar('ProductCategoryId'),
            'ProductQuantity' => $this->request->getVar('ProductQuantity'),
            'ProductPrice' => $this->request->getVar('ProductPrice'),
       ];
       $Catdata = [
        'ProductCategoryId' => $this->request->getVar('ProductId'),
        'ProductCategory' => $this->request->getVar('ProductName'),
   ];

       if($id != null){
        $this->product->set($data)->where('ProductId',$id)->update();
       }
       else{
        $this->product->save($data);
       }

       return redirect()->to('/');
    }
   
    public function delete($id){
        $this->product->where('ProductId', $id)->delete();
        return redirect()->to('/');
    }

    public function edit($id) {
        $data = [
            'ProductId' => $this->product->findAll(),
            'pro' => $this->product->where('ProductId', $id)->first(),
        ];
        $data['category'] = $this->category->findAll();
    
        return view('ProductAdd2',$data);
    }

    public function index()
    {
        $data['name'] = $this->product->findAll();
        return view('ProductIndex',$data);
    }

    public function add(){
        $data['category'] = $this->category->findAll();
        return view('ProductAdd',$data);
    }
}
