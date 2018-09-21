<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Audit;

class AuditController extends Controller
{
    public function index() {
        return Audit::all();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        $audits = DB::table('audits')
        ->join('auditors', 'audits.auditor_id', 'auditors.id')
        ->join('enterprises', 'audits.enterprise_id', 'enterprises.id')
        ->leftJoin('audit_criteria', 'audit_criteria.audit_id', 'audits.id')
        ->select('audits.*', 'auditors.*', 'audit_criteria.*', 'enterprises.*')
        ->get();
        return response()->json($audits);
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
        $audit = Audit::create($data);

        return response()->json([
            'audit' => $audit,
            'url' => "/api/audits/{$audit->id}"
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
        return response()->json(Audit::findOrFail($id));
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
        $audit = Audit::findOrFail($id);
        $audit->update($data);
        return response()->json($audit, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $audit = Audit::findOrFail($id);
        $audit->delete();
        return response()->json([
            'message' => 'Deleted successfully',
            'url' => '/audits'
        ], 200);
    }

    public function addCriteria(Request $request) {
        $data = $request->all();
        $auditId = $data['audit_id'];
        $criteriaId = $data['criteria_id'];
        $audit = Audit::find($auditId);
        $audit->criterias()->attach($criteriaId);

        return response()->json($audit);
    }
}
