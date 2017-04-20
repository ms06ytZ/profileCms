<?php

namespace App\Http\Controllers;

use App\Index;
use Storage;
use Illuminate\Support\Facades\Request;
use Mail;
use Config;

class IndexController extends Controller {

    public function index() {

        $index = new Index();
        $exists = Storage::disk('local')->exists('myProfile.txt');
        if ($exists) {
            $contents = Storage::get("myProfile.txt");
            $index->myProfile = $contents;
        }
        $exists = Storage::disk('local')->exists('home.txt');
        if ($exists) {
            $contents = Storage::get("home.txt");
            $index->home = $contents;
        }

        $exists = Storage::disk('local')->exists('service.txt');
        if ($exists) {
            $contents = Storage::get("service.txt");
            $index->service = $contents;
        }

        $exists = Storage::disk('local')->exists('portfolio.txt');
        if ($exists) {
            $contents = Storage::get("portfolio.txt");
            $index->portfolio = $contents;
        }
        $exists = Storage::disk('local')->exists('about.txt');
        if ($exists) {
            $contents = Storage::get("about.txt");
            $index->about = $contents;
        }
        $exists = Storage::disk('local')->exists('whyme.txt');
        if ($exists) {
            $contents = Storage::get("whyme.txt");
            $index->whyme = $contents;
        }
        $exists = Storage::disk('local')->exists('contact.txt');
        if ($exists) {
            $contents = Storage::get("contact.txt");
            $index->contact = $contents;
        }
        $exists = Storage::disk('local')->exists('footer.txt');
        if ($exists) {
            $contents = Storage::get("footer.txt");
            $index->footer = $contents;
        }


        return view('index')->with('index', $index);
    }

    public function create() {
        return view('index.create');
    }

    public function detail() {
        $id = $request->input('id');
        $index = index::find($id);
        return view('index.detail')->with('index', $index);
    }

    public function update() {
        return view('index.update');
    }

    public function delete() {
        return view('index.delete');
    }

    public function contact() {
        $Password = Request::input('password');
        $Name = Request::input('Name');
        $Email = Request::input('Email');
        $Message = Request::input('Message');
        
        $MyEmail = Config::get('mail.from.address');
        //dd($MyEmail);
        //めーるほんぶん(contact/mail.blade.php)にて参照される内容
        $data = [$Email, $Name, $Message];
        $data['title'] = 'ポートフォリオからのメールです(title):' . $Name;
        $data['body'] = $Message . '<br> 再設定用 password:' . $Password;//めーるほんぶんにて
        $data['email'] = $Email;

        Mail::send('contact.mail', $data, function($message) use($Email, $Name, $MyEmail) {
            //メールの属性にて参照される
            $message->to($MyEmail)->subject('ポートフォリオからのメールです(subject):' . $Name);
        });

        return view('contact.index');
    }

}
