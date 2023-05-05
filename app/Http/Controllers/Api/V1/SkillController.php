<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Skill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSkillRequest;

class SkillController extends Controller
{
    public function index()
    {

        return response()->json("skill index");
    }
    public function show(Skill $skill)//This Skill object is automatically resolved by Laravel's route model binding feature, which retrieves the Skill object from the database based on the ID specified in the URL.
    {

        return $skill;// will be automatically converted to a JSON response by Laravel. This means that when a GET request is made to the /skills/{skill} URL, this method will be called and the details of the specified Skill object will be returned in JSON format.
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
}
