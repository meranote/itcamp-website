<?php

namespace App\Http\Controllers\Frontend;

use App\ApplicantDetailKey;
use App\Exceptions\BaseException;
use App\Question;
use App\Services\ApplicantService;
use App\Services\ValidatorService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{

    private $validator;
    private $applicant;

    function __construct(ValidatorService $validatorService, ApplicantService $applicantService) {
        $this->validator = $validatorService;
        $this->applicant = $applicantService;
    }

    protected function doRegister(Request $request, $camp, $route) {
        try {
            $this->applicant->register($request, $camp);
        } catch(BaseException $e) {
            return redirect()->back()->withInput($request->all())->with('status', $e->status_message);
        }

        return redirect()->route($route)->with('reg_finish', true);
    }

    public function register(Request $request, $camp) {
        return $this->doRegister($request, $camp, 'view.frontend.register.complete');
    }

    public function secretRegister(Request $request, $camp) {
        return $this->doRegister($request, $camp, 'view.frontend.s.register.complete');
    }

    public function showRegister($camp) {
        if(!in_array($camp, ['app', 'game', 'network', 'iot', 'datasci'])) {
            return abort(404);
        }

        $data = [
            "camp" => 'camp_'.$camp,
            "applicantQuestions" => ApplicantDetailKey::orderBy('priority', 'desc')->get(),
            "campQuestions" => Question::getCampQuestion('camp_'.$camp)
        ];

        switch($camp) {
            case 'app': $data['colors'] = ['#2167E8', '#2472ff']; break;
            case 'game': $data['colors'] = ['#E8A820', '#f9b422']; break;
            case 'network': $data['colors'] = ['#c43430', '#e33c38']; break;
            case 'iot': $data['colors'] = ['#5FA343', '#6ab74c']; break;
            case 'datasci': $data['colors'] = ['#3F2062', '#633399']; break;
        }

        return view('frontend.register')->with($data);
    }

    public function secretShowRegister($camp) {
        if(!in_array($camp, ['app', 'game', 'network', 'iot', 'datasci'])) {
            return abort(404);
        }

        $data = [
            "camp" => 'camp_'.$camp,
            "applicantQuestions" => ApplicantDetailKey::orderBy('priority', 'desc')->get(),
            "campQuestions" => Question::getCampQuestion('camp_'.$camp)
        ];

        switch($camp) {
            case 'app': $data['colors'] = ['#2167E8', '#2472ff']; break;
            case 'game': $data['colors'] = ['#E8A820', '#f9b422']; break;
            case 'network': $data['colors'] = ['#c43430', '#e33c38']; break;
            case 'iot': $data['colors'] = ['#5FA343', '#6ab74c']; break;
            case 'datasci': $data['colors'] = ['#3F2062', '#633399']; break;
        }

        $data['secret'] = true;

        return view('frontend.register')->with($data);
    }

    public function showComplete() {
        if(session('reg_finish')) {
            return view('frontend.reg_complete');
        } else {
            return redirect()->route('view.frontend.index');
        }
    }

    public function secretShowComplete() {
        if(session('reg_finish')) {
            return view('frontend.reg_complete');
        } else {
            return redirect()->route('view.frontend.index');
        }
    }

    public function showClose() {
        return view('frontend.reg_close');
    }

}
