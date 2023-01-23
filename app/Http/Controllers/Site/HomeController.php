<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\SolutionMessage;
use App\Repositories\{SliderRepository , PartnerRepository , ClientRepository , AboutRepository, AppleContentRepository, AppleRepository, AspectLogoRepository, AspectRepository, BackupRepository, CenterRepository, ContentRepository, IContentRepository, IpadRepository, JamfContentRepository, JamfSolutionRepository, JamfStepRepository, MacRepository, MContentRepository, ProcessRepository, RegionRepository, SolutionRepository, StepRepository, StoryRepository, WhyRepository};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public 
        $sliderRepository,$clientRepository,$aboutRepository,$partnerRespository,
        $regionRepository,$centerRepository,$aspectRepository,$aspectLogoRepository,
        $stepRepository,$backupRepository,$jamfStepRepository,$jamfContentRepository,
        $jamfSolutionRepository,$ipadRepository,$iContentRepository,$whyRepository,
        $processRepository,$macRepository,$mContentRepository,
        $appleContentRepository,$appleRepository,$solutionRepository,
        $contentRepository , $storyRepository;
    public function __construct(
        SliderRepository $sliderRepository ,
        ClientRepository $clientRepository ,
        AboutRepository $aboutRepository , 
        PartnerRepository $partnerRepository ,
        RegionRepository $regionRepository ,
        CenterRepository $centerRepository ,
        AspectRepository $aspectRepository,
        AspectLogoRepository $aspectLogoRepository,
        StepRepository $stepRepository,
        BackupRepository $backupRepository,
        JamfStepRepository $jamfStepRepository,
        JamfContentRepository $jamfContentRepository,
        JamfSolutionRepository $jamfSolutionRepository,
        IpadRepository $ipadRepository,
        IContentRepository $iContentRepository,
        WhyRepository $whyRepository,
        ProcessRepository $processRepository,
        MacRepository $macRepository,
        MContentRepository $mContentRepository,
        AppleRepository $appleRepository,
        AppleContentRepository $appleContentRepository,
        SolutionRepository $solutionRepository,
        ContentRepository $contentRepository,
        StoryRepository $storyRepository
    ){
        $this->sliderRepository = $sliderRepository;
        $this->clientRepository = $clientRepository;
        $this->aboutRepository = $aboutRepository;
        $this->partnerRespository = $partnerRepository;
        $this->regionRepository = $regionRepository;
        $this->centerRepository = $centerRepository;
        $this->aspectLogoRepository = $aspectLogoRepository;
        $this->aspectRepository = $aspectRepository;
        $this->stepRepository = $stepRepository;
        $this->backupRepository = $backupRepository;
        $this->jamfContentRepository = $jamfContentRepository;
        $this->jamfSolutionRepository = $jamfSolutionRepository;
        $this->jamfStepRepository = $jamfStepRepository;
        $this->ipadRepository = $ipadRepository;
        $this->iContentRepository = $iContentRepository;
        $this->processRepository = $processRepository;
        $this->whyRepository = $whyRepository;
        $this->macRepository = $macRepository;
        $this->mContentRepository = $mContentRepository;
        $this->appleRepository = $appleRepository;
        $this->appleContentRepository = $appleContentRepository;
        $this->solutionRepository = $solutionRepository;
        $this->contentRepository = $contentRepository;
        $this->storyRepository = $storyRepository;
    }

    public function index()
    {
        $slides = $this->sliderRepository->list();
        $about = $this->contentRepository->show();
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
        $stories = $this->storyRepository->list();
        return view('site.pages.story' ,compact('stories'));
    }

    public function it()
    {
        $centers = $this->centerRepository->list();
        $aspect = $this->aspectRepository->show();
        $images = $this->aspectLogoRepository->list();
        $steps = $this->stepRepository->list();
        $backups = $this->backupRepository->list();

        return view('site.pages.it' ,compact('centers' , 'aspect' , 'images' , 'steps' , 'backups'));
    }

    public function jamf()
    {
        $steps = $this->jamfStepRepository->list();
        $solutions = $this->jamfSolutionRepository->list();
        $content = $this->jamfContentRepository->show();

        return view('site.pages.jamf' , compact('steps' , 'solutions' , 'content'));
    }

    public function ipad()
    {
        $content = $this->ipadRepository->show();
        $ipads = $this->iContentRepository->list();
        $whies = $this->whyRepository->list();
        $processes = $this->processRepository->list();
        $clients = $this->clientRepository->list(6);

        return view('site.pages.ipad' , compact('content' , 'ipads' , 'whies' , 'processes' , 'clients'));
    }

    public function mac()
    {
        $content = $this->macRepository->show();
        $macs = $this->mContentRepository->list();
        $whies = $this->whyRepository->list();
        $processes = $this->processRepository->list();
        $clients = $this->clientRepository->list(6);

        return view('site.pages.mac' , compact('content' , 'macs' , 'whies' , 'processes' , 'clients'));
    }

    public function apple()
    {
        $content = $this->appleContentRepository->show();
        $apples = $this->appleRepository->list();
        $clients = $this->clientRepository->list(6);

        return view('site.pages.apple' ,compact('content' , 'apples' , 'clients'));
    }

    public function solutions()
    {
        $solutions = $this->solutionRepository->list();

        return view('site.pages.solutions' ,compact('solutions'));
    }

    public function solution($slug)
    {
        $solution = $this->solutionRepository->showBySlug($slug);

        return view('site.pages.solution' ,compact('solution'));
    }

    public function store2(Request $request)
    {
        $validator = Validator::make($request->all() , [
            'name' => ['required' , 'string' , 'max:255'],
            'school' => ['required' , 'string' , 'max:255'],
            'email' => ['required' , 'email' , 'string' , 'max:225'],
            'phone' => ['required' , 'not_in:0'],
            'message' => ['required']
        ] , [] ,[
            'name' => locale() == 'en' ? 'Name' : 'الإسم ',
            'school' => locale() == 'en' ? 'School name' : 'إسم المدرسة',
            'email' => locale() == 'en' ? 'Email address' : 'البريد الإلكتروني',
            'phone' => locale() == 'en' ? 'Mobile number' : 'رقم الهاتف',
            'message' => locale() == 'en' ? 'Message' : ' الرسالة',
        ]);

        if ($validator->fails()) {
            return response()->json( $validator->errors()->first(), 400);
        }

        try {
            $message = SolutionMessage::create($request->all());

            // $email = Setting::firstOrFail()->email; 
            // Mail::to($email)->send(new MessageMail($message));

            return response()->json(
                locale() == 'en' ? 'Your message has been sent , we will contact you later' : 'تم إرسال رسالتك وسيتم التواصل معك لاحقا'
                , 200);
        } catch (\Throwable $th) {
            return error_response();
        }

    }
}

