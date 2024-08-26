<?php
namespace Coyote\Http\Controllers\Adm;

use Coyote\Domain\Survey\AdministratorSurvey;
use Coyote\Models\Survey;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ExperimentsController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->breadcrumb->push('Eksperymenty', route('adm.experiments'));
    }

    public function index(AdministratorSurvey $survey): View
    {
        return $this->view('adm.experiments.home', [
            'experimentNewUrl' => route('adm.experiments.edit'),
            'experiments'      => $survey->experiments(),
        ]);
    }

    public function edit(): View
    {
        $this->breadcrumb->push('Nowy', '');
        return $this->view('adm.experiments.edit', [
            'experimentsBackUrl'  => route('adm.experiments'),
            'experimentCreateUrl' => route('adm.experiments.create'),
            'experimentCsrfField' => '_token',
            'experimentCsrfToken' => $this->request->session()->token(),
        ]);
    }

    public function create(AdministratorSurvey $survey): RedirectResponse
    {
        $this->request->validate(['title' => 'required']);
        $surveyId = $survey->newSurvey($this->request->get('title'));
        return redirect(route('adm.experiments.show', [$surveyId]));
    }

    public function show(Survey $survey): View
    {
        $this->breadcrumb->push($survey->title, '');
        return $this->view('adm.experiments.show', [
            'experimentsBackUrl'         => route('adm.experiments'),
            'experimentUpdateMembersUrl' => route('adm.experiments.updateMembers', ['survey' => $survey]),
            'experimentCsrfField'        => '_token',
            'experimentCsrfToken'        => $this->request->session()->token(),
            'experiment'                 => [
                'title'        => $survey->title,
                'creationDate' => "$survey->created_at",
                'userCount'    => $survey->users()->count(),
                'members'      => $survey->users()->pluck('id')->toArray(),
            ],
        ]);
    }

    public function updateMembers(Survey $survey, AdministratorSurvey $admSurvey): RedirectResponse
    {
        $admSurvey->updateMembers($survey, \array_filter($this->request->get('members', [])));
        return redirect(route('adm.experiments.show', [$survey->id]));
    }
}
