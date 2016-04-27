<?php

namespace CodeDelivery\Http\Controllers;

use Illuminate\Http\Request;

use CodeDelivery\Http\Requests;

class CategoriesController extends Controller
{
    public function index()
    {
        $data = [
            'nome' => 'Eduardo',
            'liguagens' => [
                'PHP',
                'Java',
                'Ruby'
            ]
        ];
        return view('admin.categories.index', $data);
    }
}
