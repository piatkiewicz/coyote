<?php
namespace Coyote\Http\Controllers\Survey;

use Coyote\Domain\Survey\Survey;
use Coyote\Http\Controllers\Controller;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    public function store(Survey $survey): Response|null
    {
        if ($this->request->has('surveyState')) {
            $survey->setState($this->request->get('surveyState'));
            return null;
        }
        if ($this->request->has('surveyChoice')) {
            $survey->setChoice($this->request->get('surveyChoice'));
            return null;
        }
        return response(status:422);
    }
}