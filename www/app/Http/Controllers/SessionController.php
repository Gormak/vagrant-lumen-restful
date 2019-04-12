<?php

namespace App\Http\Controllers;

use App\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{
	
	public function showAllSessions()
    {
        return response()->json(Session::all());
    }

    public function showOneSession($id)
    {
        return response()->json(Session::find($id));
    }
	
	public function showSessionWithToken($token)
	{
		$session = Session::where('token', $token);
		return response()->json($session, 200);
	}

    public function create(Request $request)
    {
        //$session = Session::create($request->all());
		
		$string = "";
        $chaine = "SquadHealthCheckByAtecna123456789";
        srand((double)microtime()*1000000);
        for($i=0; $i<10; $i++){
            $string .= $chaine[rand()%strlen($chaine)];
        }
		
		$session = Session::create([
            'name' => $request->input('name'),
            'session_key' => $request->input('session_key', $string),
            'status' => $request->input('status', '1'),
        ]);

        return response()->json($session, 201);
    }

    public function update($id, Request $request)
    {
        $session = Session::findOrFail($id);
        $session->update($request->all());

        return response()->json($session, 200);
    }

    public function delete($id)
    {
        Session::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
	
}
