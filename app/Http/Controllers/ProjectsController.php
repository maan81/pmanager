<?php

namespace App\Http\Controllers;

use App\Project;
use App\Company;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    protected $company;

    public function __construct()
    {
        $this->middleware('auth');
    }

    private function get_company($id = null)
    {
        $this->company = is_null($id) ? Company::find($id) : null;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = null)
    {
        $this->get_company($id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id = null)
    {
        $this->get_company($id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id = null)
    {
        $this->get_company($id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project, $id = null)
    {
        $this->get_company($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project, $id = null)
    {
        $this->get_company($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project, $id = null)
    {
        $this->get_company($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project, $id = null)
    {
        $this->get_company($id);
    }
}
