<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Repositories\{SliderRepository , PartnerRepository , ClientRepository , AboutRepository, RegionRepository};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public $sliderRepository , $clientRepository , $aboutRepository , $partnerRespository , $regionRepository;

    public function __construct(
        SliderRepository $sliderRepository ,
        ClientRepository $clientRepository ,
        AboutRepository $aboutRepository , 
        PartnerRepository $partnerRepository ,
        RegionRepository $regionRepository
    ){
        $this->sliderRepository = $sliderRepository;
        $this->clientRepository = $clientRepository;
        $this->aboutRepository = $aboutRepository;
        $this->partnerRespository = $partnerRepository;
        $this->regionRepository = $regionRepository;
    }

    public function index()
    {
        $slides = $this->sliderRepository->list();
        $about = $this->aboutRepository->show();
        $clients = $this->clientRepository->list(6);
        $partners = $this->partnerRespository->list(8);

        return view('site.pages.index' ,compact('slides' , 'about' , 'clients' , 'partners'));
    }

    public function about()
    {
        $about = $this->aboutRepository->show();

        return view('site.pages.about' ,compact('about'));
    }

    public function partners()
    {
        $partners = $this->partnerRespository->list();
        $clients = $this->clientRepository->list();

        return view('site.pages.partners' ,compact('partners' , 'clients'));
    }

    public function contact()
    {
        $regions = $this->regionRepository->list();

        return view('site.pages.contact' ,compact('regions'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all() , [
            'first_name' => ['required' , 'string' , 'max:255'],
            'last_name' => ['required' , 'string' , 'max:255'],
            'email' => ['required' , 'email' , 'string' , 'max:225'],
            'department' => ['required' , 'not_in:0'],
            'message' => ['required']
        ] , [] ,[
            'first_name' => locale() == 'en' ? 'First name' : 'الإسم الاول',
            'last_name' => locale() == 'en' ? 'Last name' : 'الإسم الأخير',
            'email' => locale() == 'en' ? 'Email address' : 'البريد الإلكتروني',
            'department' => locale() == 'en' ? 'Department' : 'القسم',
            'message' => locale() == 'en' ? 'Message' : ' الرسالة',
        ]);

        if ($validator->fails()) {
            return response()->json( $validator->errors()->first(), 400);
        }

        try {
            $message = Message::create($request->all());

            // $email = Setting::firstOrFail()->email; 
            // Mail::to($email)->send(new MessageMail($message));

            return response()->json(
                locale() == 'en' ? 'Your message has been sent , we will contact you later' : 'تم إرسال رسالتك وسيتم التواصل معك لاحقا'
                , 200);
        } catch (\Throwable $th) {
            return error_response();
        }

    }

    public function story()
    {
        return view('site.pages.story');
    }

    public function it()
    {
        return view('site.pages.it');
    }

    public function jamf()
    {
        return view('site.pages.jamf');
    }
}
