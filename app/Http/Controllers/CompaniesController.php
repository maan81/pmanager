<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class CompaniesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $companies = Company::all()
            ->where('user_id',auth()->user()->id)
        ;

        return view('companies.index', [ 'companies' => $companies ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $company = Company::create([
            'name' => request('company-name'),
            'description' => request('company-description'),
            'user_id' => auth()->user()->id,
        ]);

        $company->save();

        return redirect('companies/'.$company->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
        return view('companies.show',compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //

        return view('companies.edit',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //

        $companyUpdate = Company::where('id',$company->id)
            ->update([
                'name' => $request->input('company-name'),
                'description' => $request->input('company-description'),
            ])
        ;

        if ($companyUpdate) {

            return redirect('companies/'.$company->id)
                ->with('success','Company Updated')
            ;
        }

        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //

        $id = $company->id;

        if($company->delete()){
            return redirect('companies')
                ->with('success','Company ID '.$id.' deleted')
            ;
        }

        return back()
            ->withInput()
            ->with('error', 'Company could not be deleted')
        ;
    }
}
