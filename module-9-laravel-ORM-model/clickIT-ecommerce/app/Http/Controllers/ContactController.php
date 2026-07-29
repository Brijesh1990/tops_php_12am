<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ContactModel;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('clickecomm.contact');
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
        //create a ORM model for insert data via Model 
        $data=array(
              "fullname"=>$request->fullname,
              "email"=>$request->email,
              "phone"=>$request->phone,
              "subject"=>$request->subject,
              "message"=>$request->message
        );

        // create an ORM model used elequent query builder
        ContactModel::create($data);
        return redirect('/contact-us')->with('success','Thanks for contact with us we will contact with you soon!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //create a ORM query builder for show all data in admin
        $data=ContactModel::all();
        return view('clickecomm.admin.managecontacts',['data'=>$data]);
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
        //create a elquent ORM query builder for delete
        ContactModel::where('id',$id)->delete();
        return redirect('/admin-login/manage-contacts')->with('del','Your data successfully deleted');
    }
}
