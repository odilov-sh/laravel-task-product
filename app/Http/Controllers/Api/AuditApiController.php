<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\GetAuditHistoryRequest;
use App\Models\ProductAudit;

class AuditApiController extends Controller
{
    public function getHistory(GetAuditHistoryRequest $request)
    {
        $query = ProductAudit::query();
        $from = $request->input('from');
        if ($from) {
            $query->whereDate('created_at', '>=', $from);
        }
        $to = $request->input('to');
        if ($to) {
            $query->whereDate('created_at', '<=', $to);
        }

        return response()->json([
            'success' => true,
            'data' => $query->paginate(),
        ]);

    }
}
