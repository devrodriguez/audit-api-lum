<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Finding;

class FindingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Finding::all());
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
        $finding = Finding::create($data);

        return response()->json([
            'finding' => $finding,
            'message' => 'Finding created',
            'url' => "/api/findings/{$finding->id}"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(Finding::findOrFail($id));
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
        $finding = Finding::findOrFail($id);
        $finding->update($finding);

        return response()->json([
            'finding' => $finding,
            'message' => 'Finding updated',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Finding::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Finding deleted',
            'url' => '/api/findings'
        ]);
    }
}
