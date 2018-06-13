<?php

namespace App\Http\Controllers;

use App\JobVacancy;
use Illuminate\Http\Request;

class JobVacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return (JobVacancy::all());
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
        return JobVacancy::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JobVacancy  $jobVacancy
     * @return \Illuminate\Http\Response
     */
    public function show(JobVacancy $jobVacancy)
    {
        return $jobVacancy;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JobVacancy  $jobVacancy
     * @return \Illuminate\Http\Response
     */
    public function edit(JobVacancy $jobVacancy)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JobVacancy  $jobVacancy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobVacancy $jobVacancy)
    {

        //return $jobVacancy;
        if($jobVacancy->update($request->all())){
            return $jobVacancy;
        }else{
            return array("message" => "Error happened");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JobVacancy  $jobVacancy
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobVacancy $jobVacancy)
    {
        if($JobVacancy->delete()){
            return array("message" => "Successfully Deleted");
        }else{
            return array("message" => "Error happened");
        }
    }
}
