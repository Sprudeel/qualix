<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ParticipantDetailController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @param Course $course
     * @param Participant $participant
     * @return Response
     */
    public function index(Request $request, Course $course, Participant $participant) {
        $observations = $participant->observations->values();

        return view('participant-detail', [
            'participant' => $participant,
            'observations' => $observations,
            'feedbacks_using_observations' => $course->feedbacksUsingObservations($observations)
        ]);
    }
}
