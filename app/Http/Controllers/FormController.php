<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use App\Http\Requests\VacancyRequest;
use App\Http\Resources\FormResource;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form = Form::all();

        return FormResource::collection($form);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VacancyRequest $request)
    {


        $request['resume'] = $request->file('resume')->store('resumes','public');


        $form = Form::create($request->all());

        // return response()->json($form);
        // Form::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'contact_no'=>$request->contact_no,
        //     'dob'=>$request->dob,
        //     'gender'=>$request->gender,
        //     'resume'=>null,
        //     'cover_letter'=>$request->cover_letter,

        // ]);
    

        return response()->json([
            'message' => 'Thank you for applying',
            'status' => 'success',
            'data' => $form

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        return response()->json(['form'=>$form]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($id);
        $form = Form::find($id);
        // dd($form);
        $form->update($request->all());

        return response()->json([
            'message' => 'Updated Succesfully',
            'status' => 'success',
            'data' => $form

        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
       $form->delete();
       return response()->json([
        'message'=>'Deleted',
        'status'=>'success']);
    }
}
