<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailCreateRequest;
use App\Models\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MailController extends Controller
{
    public function send()
    {
        $user = auth()->user()->email;
        $mails = DB::table('mails')
            ->where('from', $user)
            ->get();

        return view('mail.index', compact('mails'));
    }

    public function received()
    {
        $user = auth()->user()->email;
        $mails = DB::table('mails')
            ->where('to', $user)
            ->get();
        return view('mail.index', compact('mails'));
    }

    public function read($id)
    {
        $mail = Mail::find($id);

        return view('mail.read', compact('mail', 'id'));
    }

    public function create(MailCreateRequest $request)
    {
        $mail = Mail::create([
            'from' => auth()->user()->email,
            'to' => $request->to,
            'title' => $request->title,
            'body' => $request->body
        ]);
        return redirect()->route('mail')
            ->with('message', 'Mail Created');
    }
}
