<?php

class Workout extends AppModel {
    var $belongsTo = array('Club', 'ScoreType');
    
    function findForDate($club_id, $date) {
        
        $conditions = array(
            'Workout.club_id' => $club_id,
            'Workout.date' => $date
            );
        
        return $this->find('first', compact('conditions'));
    }
}