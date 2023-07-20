<?php
$data = [
    ['Иванов', 'Математика', 5],
    ['Иванов', 'Математика', 4],
    ['Иванов', 'Математика', 5],
    ['Петров', 'Математика', 5],
    ['Сидоров', 'Физика', 4],
    ['Иванов', 'Физика', 4],
    ['Петров', 'ОБЖ', 4],
];
// Создаем массив в котором будет сумма балов для каждого школьника по предметам
$summ = array();
foreach ($data as $key ){
    $name = $key[0];
    $subject = $key[1];
    $score = $key[2];
  
if(!isset($summ[$name][$subject])){
    $summ[$name][$subject] = 0;
} 
$summ[$name][$subject]+=$score;
}
// Сортируем школьников и предметы сортировка массива по ключу в порядке возрастания
ksort($summ);

foreach($summ as $name=>&$subjects){
    ksort($subjects);
}
echo '<table>';
echo '<tr><th>Школьник</th><th>Предмет</th><th>Баллы</th></tr>';
foreach ($summ as $name => $subjects) {
    foreach ($subjects as $subject => $score) {
        echo '<tr>';
        echo '<td>' . $name . '</td>';
        echo '<td>' . $subject . '</td>';
        echo '<td>' . $score . '</td>';
        echo '</tr>';
    }
}
echo '<table>';

?>