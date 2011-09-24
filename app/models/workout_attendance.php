<?php

class WorkoutAttendance extends AppModel {
    var $useTable = 'workout_attendance';
    
    function findCount($workout_id) {
        $conditions = compact('workout_id');
        return $this->find('count', compact('conditions'));
    }
}