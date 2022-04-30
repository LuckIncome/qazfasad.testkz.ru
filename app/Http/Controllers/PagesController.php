<?php

namespace App\Http\Controllers;
use App\Models\Page;
use App\Models\Contact;
use App\Models\Icontext;
use App\Models\Certificate;
use App\Models\About;
use App\Models\Slider;
use App\Models\Objects;
use App\Models\Product;
use App\Models\File;
use App\Models\Document;
use App\Models\Subscriber;
use App\Models\Feedback;

use DateTime;
use App\Models\User;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{
    
    public function getPage($slug = 'home')
    {
        if (strpos(url()->current(), 'home') !== false) {
            abort(404);
        } else {
            $page = Page::select('type', 'id', 'title', 'excerpt', 'body', 'image', 'slug', 'seo_title', 'meta_description', 'meta_keywords', 'status')
                ->where(['slug' => $slug, 'status' => Page::STATUS_ACTIVE])
                ->firstOrFail();
        }
      

        $icontexts = Icontext::select('title', 'icon')
                    ->where('status', true)
                    ->orderBy('sort_id')
                    ->get();
        
        $text = About::select('excerpt', 'description', 'content')->first();
        switch ($page->type) {
            case 'home':

                $products = Product::select('title', 'image', 'slug')
                        ->where('status',true)
                        ->orderBy('sort_id')
                        ->get();
                $objects = Objects::select('title', 'image', 'type', 'size', 'address', 'slug')
                        ->where('status',true)
                        ->where('status',true)
                        ->orderBy('sort_id')
                        ->paginate(4);
                $first_sliders = Slider::select('title', 'image')
                        ->where('type', 'first')
                        ->where('status', true)
                        ->orderBy('sort_id')
                        ->get(); 
                $second_sliders = Slider::select('title', 'image')
                        ->where('type', 'second')
                        ->where('status', true)
                        ->orderBy('sort_id')
                        ->get();   
                return view('pages.' . $page->type, compact('page', 'icontexts', 'text', 'first_sliders', 'second_sliders', 'objects', 'products'));
                break;
            case 'about':  
                $certificates = Certificate::select('text', 'icon')
                    ->where('status', true)
                    ->orderBy('sort_id')
                    ->get();                                
                return view('pages.' . $page->type, compact('page', 'icontexts', 'certificates', 'text'));
                break;
            case 'instruction':  
                $instructions = File::get();  
                return view('pages.' . $page->type, compact('page', 'instructions'));
                break;
            case 'documents':  
                $documents = Document::get();  
                //dd($documents);
                return view('pages.' . $page->type, compact('page', 'documents'));
                break;
            case 'simple':
                return view('pages.' . $page->type, compact('page'));
                break;
            default :
                return view('pages.' . $page->type, compact('page'));
                break;
        }
    }

    public function subscribe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false], 400);
        }
        
        if (!Subscriber::where('email',$request->email)->exists()){
            $subscriber = new Subscriber();
            $subscriber->email = $request->email;
            $subscriber->save();
        }

        return response()->json(['success' => true], 200);
    }

    public function feedback(Request $request)
    {        
        $name = $request->get('name');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $page = $request->get('page');
        $url = $request->get('url');
        $ldate = new DateTime('now');

        $to = "sahov.jando@gmail.com";
        $subject = "Заявка с сайта qaz-fasad.testkz.ru";
        $sendfrom   = "no-reply@qaz-fasad.testkz.ru";
        $headers  = "From: " . strip_tags($sendfrom) . "\r\n";
        $headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html;charset=utf-8 \r\n";

        $message = "
        $subject<br>
        <b>Имя:</b> $name <br>
        <b>E-mail:</b> $email <br>
        <b>Телефон:</b> $phone <br>
        <b>URL:</b> $url";

        $send = mail($to, $subject, $message, $headers);
        
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false], 400);
        }
        
        if ($send)
        { 
            $feedback = new Feedback();
            $feedback->name = $request->name;
            $feedback->phone = $request->phone;
            $feedback->email = $request->email;
            $feedback->save();
        }

        return response()->json(['success' => true], 200);
    }
}



