<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Campaign;

class CampaignController extends Controller
{

    public function index()
    {
        $allCampaigns = Campaign::paginate(10);
        if (!$allCampaigns) {
            return response(['error' => 'There is no campaign']);
        }
        return response()->json($allCampaigns);
    }

    public function store(Request $request)
    {
        $campaign = new Campaign;
        $campaign->name = $request->name;
        $campaign->save();

        return response()->json($campaign);
    }

    public function show($campaign_id)
    {
        $campaign = Campaign::where('campaign_id', '=', (int)$campaign_id)->first();
        if (!$campaign) {
            return response(['error' => 'Campaign not found']);
        }
        return response()->json($campaign);
    }

    public function update(Request $request, $campaign_id)
    {
        $campaign = Campaign::where('campaign_id', '=', (int)$campaign_id)->first();
        if (!$campaign) {
            return response(['error' => 'Campaign not found']);
        }

        $campaign->name = $request->name;
        $campaign->save();

        return response()->json($campaign);
    }

    public function destroy($campaign_id)
    {
        $campaign = Campaign::where('campaign_id', '=', (int)$campaign_id)->first();
        if (!$campaign) {
            return response(['error' => 'Campaign not found']);
        }
        $campaign->delete();
        return response()->json(['success' => 'Campaign deleted']);
    }
}