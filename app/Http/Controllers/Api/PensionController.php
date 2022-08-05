<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\PensionerModel;
use Validator;
use App\Http\Controllers\Api\BaseController as BaseController;
use App\Http\Resources\PensionResource;




class PensionController extends BaseController
{

    public function index()
    {

        $newPension = PensionerModel::latest()->get();
        return response()->json([PensionResource::collection($newPension), 'Pensioner details fetched.']);
    
    
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

        
        return response()->json(['Pensioner created successfully.', new PensionResource($newPension)]);
    }

   




    public function show($id)
    {
        $newPension = PensionerModel::find($id);
        if (is_null($newPension)) {
            return response()->json('Data not found', 404);
        }
        return response()->json([new PensionResource($newPension)]);
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


    public function update(Request $request, $id)
    {

        $newPension = $request->all();
        $newPension = PensionerModel::find($id);
        if (is_null($newPension)) {
            return response()->json('Data not found to update', 404);
        }

        else{


            $this->Validate($request,[
                'registration_no'=>'required|unique:pensioner|min:1|max:12',
                'pensioner_name'=>'required|min:1',
                'pensioner_dob'=>'required|after:-120 years|before:-60 years',
                'pensioner_address'=>'required|min:1',]
            );
    
            
            $newPension->registration_no =$request->registration_no;
            $newPension->pensioner_name =$request->pensioner_name;
            $newPension->pensioner_dob =$request->pensioner_dob;
            $newPension->pensioner_address =$request->pensioner_address;
            $newPension->save();
    
            
            return response()->json(['Pensioner created successfully.', new PensionResource($newPension)]);

    }

    }




    public function destroy($id)
    {

        
        $newPension = PensionerModel::find($id);
        if (is_null($newPension)) {
            return response()->json('Data not found', 404);
        }
        $newPension->delete();
        
        return response()->json('pensioner deleted successfully!');
    }

    
}
