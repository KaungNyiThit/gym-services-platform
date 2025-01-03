<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function addService(){

        $validator = validator(request()->all(), [
            'name' => 'required',
            'header' => 'required',
            'text' => 'required',
            'photo' => 'required|image',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

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

        return redirect('/gym-services', );
    }

}
