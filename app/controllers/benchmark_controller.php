<?php

class BenchmarkController extends AppController {
    
    var $uses = array('BenchmarkCategory', 'Benchmark');
    
    function index() {
        $categories = $this->paginate('BenchmarkCategory');
        
        $this->set(compact('categories'));
    }
    
    function category($category_id) {
        
        $category = $this->BenchmarkCategory->read(null, $category_id);
        
        $conditions = array('Benchmark.benchmark_category_id' => $category_id);
        $benchmarks = $this->paginate('Benchmark', $conditions);
        
        $this->set(compact('category', 'benchmarks'));
    }
    
    function view($id) {
        $benchmark = $this->Benchmark->read(null, $id);
        $this->set(compact('benchmark'));
    }
    
}