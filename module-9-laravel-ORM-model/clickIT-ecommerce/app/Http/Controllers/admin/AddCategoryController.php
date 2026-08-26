<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddCategory;

class AddCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('clickecomm.admin.addcategory');
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
            'descriptions' => 'required',
        ]);

          $data=array(
              "categoryname"=>$request->categoryname,
              "descriptions"=>$request->descriptions
        );

        // create an ORM model used elequent query builder
        AddCategory::create($data);
        return redirect('/admin-login/addcategory')->with('success','Your category added successfully');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
         $data=AddCategory::all();
         return view('clickecomm.admin.managecategory',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $eddata=AddCategory::where('id',$id)->first();
         return view('clickecomm.admin.editcategory',['eddata'=>$eddata]);
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
        $eddata=array(
              "categoryname"=>$request->categoryname,
              "descriptions"=>$request->descriptions
        );
         AddCategory::where('id',$id)->update($eddata);
        return redirect('/admin-login/managecategory')->with('success','Your category update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AddCategory::where('id',$id)->delete();
        return redirect('/admin-login/managecategory')->with('del','Your category successfully deleted');
    }
}
