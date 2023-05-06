<?php

namespace App\Http\Controllers\Jops;

use App\Models\Join;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class JoinUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $joins =Join::all();
        return view('pages.backend.join.join_list',compact('joins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name'=>"required",
            'email'=>"required|email",
            'position'=>"required",
            'preferred'=>"required",
            'file' => 'required|max:10000|mimes:pdf,doc,docx',
            'message'=>"required",
        ]);

        if($request->file){
            $fileName = time().'.'.$request->file->extension();
            $request->file->move(public_path('uploads/jops/join'), $fileName);
        }



       $join= Join::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'position' =>$request->position,
            'preferred' =>$request->preferred,
            'message'=>$request->message,
            'file' => $fileName,
        ]);



        return Redirect::back();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $item=Join::where("id",$id)->first();

        if($item==NULL){
            return Redirect::back();
        }

        return response()->json([
            'status' => '1',
            'name' => $item->name,
            'email' => $item->email,
            'position' => $item->position,
            'preferred' => $item->preferred,
            'message' => $item->message,
            'file' => $item->file,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
