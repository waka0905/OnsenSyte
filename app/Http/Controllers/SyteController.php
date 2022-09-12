<?php

namespace App\Http\Controllers;

use App\Syte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SyteController extends Controller
{
    /**
 * Syte一覧を表示する
 * 
 * @param Syte Syteモデル
 * @return array Syteモデルリスト
 */
    public function index(Syte $syte)
    {
    return view('sytes/index')->with(['sytes' => $syte->getByLimit()]); 
    }
    
    public function result(Request $request)
    {
        $syte = new Syte;

        if(!is_null($request->input('sauna',NULL))){
            
            $syte = $syte->where('sauna', $request->input('sauna'));
        }

        if(!is_null($request->input('ganban',NULL))){
            $syte = $syte->where('ganban', $request->input('ganban'));
        }

        if(!is_null($request->input('tansan',NULL))){
            $syte = $syte->where('tansan', $request->input('tansan'));
        }

        if(!is_null($request->input('restaurant',NULL))){
            $syte = $syte->where('restaurant', $request->input('restaurant'));
        }

        $data = $syte->get();
       // return view('sytes/result', ["sytes" => $data]);
       return view('sytes/result')->with(['sytes'=> $data]); 
    }   
    
    public function area()
    {
    return view('sytes/area');
    }
    
    public function genre()
    {
    return view('sytes/result');
    }
    public function terms(Request $request)
    {
        $syte = new Syte;

        if(!is_null($request->input('prefecture',NULL))){
            
            $syte = $syte->where('prefecture', $request->input('prefecture'))
                ->orderBy('review', 'desc')
                ->orderBy('id');
        }
        $data = $syte->paginate();
     return view('sytes/terms')->with(['sytes'=> $data, 'pref'=>$request->input('prefecture')]); 
    }
    
    public function show(Syte $syte)
    {
    return view('sytes/show')->with(['syte' => $syte]);
    }
    
    public function rank(Syte $syte)
    {
    return view('sytes/rank')->with(['sytes' => $syte->getPaginateByLimit()]); 
    }
    
    public function direction(Request $request)
    {
         $syte = new Syte;

        if(!is_null($request->input('direction',NULL))){
            
            $syte = $syte->where('direction', $request->input('direction'));
        }
        $data = $syte->get();
    return view('sytes/direction')->with(['sytes' => $data]);
    }
    
    public function store(Request $request){
        $file = $request->file('img');
        $path = $file->store('public/img');
        
        
        Log::debug($file);
        return redirect('/sytes/store');
    }
    
}
