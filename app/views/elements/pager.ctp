<ul class="pager">
<?php
$options = array('tag' => 'li');
 
echo $paginator->first('first', $options);
echo $paginator->prev('previous', $options);
echo $paginator->numbers($options);
echo $paginator->next('next', $options);
echo $paginator->last('last', $options);
?>
</ul>

