<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Skill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSkillRequest;
use App\Http\Resources\V1\SkillResource;

class SkillController extends Controller
{
    public function index()
    {

       return Skill::all();
    }
    public function show(Skill $skill)
    {

        return new SkillResource($skill);
    }

    /*     Laravel will automatically validate the incoming request data using the rules defined in the StoreSkillRequest class.
 */
    public function store(StoreSkillRequest $req)
    {
        /* the $req->validated() method is called to retrieve the validated data */
        /* This method returns an array containing only the validated request data, which can then be passed directly to the create method of the Skill model to create a new instance. */

        Skill::create($req->validated());
        return response()->json("Skill Created");
    }

    public function update(StoreSkillRequest $req, Skill $skill)
    {
            $skill->update($req->validated());//validated request update to the particular id in Skill table
            return response()->json("Skill Updated");

    }

    public function destroy(Skill $skill)
    {
        $skill->delete();
        return response()->json("Skill deleted");
    }
}
