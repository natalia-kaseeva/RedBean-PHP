<?php 

require "db.php";

//создание новой записи в БД

/*$course=R::dispense('courses');

$course->title="Курс по React";
$course->tuts = 10;
$course->homeworks = 8;
$course->level = "Для новичков";
$course->price = 100;
R::store($course);*/

//Получение всех записей
/*$courses=R::find('courses');
//print_r($courses);
foreach ($courses as $course) {
	echo "ID: " . $course->id . "<br>";
	echo "Название курса: " . $course->title . "<br>";
	echo "Количество уроков: " . $course->tuts . "<br>";
	echo "Уровень: " . $course->level . "<br>";
	echo "<hr>";
}*/

//Получение одного курса

/*$course=R::load('courses',3);*/
//print_r($course);
/*echo "ID: " . $course->id . "<br>";
echo "Название курса: " . $course->title . "<br>";
echo "Количество уроков: " . $course->tuts . "<br>";
echo "Уровень: " . $course->level . "<br>";*/

//Изменение данных этого курса
/*$course->title = "React - 1-я ступень";
$course->tuts = 20;
$course->homeworks = 20;
$course->level = "Для продвинутых";
$course->price = 80;
$course->students = 400;*/

//Сохранение данных
/*R::store($course);*/

//Удаление записи в БД
$course = R::load('courses', 2);
R::trash($course);

 ?>