<?php
class ProcessTrafficController extends Controller {
    private static $allowed_actions = array(
        'index'
    );

    public function index($request) {
        $processing = $this->startProcessing();

        if(!$processing) {
            return "No Traffic Profiles to process. Exiting.";
        }
    }

    public function startProcessing() {
        // Get all the traffic profiles
        $profiles = TrafficProfile::get();

        if($profiles->Count() == 0) {
            return null;
        }

        foreach($profiles as $profile) {
            Debug::show($profile);
        }

        return true;
    }
}