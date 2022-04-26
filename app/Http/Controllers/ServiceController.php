<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\user;
use App\Models\service;
use App\Models\vehicle;
use Exception;

class ServiceController extends Controller
{
    public function listServiceVehicle()
    {

        $data= service::join('vehicle','service.vehicle','=','vehicle.id')
        ->join('user','service.driver','=','user.id')
        ->get(['service.id','service.date','user.name','service.description','service.head_office_agreement','service.branch_office_agreement']);

        // show the form
        return view('/service_list')->with(compact('data'));
    }
    
    public function orderServiceView()
    {
        // show the form
        return view('/service_list');
    }
    public function CreateServiceView()
    {   
        $employee= user::where('role','employee')->where('mine_office_id',Auth::guard('web')->user()->mine_office_id)->get();

        $head= user::where('role','head manager')->get();
        $branch= user::where('role','branch manager')->get();
       
        $vehicle= vehicle::where('mine_office_id',Auth::guard('web')->user()->mine_office_id)->get();
        // show the form
        return view('/order_service_view')->with(compact('head','branch','vehicle','employee'));
    }
    public function orderService(Request $request)
    {

        $order = service::create([
            'date' => $request->date,
            'description' => $request->description,
    
            'driver' => $request->driver,
            'head_office_manager' => $request->hmanager,
            'branch_office_manager' => $request->bmanager,
             'vehicle' => $request->vehicle,
           
          
        ]);
           
           if($order){
         
            return redirect()->route('dashboard');
    
            }else{
                return redirect()->back();

    
    
            }
        // show the form
        return view('/service_list');
    }
    public function approve(Request $request)
    {   
        if(Auth::guard('web')->user()->role == "head manager"){
            $usage = service::where('id',$request->id)->update([
                'head_office_agreement' => true,
              
        
                
            ]);  
        }elseif(Auth::guard('web')->user()->role == "branch manager"){
            $usage = service::where('id',$request->id)->update([
                'branch_office_agreement' => true,
              
        
                
            ]);  
        }
        if($usage){
         
            return redirect()->route('dashboard');
    
            }else{
                return redirect()->back();

    
    
            }

    }
}
