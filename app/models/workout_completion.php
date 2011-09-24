<?php

class WorkoutCompletion extends AppModel {
    var $useTable = 'workout_completion';
    
    function findCount($workout_id) {
        $conditions = compact('workout_id');
        return $this->find('count', compact('conditions'));
    }
    
    function findMinMax($workout_id) {
        
        $conditions = array('WorkoutCompletion.workout_id' => $workout_id);
        $order = 'WorkoutCompletion.score ASC';
        $min = $this->find('first', compact('conditions', 'order'));
        $order = 'WorkoutCompletion.score DESC';
        $max = $this->find('first', compact('conditions', 'order'));
        
        return compact('min', 'max');
    }
}