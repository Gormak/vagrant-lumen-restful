<?php

namespace App\Http\Controllers;

use App\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
	
	public function showAllResults()
    {
        return response()->json(Result::all());
    }

	public function showOneResult($id)
    {
        return response()->json(Result::find($id));
    }

    public function create(Request $request)
    {
        $result = Result::create($request->all());

        return response()->json($result, 201);
    }

	/*
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
	*/
	
}
