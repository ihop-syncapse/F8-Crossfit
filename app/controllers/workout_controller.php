<?php

class WorkoutController extends AppController {
    
    
    function view($id) {
        
        // read the workout
        $item = $this->Workout->read(null, $id);
        
        
        
        $this->set(compact('item'));
        
    }
    
    function attend($id) {
        
        $this->redirect('/workout/view/' . $id);
    }
    
    function complete($id) {
        if ($this->data) {
            
        }
        
        $item = $this->Workout->read(null, $id);
        
        $this->set(compact('workout'));
    }
    
}


