<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Validation\ValidationException;
use App\Http\Resources\PensionResource;
use App\models\PensionerModel;


class pensionController extends Controller
{

       

public function index()
{

    $newPension = PensionerModel::all();

    return response()->json($newPension);
}



public function store(Request $request)
{


    $this->Validate($request,[
        'registration_no'=>'required|unique:pensioner|min:1|max:12',
        'pensioner_name'=>'required|min:1',
        'pensioner_dob'=>'required|after:-120 years|before:-60 years',
        'pensioner_address'=>'required|min:1',]
    );

    
    $newPension = new PensionerModel;
    $newPension->registration_no =$request->registration_no;
    $newPension->pensioner_name =$request->pensioner_name;
    $newPension->pensioner_dob =$request->pensioner_dob;
    $newPension->pensioner_address =$request->pensioner_address;
    $newPension->save();
    
    return response()->json('Pensioner Registered Successfully.');


} 




public function show($id)
{

    $newPension = PensionerModel::find($id);
    return response()->json($newPension);

}


 



public function getByName($name)
    {


        $newPension = PensionerModel::where('pensioner_name',$name)->latest()->get();
        return response()->json(PensionResource::collection($newPension));
       
    }

    public function getByAddress($address)
    {


        $newPension = PensionerModel::where('pensioner_address',$address)->latest()->get();
        return response()->json(PensionResource::collection($newPension));
       
    }

    public function getByReg($reg)
    {


        $newPension = PensionerModel::where('registration_no',$reg)->latest()->get();
        return response()->json(PensionResource::collection($newPension));
       
    }

}




