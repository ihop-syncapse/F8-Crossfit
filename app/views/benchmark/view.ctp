<?php
$benchmark_name = $benchmark['Benchmark']['name'];
$benchmark_details = str_replace("\n", "<br/>\n", $benchmark['Benchmark']['description']);
?>
<h2><?php echo $benchmark_name ?></h2>

<p><?php echo $benchmark_details ?></p>