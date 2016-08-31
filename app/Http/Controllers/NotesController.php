<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use App\Note;

class NotesController extends Controller
{

    private $user;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth:api');
        $this->user = User::find(1);
    }

    public function index() {
        
        return view('index');
    }

    public function create()
    {
        return view('createnote');
    }
    public function postNote(Request $request) {
        $title = $request->input('title');
        $content = $request->input('content');
        
        $req = $request->only(['title','content']);
        $this->user->notes()->create($req);
        return redirect('/notes');
    }
    public function deleteNote($id) {
        //return $id;
        $note = Note::find($id);
        $note->delete();

        //return redirect('/notes');
    }

    public function getNotes() {
        $notes = $this->user->notes()->get();

        //echo password_hash('$sh4rpspr1nG$', PASSWORD_BCRYPT);

        return view('notes', ['notes' => $notes]);
    }

    public function editNote($id) {
        $note = Note::where('id','=',$id)->first();

        return view('createnote')->with([
            'note' => $note,
        ]);
    }

    public function updateNote(Request $request, $id) {
        $note = Note::where('id','=',$id)->first();

        $req = $request->only(['title','content']);
        $note->title = $request->input('title');
        $note->content = $request->input('content');

        $note->save($req);

        return redirect('/notes');
    }

}
