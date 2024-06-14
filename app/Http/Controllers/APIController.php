<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\musik;
class APIController extends Controller
{
    public function searchmusik(Request $request)
    {
        $cari = $request->input('q');
        $musik = Musik::where('title','LIKE',"%$cari%")->get();
        if($musik->isEmpty())
        {
            return response()->json([
                                    'success' => false,
                                    'data' => 'Data tidak ditemukan'
                                    ], 404)->header('Access-control-Allow-Origin','http://127.0.0.1:5500');
        }
        else 
        {
            return response()->json([
                'success' => true,
                'data' => $musik
                ], 200)->header('Access-control-Allow-Origin','http://127.0.0.1:5500');
        }
    }
}
