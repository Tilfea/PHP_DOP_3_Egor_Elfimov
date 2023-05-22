<?php
echo '<p style="font-weight: 700; font-size: 120%">Первый доп</p>';
echo '1 &#9989. Есть имя Stive.<br><br> 

Если возраст Stive:<br>
    от 0 до 12 - вывести Steve is a child<br>
    с 12 до 18 - вывести Steve is a teenager<br>
иначе - вывести Steve is an adult<br><br> 

Решить задачу 3 – способами:<br>
    1. if-else<br>
    2. switch.<br>
    3. Условный (тернарный) оператор<br><br>';


echo "<div class='form'> <form method='POST'> <input name='year' type='number' placeholder='Сколько Стиву лет?'> </form>";
$year = (int)$_POST['year'];

echo '1 task - if-else:<br>';
function Stive($year){
if ($year >= 0 && $year < 12){
    echo 'Steve is a child<br><br>';
} elseif ($year >= 12 && $year < 18){
    echo 'Steve is a teenager<br><br>';
}else {echo 'Steve is an adult<br><br>';}
}
Stive($year);

echo '2 task - switch:<br>';
function Stive2($year){
switch ($year){
    case ($year >= 0 && $year < 12):
        echo 'Steve is a child<br><br>';
        break;
    case ($year >= 12 && $year < 18):
        echo 'Steve is a teenager<br><br>';
        break;
    case ($year >= 18):
        echo 'Steve is an adult<br><br>';
        break;
}
}
    Stive2($year);

    echo '3 task - Условный (тернарный) оператор:<br>';
function Stive3($year){
    echo ($year >= 0 && $year < 12) ? 'Steve is a child<br><br>' : (($year >= 12 && $year < 18) ? 'Steve is a teenager<br><br>' :  'Steve is an adult<br><br>');
}
    Stive3($year);


echo '<hr />';
echo '2 &#9989. Написать с помощью цикла while и for «переворот» числа. Другими словами, нужно создать новое число, у которого цифры шли бы в обратном порядке (например: 472 -> 274).<br><br>';

echo "<div class='form'> <form method='POST'> <input name='num' type='number' placeholder='Введите число'> </form>";
$num = (int)$_POST['num'];

echo '1 task - while:<br>';
function reverse($num){
    $total = (strval($num))[0];
    while (++$i <= strlen($num)){
$total = (strval($num))[$i] .+ $total;
    }
    echo "$total<br><br>";
}
reverse($num);

echo '1 task - for:<br>';
function reverse2($num){
    $total = (strval($num))[0];
    for ($i = 1; $i <= strlen($num); ++$i){
$total = (strval($num))[$i] .+ $total;
    }
    echo $total;
}
reverse2($num);

echo '<hr />';

echo '3 &#9989. Посчитайте кол-во отрицательных, положительных элементов, элементов со строчным типом данных в произвольном массиве, а также кол-во элементов других типов.<br><br>';

function type($arr){
$total= array(
    "array" => "0",
    "num" => "0",
    "bool" => "0",
    "str" => "0",
    "float" => "0",
    "nan" => "0"
);
foreach($arr as $v){
    switch($v){
        case (is_array($v)):
            $total['array']++;
            break;
        case (is_int($v)):
            $total['num']++;
            break;
        case (is_bool($v)):
            $total['bool']++;
            break;
        case (is_string($v)):
            $total['str']++;
            break;
        case (is_float($v)):
            $total['float']++;
            break;
        case (is_nan($v) || is_null($v)):
            $total['nan']++;
            break;
    }
}

foreach($total as $k => $t){
    if($t !=0){
        echo ($k . " = " . $t . "<br>");
    }
}
}

type([1,2,3,[1,2,3], 'text', 'text2', true, false, 1.2, 123.567]);


echo '<hr />';

echo '4 &#9989. Напишите функцию, которая проверяет, является ли переданная строка палиндромом.<br><br>';

echo "<div class='form'> <form method='POST'> <input name='str2', type='line' placeholder='Введите строку'> </form>";
$str2 = (string)$_POST['str2'];

function polind($a){
    echo ($a == strrev($a)) ? "$a IS polindrom" : "$a NOT is polindrom";
}

polind($str2);

echo '<hr />';

echo '5 &#9989. Дан массив с произвольными значениями. Проверить, есть ли в нем одинаковые элементы. Вывести в консоль: “Есть повторки!”, “Нет повторок”.<br><br>';

function doubl($a){
    $Flag = False;
foreach($a as $k => $v){
    $b = array_slice($a, $k+1);
    foreach($b as $s){
        if ($s == $v){
            $Flag = True;
        }
    }
}
echo ($Flag == True) ? "Есть повторки!" : "Нет повторок";
}

