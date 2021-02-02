<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Http\Requests\StoreMessageRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PhpTestController extends Controller
{
    public function index() {
        // get all messages
        $messages = Message::all();
        return view('php-test.index', compact('messages'));
    }

    public function store(StoreMessageRequest $request) {
        // store messages
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        Message::create($data);
        $message = "Success!";
        return redirect()->action('PhpTestController@index');
    }

    public function delete(Request $request, Message $message) {
        // validate
        $data = $request->only(['password']);
        $validator = Validator::make($data, [
            'password' => 'required'
        ]);
        
        $alert = null;
        
        
        if (Hash::check($data['password'], $message->password)) {
            $message->delete();
            $alert = [$message->id => "successfully deleted!"];
            $request->session()->flash($message->id, "successfully deleted!");
        } else {
            $alert = [$message->id => "please enter correct password!"];
            $request->session()->flash($message->id, "please enter correct password!");
        }
        // dd($alert);
        
        return redirect()->action('PhpTestController@index');
    }
}
