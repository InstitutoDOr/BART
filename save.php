<?php

function dtMili($data) {
    return date('H:i:s', $data / 1000) . '.' . ($data % 1000);
}

$data = json_decode($_POST['bart']);
$subjid = $_POST['subjid'];
//$data = json_decode(file_get_contents('reports/test.csv'));

$filename = sprintf('reports/bart_report_%s_%s.csv', date('Ymd.His'), $subjid);

$report = '';

$report  = "SUBJID:\t{$subjid}\n";
$report .= "Início:\t" . date('Y-m-d H:i:s', $data->start_time / 1000) . "\n";
$report .= "Término:\t" . date('Y-m-d H:i:s', $data->end_time / 1000) . "\n\n";
$report .= "Balões\n";
$report .= "Cor\tMax Pump\tGanho\tTotal Assopros\tInício\tTérmino\tTempos assopros (s)\n";
foreach ($data->balloons as $balao) {
    $report .= $balao->color . "\t";
    $report .= $balao->popprob . "\t";
    $report .= $balao->earned . "\t";
    $report .= $balao->pumps . "\t";
    $report .= dtMili($balao->start_time) . "\t";
    $report .= dtMili($balao->end_time) . "\t";
    $last = 0;
    foreach ($balao->time as $pumpTime) {
        if ($last > 0) {
            $diffTime = ($pumpTime - $last) / 1000;
            $diffTime = str_replace('.', ',', sprintf('%.3f', $diffTime));
            $report .= "$diffTime\t";
        } else {
            $last = $balao->start_time;
        }
    }
    $report .= "\n";
}

file_put_contents($filename, $report);
