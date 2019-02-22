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

    public function create(Request $request)
    {
        $session = Session::create($request->all());

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