doubl([1,2,3,4,5,1]);

echo '<hr />';

echo '6 &#9989. Необходимо написать программу, которая проверяет пользователя на знание таблицы умножения. Пользователь сам вводит два целых однозначных числа. Затем вводит результат умножения и 
в результате должен увидеть на экране правильно он ответил или нет.<br><br>';

echo "<form style=\"width: 50%;	height: 17%; outline: 2px solid #000; border: 3px solid #fff; border-radius: 10px; \" method=\"POST\">
<p>Первое число: <input type=\"number\", name=\"first\" placeholder='1'/></p>
<p>Второе число: <input type=\"number\", name=\"lost\" placeholder='2'/></p>
<p>Результат: <input type=\"number\", name=\"total\" placeholder='3'/></p>
<p><input type=\"submit\"/></p>
</form>";
$a = (int)$_POST['first'];
$b = (int)$_POST['lost'];
$c = (int)$_POST['total'];

function pro($a, $b, $c){
    if($a * $b == $c){
        echo 'Верно';
    } else {echo 'Не верно';}
}
pro($a, $b, $c);

echo '<hr />';

echo '7 &#9989. Заданы два массива. Один содержит наименование услуг, а другой – расценки за эти услуги. Выведите список услуг стоимостью больше 0 на экран.<br><br>';

function coast(){
$a = ['Сборка компьютера', 'Чистка компьютера', 'Установка ПО', 'Установка драйверов', 'Ремонт "железа"', 'Диагностика состояния компьютора'];
$b = [100, 25, 20, 20, 100, 0];

for ($i = 0; $i < count($b); $i++){
    if($b[$i] > 0){
        echo ($a[$i] . " - " . $b[$i] . "p.<br>");
    }
}
}
coast();

echo '<hr />';

echo '8 &#9989. У треугольника сумма любых двух сторон должна быть больше третьей. Иначе две стороны просто «лягут» на третью и треугольника не получится. Пользователь вводит поочерёдно длины трех сторон. 
Используя конструкцию if..else (один раз), напишите код, который должен определять, может ли существовать треугольник при таких длинах. Т. е. нужно сравнить суммы двух любых строн с оставшейся третьей стороной. 
Чтобы треугольник существовал, сумма всегда должна быть больше отдельной стороны.<br><br>';

echo "<form style=\"width: 50%;	height: 17%; outline: 2px solid #000; border: 3px solid #fff; border-radius: 10px; \" method=\"POST\">
<p>Первая сторона треугольника: <input type=\"number\", name=\"one\" placeholder='1'/></p>
<p>Вторая сторона треугольника: <input type=\"number\", name=\"two\" placeholder='2'/></p>
<p>Третья сторона треугольника: <input type=\"number\", name=\"three\" placeholder='3'/></p>
<p><input type=\"submit\"/></p>
</form>";
$a = (int)$_POST['one'];
$b = (int)$_POST['two'];
$c = (int)$_POST['three'];
function pyr($a = 1, $b =1, $c =1){ 
    if (($a +$b > $c ) || ($a + $c > $b) || ($b + $c > $a)){
        echo 'Существует';
    } else {echo 'Не существует';}
}
pyr($a, $b, $c);

echo '<hr />';

echo '9 &#9989. Необходимо вывести на экран числа от 50 до 1 с шагом 2, 5 и 10. <br><br>';

function number_2($a){
for ($i = 50; $i > 0;$i=($i-$a)){
    echo "$i, ";
}
}
number_2(10);

echo '<hr />';

echo '10 &#9989. Вывести на экран «прямоугольник», образованный из двух видов символов. Контур прямоугольника должен состоять из одного символа, а в «заливка» — из другого.<br><br>

##############################<br>
#0000000000000000000000000000#<br>
#0000000000000000000000000000#<br>
#0000000000000000000000000000#<br>
#0000000000000000000000000000#<br>
##############################<br><br>
';

function parall($a = '#', $b = 0){

for ($i=0; $i < 6; $i++){
    echo $a;
    if ($i == 0 || $i == 5){
        for ($j = 0; $j < 28; $j++){
            echo $a;
        };
    } else{
    for ($j = 0; $j < 28; $j++){
        echo $b;
    };
}
    echo $a . '<br>';
};
}

parall();
echo '<hr />';

echo '<p style="font-weight: 700; font-size: 120%">Второй доп</p>';

echo '1 &#9989. Напишите программу, которая проверяет правильность ввода пароля от пользователя. Важно, чтобы пароль соотв. сл. требованиям: длина пароля от 6 символов; 
пароль должен состоять только из лат. символов; содержать минимум 1 число, 1 большой символ и любой знак из списка: _*&-#$.<br><br>';
echo "<div class='form'> <form method='POST'> <input name='pass', type='line' placeholder='Введите пароль'> </form>";
$pass = (string)$_POST['pass'];

