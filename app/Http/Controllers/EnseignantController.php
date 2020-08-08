<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enseignant;
use App\Cours;
use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class EnseignantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $req=Cours::find($id);

        return view ('showonecours',compact('req'));
    }
    public function create(Request $request,Enseignant $row)
    {
     return view ('addcours');
    }
    public function addcours(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'cours'=>'required',
            'cle'=>'required',

           
        ]);
        $row =   Cours::create([
            'nommatiere' => Auth::user()->spec,
            'titredecours'=> $request->title,
            'maincours'	=> $request->cours,
            'enseignant_id'=> Auth::user()->id,
            'nameofteacher'=>Auth::user()->name,
            'cle'=>$request->cle,


        ]);
        return redirect()->route('showcours')->with('success','Cours added successfully');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function create()
    {
        //
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
public function editprofil()
{

return view ('editprofil');

}
public function updateprofil(Request $request)
{
    $record=User::find(Auth::user()->id);
   
    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'password'=>'required',
    ]);
      
    $fileName=time().'.'.$request['photo']->getClientOriginalExtension();
    $request['photo']->move(public_path('photo'),$fileName);
            
            $pass=Hash::make($request->password);
            $record->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'password'=>$pass,
                'photo'=>$fileName,



            ]);
          return redirect()->route('home');

     

}
public function showpdfpage()
{
  
return view ('pdfcours');
}
public function addpdfcour(Request $request)
{
     $request->validate([
                'title' => 'required',
                'pdf' => 'required',
                'cle'=>'required',
            ]);
    
  
        $fileName=Auth::user()->spec.' '.$request->title.' Cours of '.Auth::user()->name.'.'.$request->pdf->getClientOriginalExtension();
        $row =   Cours::create([
            'document' => $fileName,
            'nommatiere' => Auth::user()->spec,
            'titredecours'=> $request->title,
            'enseignant_id'=> Auth::user()->id,
            'nameofteacher'=>Auth::user()->name,
            'cle'=>$request->cle,


        ]);
        $request->pdf->move(public_path('docs'),Auth::user()->spec.' '.$request->title.' Cours of '.Auth::user()->name.'.'.$request->pdf->getClientOriginalExtension());
        return redirect()->route('showmypdfcours')->with('success','PDF Cours Uploaded successfully');


}
public function showpdfcours()
{
  $record = Cours::get()->where('document','!=','')->where('cle','==',Auth::user()->cle);

return view ('showpdfcours',compact('record'));

}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show()
    {
        $record = Cours::get()->where('enseignant_id',Auth::user()->id);
        
        return view ('showcours',compact('record'));
    }
    public function showstudentcour()
    {
        $record = Cours::get()->where('document','==','')->where('cle','==',Auth::user()->cle);
     
        return view ('showstudentcours',compact('record'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row=Cours::find($id);
        return view ('editcourse',compact('row'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'title'=>'required',
            'cours'=>'required',

           
        ]);
        $cour=Cours::find($id);

  
        $cour->update([
            
            'titredecours'=>$request->title,
            'maincours'=>$request->cours,


        ]);
        return redirect()->route('showcours')->with('success','Cours Updated successfully');

        
    }
    public function showmypdfcours()
    {
        $record=Cours::get()
        ->where('enseignant_id',Auth::user()->id)
        ->where('document','!=','');
        return view ('showmypdfcours',compact('record'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row=Cours::find($id);

        $row->delete();
  
        return redirect()->route('showcours')->with('success','Cours Deleted successfully');
    }
}
//background-image: url('https://www.incimages.com/uploaded_files/image/970x450/getty_933383882_2000133420009280345_410292.jpg');
