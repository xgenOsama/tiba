<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\contactRequest;
use App\Http\Requests\CareerRequest;
use App\Http\Requests\subscribeRequest;
use App\Slider;
use App\About;
use App\Partner;
use App\Service;
use App\News;
use App\Category;
use App\Technology;
use App\Product;
use App\Contact;
use App\Crop;
use App\Converter;
use App\Solution;
use App\Subscribe;
use App\Product_Image;
use DB;
use App;
use Mail;

class homeController extends Controller {

    public function index() {
        $sliders = Slider::all();
        $about = About::first();
        $categories = Category::all();
        $partners = Partner::all();
        $news = News::orderBy('id','desc')->paginate(2);
        $page_flag = 'outer';
        $services['solution'] = Service::where('title_en', 'solution')->first();
        $services['crops'] = Service::where('title_en', 'crops')->first();
        $services['Chemical Converter'] = Service::where('title_en', 'Chemical Converter')->first();
        $services['service'] = Service::where('title_en', 'service')->first();
        return view('index', compact('sliders', 'about', 'partners', 'services', 'news', 'page_flag','categories'));
    }

    public function all_products(){
        $page_flag = 'inner';
        $categories = Category::all();
        return view('all_products',compact('categories','page_flag'));
    }

    public function get_news($id) {
        $page_flag = 'inner';
        $news = News::find($id);
        //dd($news);
        return view('news_details', compact('page_flag', 'news'));
    }

    public function get_all_news() {
        $page_flag = 'inner';
        $news = News::orderBy('id', 'desc')->paginate(1000);
        //dd($news);
        return view('all_news_details', compact('page_flag', 'news'));
    }

    public function show_tech($id) {
        $page_flag = 'inner';
        $techs = Technology::find($id);
        $products = Product::where('tech_id', '=', $techs->id)->get();
        return view('tech_details', compact('page_flag', 'techs', 'products'));
    }

    public function get_cats() {
        $page_flag = 'inner';
        $cats = Category::paginate(1);
        return view('cats', compact('cats', 'page_flag'));
    }

    public function get_products($id) {
        $page_flag = 'inner';
        $product = Product::find($id);
        return view('product_details', compact('page_flag', 'product'));
    }

    public function show_contact() {
        $page_flag = 'inner';
        return view('contact', compact('page_flag'));
    }

    public function do_contact(contactRequest $request) {
        Contact::newContact($request);
        \Session::flash('message', trans('home.contact_message'));
        return \Redirect::back();
    }

    public function subscribe(subscribeRequest $request) {
        Subscribe::newSubscriber($request);
        \Session::flash('message', trans('home.subscribe_message'));
        return \Redirect::back();
    }

    public function get_partner($id) {
        $page_flag = 'inner';
        $partener = Partner::findOrFail($id);
        if ($partener) {
            $products = Product_Image::where('partner_id', $id)->orderBy('created_at', 'DESC')->limit(3)->get();
            return view('partener_details', compact('page_flag', 'products', 'partener'));
        }
        abort(404);
    }

    public function get_service() {
        $page_flag = 'inner';
        $services = Service::paginate(1000);
        return view('service', compact('page_flag', 'services'));
    }

    public function get_service_details($id) {
        $page_flag = 'inner';
        $service = Service::findOrFail($id);
        if ($service) {
            return view('service_details', compact('page_flag', 'service'));
        }
        abort(404);
    }

    public function get_crop() {
        $page_flag = 'inner';
        $crops = Crop::paginate(1000);
        return view('crop', compact('page_flag', 'crops'));
    }

    public function get_crop_details($id) {
        $page_flag = 'inner';
        $crop = Crop::findOrFail($id);
        if ($crop) {
            return view('crop_details', compact('page_flag', 'crop'));
        }
        abort(404);
    }

    public function get_converter() {
        $page_flag = 'inner';
        $converters = Converter::paginate(1000);
        return view('converter', compact('page_flag', 'converters'));
    }

    public function get_solution() {
        $page_flag = 'inner';
        $solutions = Solution::paginate(1000);
        return view('solution', compact('page_flag', 'solutions'));
    }

    public function get_solution_details($id) {
        $page_flag = 'inner';
        $solution = Solution::findOrFail($id);
        if ($solution) {
            return view('solution_details', compact('page_flag', 'solution'));
        }
        abort(404);
    }

    public function search(Request $request) {
        $page_flag = 'inner';
        if (App::isLocale('ar')) {
            $results['service'] = Service::where('title_ar', 'like', '%' . $request->search . '%')->get();
            $results['partner'] = Partner::where('name_ar', 'like', '%' . $request->search . '%')->get();
            $results['product'] = Product::where('title_ar', 'like', '%' . $request->search . '%')->get();
            $results['tech'] = Technology::where('title_ar', 'like', '%' . $request->search . '%')->get();
        } else {
            $results['service'] = Service::where('title_en', 'like', '%' . $request->search . '%')->get();
            $results['partner'] = Partner::where('name_en', 'like', '%' . $request->search . '%')->get();
            $results['product'] = Product::where('title_en', 'like', '%' . $request->search . '%')->get();
             $results['tech'] = Technology::where('title_en', 'like', '%' . $request->search . '%')->get();
        }
        return view('search', compact('page_flag', 'results'));
    }

    public function get_career() {
        $page_flag = 'inner';
        return view('career', compact('page_flag'));
    }

    public function post_career(CareerRequest $request) {
        $CV = $request->file;
        Mail::send('career_mail', ['request' => $request], function ($msg) use($CV) {
            $msg->to('alas0tiba@gmail.com')->subject('Tiba Career');
            $msg->attach($CV);
        });
        return redirect('/');
    }

}