function pass($pass){
if (preg_match('/^(?=.*[A-Z])(?=.*[0-9])(?=.*[\_\*\&\-\#\$]).{6,}/', $pass)){
echo 'Соответствует';
} else {echo 'Не соответствует';}
}

pass($pass);

echo '<hr />';

echo '2 &#9989. Найти число с максимальной суммой цифр среди чисел: 56,987,103,9011,45.<br><br>';

function max_num(){
    $a = [56,987,103,9011,45];
    $total = 1;
    $num;
for ($i=0; $i < count($a); $i++){
    $total1= 0;
    for ($j = 0; $j < strlen($a[$i]); $j++){
        $total1+=strval($a[$i])[$j];
    }
    if($total1 > $total){
        $total = $total1;
        $num = $a[$i];
    }
}
echo 'Число с максимальной суммой цифр - ' . $num;
}
max_num();

echo '<hr />';

echo '3 &#9989. Посчитайте и выведете кол-во встречающихся чисел в строке “В 2018 году появился проект, объединяющий возможности Windows Forms (.NET Framework) и PHP 7. 
Его разработка медленными темпами ведётся и сейчас. На текущий момент в движке доступны практически все функции для ООП. Среда находится на стадии приватной разработки. 
К исполняемому файлу по умолчанию прилагается php7ts.dll.”<br><br>';

function num(){
$a = 'В 2018 году появился проект, объединяющий возможности Windows Forms (.NET Framework) и PHP 7. Его разработка медленными темпами ведётся и сейчас. 
На текущий момент в движке доступны практически все функции для ООП. Среда находится на стадии приватной разработки. К исполняемому файлу по умолчанию прилагается php7ts.dll.';
$a1 = preg_split('/[\s.,!?]+/', $a);
$total = 0;
for ($i = 0; $i < count($a1); $i++){
    if (is_numeric($a1[$i])){
$total++;
    }
}
echo 'В данной строке ' . $total . ' числа.';

}
num();

echo '<hr />';


echo '4. Есть 2 массива: arr1 = [1,2,3,4,5,6,7,8] и arr2 = [5, 3, 6, 9, 11]. Напишите функцию, которая принимает 2 массива и возвращает массив элементов, которые есть в обоих массивах. <br><br>';

$arr1 = [1,2,3,4,5,6,7,8];
$arr2 = [5, 3, 6, 9, 11];

echo '<hr />';
echo '5. Есть два массива с числовыми значениями одинаковой длины. Создайте третий массив с суммами элементов данных массивов. Например:  [12,4,0] + [8,7,6] = [20, 11, 6].<br><br>';

echo '<hr />';
echo '6. Поменяйте местами максимальный и минимальных элементы в массиве.<br><br>';

echo '<hr />';
echo '7. Напишите функцию alpha_bet_order(str), которая возвращает переданную строку с буквами в алфавитном порядке. Пример строки: \'alphabetical\'. Ожидаемый результат: 
\'aaabcehillpt\'. Предположим, что символы пунктуации и цифры не включены в переданную строку.<br><br>';

echo '<hr />';
echo '8. Напишите функцию find_longest_word(str), которая принимает строку в качестве параметра и находит самое длинное слово в строке.<br><br>';

echo '<hr />';


echo '9. Нужно написать функцию, которая проверяет, являются ли две строки анаграммами, причем регистр букв не имеет значения. Учитываются лишь символы; пробелы или знаки препинания в расчет не берутся.<br><br>';

echo '<hr />';


echo '10. Напишите функцию create_password по созданию паролей длиной от минимум 8 символов, либо до кол-ва введеного через параметр. Обязательные требования к паролю: латинские символы и целые числа; 
специальные симоволы: _-,.&*^$#@+=!; минимум один большой симовол, одна цифра, один спец. символ.<br><br>';

echo '<hr />';


echo '11. Создайте функцию "Калькулятор", calc(expression), которая должны уметь вычислять операции: сложение, вычитание, умножение, разность; между положительными целочисленными значениями. 
Математическое выражение должно передаваться через параметр expression в виде строки, например: "45+8", "4-23". Если параметр не передается, то нужно запросить выражение через input. 
Результат вычисления выведите через alert. Используйте регулярные выражения для "парсинг" (обработки) параметра).<br><br>';

echo '<hr />';


echo '12. Напиши функцию, которая будет проверять любой объем текста на вхождение плохих (запрещенных) слов, и возвращать новый, прошедший цензуру, текст. 
Запрещенные слова нужно заменить на символы "#" в зависимости от длины слова. В функцию нужно передавать два параметра: текст, массив запрещенных слов.<br><br>';