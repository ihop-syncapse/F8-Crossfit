<?php

class WorkoutController extends AppController {
    var $uses = array('Club', 'Workout', 'WorkoutAttendance', 'WorkoutCompletion');
    var $paginate = array('WorkoutCompletion' => array('limit' => 10, 'order' => 'score DESC'));
    
    function view($id) {
        
        // read the workout
        $workout = $this->Workout->read(null, $id);
        $this->_setupOpenGraph($workout);
        
        $club = $this->Club->read(null, $workout['Workout']['club_id']);
        
        $attending = $this->WorkoutAttendance->findCount($id);
        $completed = $this->WorkoutCompletion->findCount($id);
        $maxmin = $this->WorkoutCompletion->findMinMax($id);
        
        $conditions = array('WorkoutCompletion.workout_id' => $id);
        $completions = $this->paginate('WorkoutCompletion', $conditions);
        
        $this->set(compact('club', 'workout', 'minmax', 'attending', 'completed', 'completions'));
        
    }
    
    function _setupOpenGraph($workout) {
        
        
    }
    
    function attend($workout_id, $user_fbid, $story_fbid) {
        
        $data = array('WorkoutAttendance' => compact('workout_id', 'user_fbid', 'story_fbid'));
        
        if ($this->WorkoutAttendance->save($data)) {
            $this->redirect('/workout/view/' . $id . '?attending=1');
        }
        print 'ERROR: could NOT save attendance';
    }
    
    function complete($workout_id, $user_fbid, $story_fbid, $score, $comments) {
        
        $data = array('WorkoutAttendance' => compact('workout_id', 'user_fbid', 'story_fbid', 'score', 'comments'));
        
        if ($this->WorkoutCompletion->save($data)) {
            $this->redirect('/workout/view/' . $id . '?completed=1');
        }
        print 'ERROR: could NOT save completion';
    }
    
    
}


