<?php

namespace App\Controllers;
use App\Models\ProductsModel;

class Products extends BaseController
{
	public function index()
	{
		$model = new ProductsModel();		

		$data = [
			'products'	=> $model->paginate(10),
			'pager'		=> $model->pager
		];

		return view('products/index', $data);
	}
	
	public function detail()
	{
		return view('products/detail');
	}

	public function search()
	{
		$key = $this->request->getVar('search');
		$model = new ProductsModel();
		$builder = $model->builder();

		$builder->like('title', $key);
		$products = $builder->findAll();

		$data = [
			'key'		=> $key,
			'products'	=> $products,
			'pager'		=> $model->pager
		];

		return view('products/index', $data);
	}
}
