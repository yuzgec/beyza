<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Blog;
use App\Models\Form;
use App\Models\Page;
use App\Models\Service;
use App\Models\Video;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function index(){
        SEOMeta::setTitle('Eskişehir Psyche Psikoloji Kliniği');
        SEOMeta::setDescription("");
        SEOMeta::setCanonical(url()->full());

        return view('frontend.index');

    }

    public function contact(){

        SEOMeta::setTitle('Eskişehir Odunpazarı - Psyche Psikoloji Kliniği');
        SEOMeta::setDescription("");
        SEOMeta::setCanonical(url()->full());
        return view('frontend.contact');
    }

    public function servicedetail($url){
        $Detail = Service::where('slug', $url)->firstOrFail();

        SEOMeta::setTitle($Detail->title. ' | Eskişehir Psyche Psikoloji Kliniği');
        SEOMeta::setDescription("");
        SEOMeta::setCanonical(url()->full());

        return view('frontend.service.detail', compact('Detail'));
    }

    public function service(){

        SEOMeta::setTitle('Eskişehir Psyche Psikoloji Kliniği');
        SEOMeta::setDescription("");
        SEOMeta::setCanonical(url()->full());

        return view('frontend.service.index');
    }

    public function blogdetail($url){
        $Detail = Blog::where('slug', $url)->firstOrFail();

        SEOMeta::setTitle($Detail->title. ' | Eskişehir Psyche Psikoloji Kliniği');
        SEOMeta::setDescription("");
        SEOMeta::setCanonical(url()->full());


        return view('frontend.blog.detail', compact('Detail'));
    }


    public function corporatedetail($url){
        $Detail = Page::where('slug', $url)->firstOrFail();

        SEOMeta::setTitle($Detail->title. ' | Eskişehir Psyche Psikoloji Kliniği');
        SEOMeta::setDescription("");
        SEOMeta::setCanonical(url()->full());

        return view('frontend.page.detail', compact('Detail'));
    }


    public function blog(){

        SEOMeta::setTitle('Makaleler - Eskişehir Psyche Psikoloji Kliniği');
        SEOMeta::setDescription("");
        SEOMeta::setCanonical(url()->full());

        $Blog = Blog::all();


        return view('frontend.blog.index', compact('Blog'));
    }


    public function team(){

        SEOMeta::setTitle('Ekibimiz - Eskişehir Psyche Psikoloji Kliniği');
        SEOMeta::setDescription("");
        SEOMeta::setCanonical(url()->full());

        $Team = Page::where('category', 2)->get();


        return view('frontend.page.team', compact('Team'));
    }

    public function teamdetail($url){
        $Detail = Page::where('slug', $url)->firstOrFail();
        return view('frontend.page.person',compact('Detail'));
    }

    public function video(){

        SEOMeta::setTitle('Video Galeri | Eskişehir Psyche Psikoloji Kliniği');
        SEOMeta::setDescription('');
        SEOMeta::setCanonical(url()->full());

        $Video = Video::all();
        return view('frontend.video.index', compact('Video'));
    }

    public function form(ContactRequest $request){

        $New = new Form;
        $New->name =  $request->name;
        $New->email =  $request->email;
        $New->phone =  $request->phone;
        $New->subject =  $request->subject;
        $New->message =  $request->message;
        $New->save();

        Mail::send("mail.form",compact('New'),function ($message) use($New) {
            $message->to('psychepsikoloji@gmail.com')->subject($New->name.' - Site Bilgi Formu');
        });

        return redirect()->route('home');
    }

}
