<?php

class ClubController extends AppController {
    
    var $uses = array('Club', 'Workout');
    var $paginate = array('Club' => array('limit' => 5));
    
    function index() {

        $clubs = $this->paginate('Club');
        
        $this->set(compact('clubs'));
    }
    
    function current_workout($club_id) {
        
        $current_date = date('Y-m-d');
        
        // find the workout for today
        $workout = $this->Workout->findForDate($club_id, $current_date);
        $workout_id = $workout['Workout']['id'];
        
        // redirect to that workout
        $this->redirect('/workout/view/' . $workout_id);
    }
    
    function view($club_id) {
        
        $club = $this->Club->read(null, $club_id);
        
        $conditions = array(
            'Workout.club_id' => $club_id
            );
        
        $workouts = $this->paginate('Workout', $conditions);
        
        $this->set(compact('club', 'workouts'));
    }
    
}


?>
