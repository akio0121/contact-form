<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{

    //フォーム入力ページを表示する
    public function index()
    {
        return view('index');
    }

    //フォーム入力ページで、送信ボタンを押して、入力内容確認ページへ遷移
    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        return view('confirm', compact('contact'));
    }

    //入力内容確認ページで、送信ボタンを押して、お問い合わせ完了ページへ遷移
    public function store(ContactRequest $request)
    {
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        Contact::create($contact);
        return view('thanks');
    }
}
