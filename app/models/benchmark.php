<?php

class Benchmark extends AppModel {
    var $belongsTo = array('BenchmarkCategory');
    var $order = array('Benchmark.name ASC');
}