<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\MessageRequest;
use App\Message;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Request;

class MessagesController extends Controller {

  public function index(){
    $messages = Message::latest()->get();
    return view('messages.index', compact('messages'));
  }

  public function store(MessageRequest $request){
    $message = new Message($request->all());
    Auth::user()->messages()->save($message);
    return redirect('messages');
  }

  public function edit($id){
    $message = Message::findOrFail($id);
    return view('messages.edit', compact('message'));
  }

  public function update($id, MessageRequest $request){
    $message = Message::findOrFail($id);
    $message->update($request->all());
    return redirect('messages');
  }

  public function destroy($id){
    $message = Message::where('id', '=', $id)->firstOrFail();
    $message->destroy($id);
    return redirect('messages');
  }

}
