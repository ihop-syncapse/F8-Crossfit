<h2>Benchmarks</h2>

<ul class="link-list">
<?php foreach($categories as $category): 
 $category_link = Router::url(sprintf('/benchmark/category/%d/', $category['BenchmarkCategory']['id']));     
 $category_name = $category['BenchmarkCategory']['name'];
?>
 <a href="<?php echo $category_link; ?>"><li><?php echo $category_name; ?></li></a>
<?php endforeach; ?>