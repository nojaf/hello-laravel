<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;
use App\Note;

use App\Http\Requests;

class NotesController extends Controller
{
    public function store(Request $request, Card $card)
    {
//        $note = new Note;
//        $note->body = $request->body;
//        $card->notes()->save($note);

//        $note = new Note(['body' => $request->body]);
//        $card->notes()->save($note);

//        $card->notes()->create(['body' => $request->body]);

//        $card->notes()->create($request->all()); // only body gets sets -> $fillable inside Note.php

        $card->addNote($request->body);

        return back();
    }
}
