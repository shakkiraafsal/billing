<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemCategory;
use App\Models\Hsn;
use App\Models\Unit;
use App\Models\Item;
use App\Models\Party;
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



      public function itemList()
    {
        $item=Item::get();
        $category=ItemCategory::where('cstatus',1)->get();
        $hsn=Hsn::where('hsnstatus',1)->get();
         $unit=Unit::where('unitstatus',1)->get();
        return view('admin.item.itemlist',
            ["item"=>$item,
            "category"=>$category,
            "hsn"=>$hsn,
            "unit"=>$unit,
        ]);
    }
  
   public function postItem(Request $request)
    {
        // request()->validate(
        //     [
               
               
        //         "itemname" => 'required',
        //         "itemcode" => 'required',
        //         "itemcategory" => 'required',
        //         "itemhsn" => 'required',
        //         "itemalertqty" => 'required',
        //         "itemsp" => 'required',
        //         "itempp" => 'required',
        //         "itemmrp" => 'required',

                
                
        //     ],
        //     [
               
        //         'itemname.required' => 'Field is mandatory.',
        //         'itemcode.required' => 'Field is mandatory.',
        //         'itemcategory.required' => 'Field is mandatory.',
        //         'itemhsn.required' => 'Field is mandatory.',
        //         'itemalertqty.required' => 'Field is mandatory.',
        //         'itemsp.required' => 'Field is mandatory.',
        //         'itempp.required' => 'Field is mandatory.',
        //         'itemmrp.required' => 'Field is mandatory.',
               
               
              

        //     ]
        // );
       
       
        $item = new Item;
        $item->itemname = request("itemname");
        $item->itemcode = request("itemcode");
        $item->itemcategory = request("itemcategory");
        $item->itemhsn = request("itemhsn");
        $item->itemalertqty = request("itemalertqty");
        $item->itemsp = request("itemsp");
        $item->itempp = request("itempp");
        $item->itemmrp = request("itemmrp");
        $item->itemexpdate = request("itemexpdate");
        $item->itemstatus = 1;
        $item->save();
        return redirect()->back()->with('message', 'Item Created!');
        
    }


        public function partyList()
    {
        $party=Party::get();
        return view('admin.party.partylist',["party"=>$party]);
    }


 public function postParty(Request $request)
    {
       
        $party = new Party;
        $party->pname = request("pname");
        $party->pcode = request("pcode");
        $party->pgst = request("pgst");
        $party->pmobile = request("pmobile");
        $party->padress = request("padress");
        $party->pemail = request("pemail");
        $party->pstatus = 1;
        $party->save();
        return redirect()->back()->with('message', 'Party Created!');
        
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
