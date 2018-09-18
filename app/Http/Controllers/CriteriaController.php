<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Criteria;

class CriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Criteria::all());
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
        $criteria = Criteria::create($data);

        return response()->json([
            'criteria' => $criteria,
            'url' => "/api/auditors/{$criteria->id}"
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
        return response()->json(Criteria::findOrFail($id));
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
        $criteria = Criteria::findOrFail($id);
        $criteria->update($data);

        return response()->json($criteria, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Criteria::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Deleted successfull',
            'url' => '/api/criterias'
        ]);
    }
}
