<?php

namespace App\Http\Controllers;

//models
use App\User;
use App\Story;
//laravel request object.  Allows us to parse the data as it comes in.
use Illuminate\Http\Request;
//gets the controller class of laravel to extend controller off of that class.
use App\Http\Controllers\Controller;

class StoryController extends Controller
{
    /**
     * Get all storys
     *
     * @return JSON Response
     */
    public function index()
    {
      $storys = Story::all();

      return response()->json($storys);
    }

    /**
     * Show single story by ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
      $story = Story::find($id);
      return response()->json($story);
    }

    /**
     * Creates single story.
     *
     * @return Response
     */
    public function store(Request $request)
    {
      $story = new Story;

      $story->title = $request->title;
      $story->body = $request->body;

      $story->save();
    }

    /**
     * Update single story by ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
      $story = Story::find($id);

      if($request->title) {
        $story->description = $request->description;
      }

      if($request->body) {
        $story->body = $request->body;
      }

      $story->save();
    }

    /**
     * Destroy single story by ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
      Story::destroy($id);
    }
}
