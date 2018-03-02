<?php

namespace App\Http\Controllers;

use App\Project;
use App\Company;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class ProjectsController extends Controller
{
    protected $company;

    public function __construct()
    {
        $this->middleware('auth');
    }

    private function get_company($id = null)
    {
        $this->company = is_null($id) ? null : Company::find($id);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = null)
    {
        $this->get_company($id);

        $projects = Project::all()
            ->where('user_id',auth()->user()->id)
        ;

        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id = null)
    {
        $this->get_company($id);

        dd($id);
        dd($company);
        dd($this->company);
        // dd('create project');


        return view('projects.create',['company'=>$this->company]);
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

        $project = Project::create([
            'name' => request('project-name'),
            'description' => request('project-description'),
            'user_id' => auth()->user()->id,
            'company_id' => request('company-id'),
        ]);

        $project->save();

        return redirect('projects/'.$project->id);
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

        return view('projects.show',compact('project'));
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

        return view('projects.edit',compact('project'));
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

        $projectUpdate = Project::where('id',$project->id)
            ->update([
                'name' => $request->input('project-name'),
                'description' => $request->input('project-description'),
            ])
        ;

        if ($projectUpdate) {

            return redirect('projects/'.$project->id)
                ->with('success','Company Updated')
            ;
        }

        return back()->withInput();
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

        $id = $project->id;

        if($project->delete()){
            return redirect('projects')
                ->with('success','Project ID '.$id.' deleted')
            ;
        }

        return back()
            ->withInput()
            ->with('error', 'Project could not be deleted')
        ;
    }
}
