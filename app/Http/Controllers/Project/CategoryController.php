<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\ProjectCategory as Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = array();
        $data = Category::get()->all();
 
        if (!empty($data)) {
            foreach ($data as $category) {
                $categories[] =   [
                    "name" => empty($category->translate('en')->name) ? "" : $category->translate('en')->name,
                    "status" => 'Active',
                    "projects"  => "3",

                ];
            }
        }
        return view('pages.backend.project.category_list', compact('categories'));
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
        //
 
        $data  = $request->all();
        $data['image'] = "sasa";
        $dataTrans  = $request->only('name_en', 'name_ar', 'slug_ar', 'slug_en', 'description_ar', 'description_en');

        $create = Category::create($data);
        $createTranslaitons = $create->createTranslation($dataTrans);


        return response()->json('success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
