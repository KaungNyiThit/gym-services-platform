<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainer = Trainer::all();
        return response()->json($trainer, 200) ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = validator(request()->all(), [
            'name' => 'required',
            'expertise' => 'required',
            'bio' => 'required',
            'photo' => 'nullable|image|max:2048',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        if(request()->hasFile('photo')){
            $imgPath = request()->photo->store('photos', 'public');
        }else{
            $imgPath = null;
        }

        $trainer = new Trainer;
        $trainer->name = request()->name;
        $trainer->expertise = request()->expertise;
        $trainer->bio = request()->bio;
        $trainer->photo = $imgPath;
        $trainer->save();

        return response()->json([
            'message' => 'Trainer created successfully',
            'trainer' => $trainer
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Trainer $trainer)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trainer $trainer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trainer $trainer)
    {
        $trainer->delete();
        return response()->json([
            'message' => 'Trainer deleted successfully'
        ], 200);
    }
}
