<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Link;

class LinkController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $links = Link::where("user_id", Auth::user()->id)
        ->orderByDesc("created_at")
        ->get();

        return view("profile.links.index", compact("links"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view("profile.links.create", [
            "link" => new Link
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        // Validate field form
        $data = request()->validate([
            "title" => "required|string",
            "subtitle" => "",
            "link" => "required|string",
            "banner" => "",
            "description" => ""
        ]);
        
        // Added user to link
        $data["user_id"] = Auth::user()->id;
        
        // Save link in the database
        Link::create($data);

        return redirect()->route("links.index")->with([
            "message" => "El enlace se agrego a la lista con exito.",
            "status" => "primary"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Link $link) {
        return view("profile.links.show", compact("link"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Link $link) {
        return view("profile.links.edit", compact("link"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Link $link) {
        // Validate field form
        $data = request()->validate([
            "title" => "required|string",
            "subtitle" => "",
            "link" => "required|string",
            "banner" => "",
            "description" => ""
        ]);
        
        // Update link
        $link->update($data);

        return redirect()->route("links.show", $link)->with([
            "message" => "El enlace fue modificado con exito.",
            "status" => "warning"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Link $link) {
        $link->delete();

        return redirect()
        ->route("links.index")
        ->with([
            "message" => "El enlace fue eliminado de su lista con exito.",
            "status" => "danger"
        ]);
    }
}
