<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller
{

    public function index()
    {
        $allGroup = Group::paginate(10);
        if (!$allGroup) {
            return response(['error' => 'There is no group']);
        }
        return response()->json($allGroup);
    }

    public function store(Request $request)
    {
        $group = new Group;
        $group->name = $request->name;
        $group->campaign_id = $request->campaign_id;
        $group->save();

        return response()->json($group);
    }

    public function show($group_id)
    {
        $group = Group::where('group_id', '=', (int)$group_id)->first();
        if (!$group) {
            return response(['error' => 'Group not found']);
        }
        return response()->json($group);
    }

    public function update(Request $request, $group_id)
    {
        $group = Group::where('group_id', '=', (int)$group_id)->first();
        if (!$group) {
            return response(['error' => 'Group not found']);
        }

        $group->name = $request->name;
        $group->campaign_id = $request->campaign_id;
        $group->save();

        return response()->json($group);
    }

    public function destroy($group_id)
    {
        $group = Group::where('group_id', '=', (int)$group_id)->first();
        if (!$group) {
            return response(['error' => 'Group not found']);
        }
        $group->delete();
        return response()->json(['success' => 'Group deleted']);
    }
}