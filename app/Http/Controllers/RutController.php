<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rut;

class RutController extends Controller
{
    public function login(){
        return view('login');
    }

    public function inscription(){
        return view('inscription');
    }

    public function inscriptionStore(Request $request){
        if (Rut::where('rut', '=', $request['rut'])->count() > 0) {           
            return redirect()->back()->with('alert','This user already registered.');
         }
        else{
            $request->validate([
                'rutImg' => 'required|max:5120',
                'docImg' => 'required|max:5120',
            ]); 

            $rutImg = $request['rut'].'.'.$request->rutImg->getClientOriginalExtension();  
            $request->rutImg->move(public_path('rutImg/'), $rutImg);
            $rutImg = 'rutImg/'.$rutImg;
    
            $docImg = $request['rut'].'.'.$request->docImg->getClientOriginalExtension();  
            $request->docImg->move(public_path('docImg/'), $docImg);
            $docImg = 'docImg/'.$docImg;
    
            $options = new Rut([
                'rut' => $request['rut'],
                'name' => $request['name'],
                'f_name' => $request['f_name'],
                'm_name' => $request['m_name'],
                'phone' => $request['phone'],
                'email' => $request['email'],
                'address' => $request['address'],
                'depart' => $request['depart'],
                'occupation' => $request['occupation'],
                'profession' => $request['profession'],
                'birth' => $request['birth'],
                'gender' => $request['gender'],
                'distMode' => $request['distMode'],
                'docImg' => $docImg,
                'rutImg' => $rutImg,
            ]);
            
            $options->save();
            return response()->json('success');
        }     
    }

    public function rutSingup(Request $request){
        if (Rut::where('rut', '=', $request['rut'])->count() > 0) {           
            return response()->json('failed');
         }
        else{
            return response()->json('success');
            // return view('inscription')->with('rut',$request['rut']);
        }
        
    }
}
