<?php

namespace App\Http\Controllers;

use App\Models\insurance;
use App\Models\company;
use App\Models\coverage;
use App\Models\issuer;
use App\Models\referance;
use App\Models\paymentmode;
use App\Models\segment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class InsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        //$insurance = insurance::all();
        $insurance = insurance::with('companies')->with('coverages')->get();

        return view('insurance',['insurance'=>$insurance]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $insurance = [];
        $company = company::all();
        $coverage = coverage::all();
        $issuer = issuer::all();
        $referance = referance::all();
        $segment = segment::all();
        $paymentmode = paymentmode::all();

        return view('create-insurance',['insurance'=>$insurance,'company'=>$company,'coverage'=>$coverage,'issuer'=>$issuer,'referance'=>$referance,'segment'=>$segment,'paymentmode'=>$paymentmode]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        // $validatedData = $request->validate([
        //         'customer_name'=> 'required',
        //         'reg_no'=> 'required',
        //         'company_id '=> 'required',
        //         'make'=> 'required',
        //         'model'=> 'required',
        //         'fuel'=> 'required',
        //         'seating'=> 'required',
        //         'gvm_or_cc'=> 'required',
        //         'manufacturing_year'=> 'required',
        //         'segment_id'=> 'required',
        //         'coverage_id'=> 'required',
        //         'od'=> 'required',
        //         'tp'=> 'required',
        //         'net_premium'=> 'required',
        //         'gst'=> 'required',
        //         'final_premium'=> 'required',
        //         'payment_status'=> 'required',
        //         'collected_prm'=> 'required',
        //         'policy_number'=> 'required',
        //         'risk_start_date'=> 'required',
        //         'ref_name_id'=> 'required',
        //         'mobile_number'=> 'required',
        //         'issued_by_id'=> 'required',
        //         'issued_code'=> 'required',
        //         'email'=> 'required',
        //         'payment_mode_id'=> 'required'
        //     ]);
        if($request->insurance_id){
            
        //     $update['name'] = $request->tag_type_name;
        //     $update['code'] = $request->code;
        //    // $update['created_by'] = Auth::user()->id;
        //    //$tagsUpdate = TagTypes::find($request->tag_type_id);
        //     $tags = $tagsUpdate->update($update);

            $update['customer_name'] =  $request->customer_name;
            $update['reg_no'] =  $request->reg_no;
            $update['company_id'] =  $request->company_id ;
            $update['make'] =  $request->make;
            $update['model'] =  $request->model;
            $update['fuel'] =  $request->fuel;
            $update['seating'] =  $request->seating;
            $update['gvm_or_cc'] =  $request->gvm_or_cc;
            $update['manufacturing_year'] =  $request->manufacturing_year;
            $update['segment_id'] =  $request->segment_id;
            $update['coverage_id'] =  $request->coverage_id;
            $update['od'] =  $request->od;
            $update['tp'] =  $request->tp;
            $update['net_premium'] =  $request->net_premium;
            $update['gst'] =  $request->gst;
            $update['final_premium'] =  $request->final_premium;
            $update['payment_status'] =  $request->payment_status;
            $update['collected_prm'] =  $request->collected_prm;
            $update['policy_number'] =  $request->policy_number;
            $update['risk_start_date'] =  $request->risk_start_date;
            $update['ref_name_id'] =  $request->ref_name_id;
            $update['mobile_number'] =  $request->mobile_number;
            $update['issued_by_id'] =  $request->issued_by_id;
            $update['issued_code'] =  $request->issued_code;
            $update['email'] =  $request->email;
            $update['payment_mode_id'] =  $request->payment_mode_id;
            $update['date'] =  $request->date;
            $update['agent_commission'] =  $request->agent_commission;
            $update['payment_given_to_account'] =  $request->payment_given_to_account;
            $update['company_payout'] =  $request->company_payout;

            $insuranceUpdate = insurance::find($request->insurance_id);
            $insurance = $insuranceUpdate->update($update);

        }
        else{
          //  dd($request);
            $insurance =  insurance::create([
                'customer_name' =>  $request->customer_name,
                'reg_no' =>  $request->reg_no,
                'company_id' =>  $request->company_id,
                'make' =>  $request->make,
                'model' =>  $request->model,
                'fuel' =>  $request->fuel,
                'seating' =>  $request->seating,
                'gvm_or_cc' =>  $request->gvm_or_cc,
                'manufacturing_year' =>  $request->manufacturing_year,
                'segment_id' =>  $request->segment_id,
                'coverage_id' =>  $request->coverage_id,
                'od' =>  $request->od,
                'tp' =>  $request->tp,
                'net_premium' =>  $request->net_premium,
                'gst' =>  $request->gst,
                'final_premium' =>  $request->final_premium,
                'payment_status' =>  $request->payment_status,
                'collected_prm' =>  $request->collected_prm,
                'policy_number' =>  $request->policy_number,
                'risk_start_date' =>  $request->risk_start_date,
                'ref_name_id' =>  $request->ref_name_id,
                'mobile_number' =>  $request->mobile_number,
                'issued_by_id' =>  $request->issued_by_id,
                'issued_code' =>  $request->issued_code,
                'email' =>  $request->email,
                'payment_mode_id' =>  $request->payment_mode_id,
                'date' =>  $request->date,
                'agent_commission' =>  $request->agent_commission,
                'payment_given_to_account' =>  $request->payment_given_to_account,
                'company_payout' =>  $request->company_payout,
             ]);
        }


        if($insurance){
            return redirect()->route('insurance');
        }else{
            return response()->json(['error' => 'Failed']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(insurance $insurance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $insurance = insurance::find($id);
        $company = company::all();
        $coverage = coverage::all();
        $issuer = issuer::all();
        $referance = referance::all();
        $segment = segment::all();
        $paymentmode = paymentmode::all();
        return view('create-insurance',['insurance' => $insurance,'company' => $company,'coverage'=>$coverage,'issuer'=>$issuer,'referance'=>$referance,'segment'=>$segment,'paymentmode'=>$paymentmode]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, insurance $insurance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(insurance $insurance)
    {
        //
    }
}
