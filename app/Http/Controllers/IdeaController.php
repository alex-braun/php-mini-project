<?php

namespace App\Http\Controllers;

//models
use App\User;
use App\Idea;
//laravel request object.  Allows us to parse the data as it comes in.
use Illuminate\Http\Request;
//gets the controller class of laravel to extend controller off of that class.
use App\Http\Controllers\Controller;

class IdeaController extends Controller
{
    /**
     * Get all ideas
     *
     * @return JSON Response
     */
    public function index()
    {
      $ideas = Idea::all();

      return response()->json($ideas);
    }

    /**
     * Show single idea by ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
      $idea = Idea::find($id);
      return response()->json($idea);
    }

    /**
     * Creates single idea.
     *
     * @return Response
     */
    public function store(Request $request)
    {
      $idea = new Idea;

      $idea->title = $request->title;
      $idea->description = $request->description;
      $idea->completed = $request->completed;

      $idea->save();
    }

    /**
     * Update single idea by ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
      $idea = Idea::find($id);

      if($request->title) {
        $idea->title = $request->title;
      }

      if($request->description) {
        $idea->description = $request->description;
      }
      if($request->completed) {
        $idea->completed = $request->completed;
      }

      $idea->save();
    }

    /**
     * Destroy single idea by ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
      Idea::destroy($id);
    }
}
