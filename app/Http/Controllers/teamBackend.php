<?php

namespace App\Http\Controllers;

use App\Models\teamModel;
use Illuminate\Http\Request;

class teamBackend extends Controller
{
    public function teamBackend(){
        $allteam = teamModel::all();
        return view('dashboard.team.teambackend',compact('allteam'));
    }
    public function addteamBackend(){
        return view('dashboard.team.addteam');
    }
    public function storeteamBackend(Request $request){
        date_default_timezone_set('Asia/Kolkata');
        $storeteambackend =  new teamModel;
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'_'.$image-> getClientOriginalName();
            $image->move(public_path('image'),$imageName);
            $storeteambackend->image=$imageName;
          }
          $storeteambackend->name=$request->name;
          $storeteambackend->designation=$request->designation;
          $storeteambackend->fashbook=$request->fashbook;
          $storeteambackend->twitter=$request->twitter;
          $storeteambackend->instagram=$request->instagram;
          $storeteambackend->save();
          return redirect()->route('backend.team')->with('success','Insert Successfully');
    }
    public function editteamBackend($id){
        $editteambackend = teamModel::find($id);
        return view('dashboard.team.editteam',compact('editteambackend'));
    }
    public function updateteamBackend(Request $request){
        date_default_timezone_set('Asia/Kolkata');
        $updateteambackend = teamModel::find($request->id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'_'.$image-> getClientOriginalName();
            $image->move(public_path('image'),$imageName);
            $updateteambackend->image=$imageName;
          }
          $updateteambackend->name=$request->name;
          $updateteambackend->designation=$request->designation;
          $updateteambackend->fashbook=$request->fashbook;
          $updateteambackend->twitter=$request->twitter;
          $updateteambackend->instagram=$request->instagram;
          $updateteambackend->save();
          return redirect()->route('backend.team')->with('success','Update Successfully');

    }
    public function deleteteamBackend($id){
      $deleteteambackend = teamModel::find($id);
      if ($deleteteambackend) {
         $deleteteambackend->delete();
         return redirect()->back()->with('Success','Deleted Successfully');
      }else{
        return redirect()->back()->with('Error','Failed');
      }
    }
}
