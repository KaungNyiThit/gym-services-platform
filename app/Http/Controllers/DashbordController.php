<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use App\Models\Service;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    public function index(){
        return view('index');
    }

    public function trainers(){
        $trainer = Trainer::all();

        return view('gym.trainers', [
            'trainers' => $trainer,
        ]);

    }

    public function add(){
        return view('gym.addTrainer');
    }

    public function store(){

        $validator = validator(request()->all(), [
            'name' => 'required',
            'expertise' => 'required',
            'bio' => 'required',
            'photo' => 'nullable|image|max:2048',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
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

        return redirect('/');

    }

    public function delete($id){
        $trainer = Trainer::find($id);
        $trainer->delete();

        return redirect('/trainers')->with('info', 'Trainer deleted');
    }

    public function gymService(){

        $services = Service::all();
        return view('gym.gym_services',[
            'services' => $services,
        ]);
    }

}
