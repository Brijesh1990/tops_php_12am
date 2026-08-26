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

         // upload photo of products
         $filename=rand().'.'.$request->photo->extension();
         $request->photo->move(public_path('uploads/products'),$filename);

          $data=array(
              "catid"=>$request->categoryname,
              "photo"=>$filename,
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
    public function show()
    {
      //create a show products data from tables and join category in it 
      $products = DB::table('products')
      ->join('addcategories', 'products.catid', '=', 'addcategories.id')
      ->select('products.*', 'addcategories.categoryname')
      ->get();
      return view('clickecomm.admin.manageproducts',["products"=>$products]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $eddata=AddProduct::where('id',$id)->first();
         $category=DB::table('addcategories')->select('id','categoryname')->get();
         return view('clickecomm.admin.editproducts',['eddata'=>$eddata,'category'=>$category]);
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
        
              
        // upload photo of products
         $filename=rand().'.'.$request->photo->extension();
         $request->photo->move(public_path('uploads/products'),$filename);

          $eddata=array(
              "catid"=>$request->categoryname,
              "photo"=>$filename,
              "pname"=>$request->pname,
              "oldprice"=>$request->oldprice,
              "newprice"=>$request->newprice,
              "qty"=>$request->qty,
              "descriptions"=>$request->descriptions

        );
         AddProduct::where('id',$id)->update($eddata);
        return redirect('/admin-login/manageproducts')->with('success','Your Products update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        AddProduct::where('id',$id)->delete();
        return redirect('/admin-login/manageproducts')->with('del','Your Products successfully deleted');
    }
}
