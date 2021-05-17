<?php
$params = array();
foreach ($filters as $filter) {
    if (isset($_GET[$filter->filter_name]) && $_GET[$filter->filter_name] == 1) {
        $params[$filter->filter_name] = 1;
    }
}
if (isset($params[$f->filter_name]) && $params[$f->filter_name] == 1) {
    unset($params[$f->filter_name]);
} else {
    $params[$f->filter_name] = 1;
}
?>

<div class="filter">
    <img src="/img/filter/{{$f->img_name}}">
    <span>{{$f->name}}</span>
    <a href="{{route('menu', $params)}}"></a>
</div>
