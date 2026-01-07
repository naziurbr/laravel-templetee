<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $cats = Category::all();
        // dd($cats); // for text
        
        // return "asi vai";
        return view('backend.category.index', compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validation
      $request->validate([
    'cat_name' => 'required|min:3|max:10|unique:categories,name',

      ],
      [
        'required' => 'Category namne must be entered',
        'min' => 'Category name must be at least 3 characters',
      ]
        
    );
        

        //data
        $data = [
            'name' => $request->cat_name,
        ];
        Category :: create ($data);
        return redirect()->route('category.index')->with('success','Category Added');
            
      
        // dd($request);

    //  return request()->cat_name;
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('backend.category.edit' , compact('category'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        // dd ($category);
               // validation
      $request->validate([
    'cat_name' => 'required|min:3|max:10|unique:categories,name',

      ],
      [
        'required' => 'Category namne must be entered',
        'min' => 'Category name must be at least 3 characters',
      ]
        
    );
        
        




        $data = [
            'name' => $request->cat_name,
        ];
        $category->update($data);
        return redirect()->route('category.index')->with('success','Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
         $category->delete();
         return redirect()->route('category.index')->with('success','Successfully Deleted');

    }
}
