<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Enterprise;

class EnterpriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enterprises = Enterprise::all();
        return response()->json($enterprises);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $enterprise = Enterprise::create($data);

        return response()->json([
            'enterprise' => $enterprise,
            'url' => "/enterprises/{$enterprise->id}"
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(Enterprise::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $enterprise = Enterprise::findOrFail($id);
        $enterprise->update($data);

        return response()->json($enterprise, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $enterprise = Enterprise::findOrFail($id);
        $enterprise->delete();

        return response()->json([
            'message' => 'Deleted successfully',
            'url' => "/api/enterprises"
        ], 200);
    }
}
