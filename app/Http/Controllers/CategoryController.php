<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Http\Requests\CategoryValidationRequest;
use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class CategoryController extends Controller
{
    //




    public function __construct()
    {
        $this->middleware('auth');

    }

    public function create()
    {
        //echo testHelper(); exit;
        return view ('Category.create');

    }

    public function post(CategoryValidationRequest $request)
    {
        $uploadedPath = base_path()."/public/images/category";
        $data = new Category($request->all());

        if (Input::file('image')) {
            if ($request->file('image')->getClientOriginalName() != '') {
                $fileName = time()."_".$request->file('image')->getClientOriginalName();
                $data['image_title'] = $fileName;
                $data['image_path'] = $uploadedPath . '/' . $fileName;
                $request->file('image')->move($uploadedPath, $fileName);
            }
        } else {
            $data['image_title'] = "";
            $data['image_path'] = "";
        }

        $data['updated_at'] = Carbon::now();

        Auth::user()->Categories()->save($data);
        return redirect('products');

    }

    public function edit($id)
    {
        $category_id = $id;
        $obCategory = new Category();
        $findData = $obCategory->findOrFail($category_id);

        return view ('Category.edit',compact('findData'));

    }

    public function update($id, CategoryValidationRequest $request)
    {
        $uploadedPath = base_path()."/public/images/category";
        $obCategory = new Category();
        $findData = $obCategory->findOrFail($id);

        $data = $request->all();
        $data['updated_at'] = Carbon::now();
        unset($data['created_at']);

        if (Input::file('image')) {
            if ($request->file('image')->getClientOriginalName() != '') {
                $fileName = time()."_".$request->file('image')->getClientOriginalName();
                $data['image_title'] = $fileName;
                $data['image_path'] = $uploadedPath . '/' . $fileName;
                $request->file('image')->move($uploadedPath, $fileName);
            }
        } else {
            $data['image_title'] = "";
            $data['image_path'] = "";
        }
        $findData->update($data);
        return redirect('products');
    }

    public function angular()
    {
        return view ('Category.angularjs');
    }
}
