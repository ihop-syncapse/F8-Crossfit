<h2><?php echo $category['BenchmarkCategory']['name']; ?></h2>

<ul class="link-list">
<?php foreach($benchmarks as $benchmark): 
 $benchmark_link = sprintf('/benchmark/view/%d/', $benchmark['Benchmark']['id']);     
 $benchmark_name = $benchmark['Benchmark']['name'];
?>
 <a href="<?php echo $benchmark_link; ?>"><li><?php echo $benchmark_name; ?></li></a>
<?php endforeach; ?>