<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\user;
use App\Models\usage;
use App\Models\vehicle;
use App\Models\gas_usage;
use Exception;
use App\Exports\usageExport;
use Maatwebsite\Excel\Facades\Excel;
class UsageController extends Controller
{
    public function listUsageVehicle()
    {

        $data= usage::join('vehicle','usage.vehicle','=','vehicle.id')
        ->join('user','usage.driver','=','user.id')
        ->leftJoin('gas_usage','usage.id','=','gas_usage.usage_id')
        ->get(['usage.id','usage.date','user.name','gas_usage.liter_per_day','usage.head_office_agreement','usage.branch_office_agreement']);

        // show the form
        return view('/vehicle_usage_list')->with(compact('data'));
    }
    
    public function orderVehicleView()
    {
        // show the form
        return view('/vehicle_usage_list');
    }
    public function CreateOrderVehicleView()
    {   
        $employee= user::where('role','employee')->where('mine_office_id',Auth::guard('web')->user()->mine_office_id)->get();

        $head= user::where('role','head manager')->get();
        $branch= user::where('role','branch manager')->get();
       
        $vehicle= vehicle::where('mine_office_id',Auth::guard('web')->user()->mine_office_id)->get();
        // show the form
        return view('/order_vehicle_view')->with(compact('head','branch','vehicle','employee'));
    }
    public function orderVehicle(Request $request)
    {

        $order = usage::create([
            'date' => $request->date,
    
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
        
    }
    public function approve(Request $request)
    {
    
        if(Auth::guard('web')->user()->role == "head manager"){
            $usage = usage::where('id',$request->id)->update([
                'head_office_agreement' => true,
              
                
                
            ]);  
        }elseif(Auth::guard('web')->user()->role == "branch manager"){
            $usage = usage::where('id',$request->id)->update([
                'branch_office_agreement' => true,
              
        
                
            ]);  
        }
        if($usage){
         
            return redirect()->route('dashboard');
    
            }else{
                return redirect()->back();

    
    
            }

            
    }
    public function export_excel()
	{
		return Excel::download(new usageExport, 'usage.xlsx');
	}
}
