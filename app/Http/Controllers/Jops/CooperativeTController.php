<?php

namespace App\Http\Controllers\Jops;

use App\Models\Cooperative;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class CooperativeTController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cooperatives =Cooperative::all();

        return view('pages.backend.cooperative.cooperative_list',compact('cooperatives'));
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
            'phone'=>"required|numeric|min:10",
            'email'=>"required|email",
            'university'=>"required",
            'Graduate'=>"required",
            'file' => 'required|max:10000|mimes:pdf,doc,docx',
            'message'=>"required",
        ]);

        if($request->file){
            $fileName = time().'.'.$request->file->extension();
            $request->file->move(public_path('uploads/jops/cooperative'), $fileName);
        }

       $cooperative= Cooperative::create([
            'name' =>$request->name,
            'phone' =>$request->phone,
            'email' =>$request->email,
            'university' =>$request->university,
            'Graduate' =>$request->Graduate,
            'message'=>$request->message,
            'file'=> $fileName,
        ]);



        return Redirect::back();
    }

    /**
     * Display the specified resource.
     */


    public function show(string $id)
    {

        $item=Cooperative::where("id",$id)->first();

        if($item==NULL){
            return Redirect::back();
        }

        return response()->json([
            'status' => '1',
            'phone' =>$item->phone,
            'name' => $item->name,
            'email' => $item->email,
            'university' =>$item->university,
            'Graduate' =>$item->Graduate,
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
