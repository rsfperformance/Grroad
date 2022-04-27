<?php
$arr = [];
foreach (\App\Models\Word::orderBy('id')->get() as $data) {
    $arr[$data->key] = $data->en;
}

return $arr;
