<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Auditor;

class AuditorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auditors = Auditor::all();
        return response()->json($auditors);
    }

    public function all() {
        $rolesUser = DB::table('auditors')
        ->join('roles', 'auditors.role_id', '=', 'roles.id')
        ->select('auditors.*', 'roles.*')
        ->get();

        return response()->json($rolesUser);
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
        $auditor = Auditor::create($data);

        return response()->json([
            'auditor' => $auditor,
            'url' => "/api/auditors/{$auditor->id}"
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
        return response()->json(Auditor::findOrFail($id));
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
        $auditor = Auditor::findOrFail($id);
        $auditor->update($data);

        return response()->json($auditor, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $auditor = Auditor::findOrFail($id);
        $auditor->delete();
        return response()->json([
            'message' => 'Deleted successfully',
            'url' => '/api/auditors'
        ], 200);
    }
}
