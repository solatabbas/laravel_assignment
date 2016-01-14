<?php

namespace App\Http\Controllers;
use App\Category;
use App\Products;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Paginator;

class ProductsController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */


    public function index()
    {
        //echo 'products list show here';
        $categoryAll = Category::getAllCategories();
        return view('Products.category_list',['categoryList'=>$categoryAll]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //

        return view('Products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function show_products($id)
    {
       $categoryId = $id;
        try {
            $productsData = Products::where('category_id', '=', $categoryId)->take(10000)->get();
            $productsData = $productsData->toArray();
            return view('Products.products_list',['productList'=>$productsData]);
        } catch (exception $e) {

        }

    }


}
