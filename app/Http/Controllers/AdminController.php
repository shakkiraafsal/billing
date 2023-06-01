<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemCategory;
use App\Models\Hsn;
class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function categoryList()
    {
        $category=ItemCategory::get();
        return view('admin.category.categorylist',["category"=>$category]);
    }

 public function postCategory(Request $request)
    {
        request()->validate(
            [
                "cname" => 'required',
                
                
            ],
            [  
                'cname.required' => 'Field is mandatory.',
               
           
            ]
        );
       
       
        $category = new ItemCategory;
        $category->cname = request("cname");
        $category->cstatus = 1;
        $category->save();
        return redirect()->back()->with('message', 'Category Created!');
        
    }




      public function hsnList()
    {
        $hsn=Hsn::get();
        return view('admin.hsn.hsn-list',["hsn"=>$hsn]);
    }


    


public function postHsn(Request $request)
    {
        request()->validate(
            [
               
               
                "hsncode" => 'required',
                "hsndescp" => 'required',
                "hsnunit" => 'required',
                "hsntaxmode" => 'required',
                
                
            ],
            [
               
                'hsncode.required' => 'Field is mandatory.',
                'hsndescp.required' => 'Field is mandatory.',
                'hsnunit.required' => 'Field is mandatory.',
                'hsntaxmode.required' => 'Field is mandatory.',
               
               
              

            ]
        );
       
       
        $hsn = new Hsn;
        $hsn->hsncode = request("hsncode");
        $hsn->hsndescp = request("hsndescp");
        $hsn->hsnunit = request("hsnunit");
        $hsn->hsntaxmode = request("hsntaxmode");
        $hsn->hsnstatus = 1;
        $hsn->save();
        return redirect()->back()->with('message', 'HSN Code Created!');
        
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
