<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddProduct;
use DB;

class AddProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=DB::table('addcategories')->select('id','categoryname')->get();

        return view('clickecomm.admin.addproducts',["category"=>$category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          //  validations riles 
         $validated = $request->validate([
            'categoryname' => 'required|max:255',
            'photo'=>'required',
            'pname'=>'required',
            'oldprice'=>'required',
            'newprice'=>'required',
            'qty'=>'required',
            'descriptions' => 'required',
        ]);

          $data=array(
              "catid"=>$request->categoryname,
              "photo"=>$request->photo,
              "pname"=>$request->pname,
              "oldprice"=>$request->oldprice,
              "newprice"=>$request->newprice,
              "qty"=>$request->qty,
              "descriptions"=>$request->descriptions
              
        );

        // create an ORM model used elequent query builder
        AddProduct::create($data);
        return redirect('/admin-login/addproducts')->with('success','Your Products added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
