<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service = Service::all();

        return response()->json($service, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {

        if(request()->hasFile('photo')){
            $imgPath = request()->photo->store('photos', 'public');
        }else{
            $imgPath = null;
        }
        $services = new Service;
        $services->name = request()->name;
        $services->header = request()->header;
        $services->text = request()->text;
        $services->photo = $imgPath;
        $services->save();

        return $services;
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();

        return response()->json([
            'message' => 'Service deleted successfully'
        ], 200);
    }
}
