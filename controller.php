<?php
include 'model.php';

$list_of_courses = get_courses();

$page_action = (!empty($_GET['action']) ? $_GET['action'] : '');

switch ($page_action) {
  case 'bySemester': {
      $semester = (!empty($_GET['semester']) ? $_GET['semester'] : '');
      $course_name = find_by_semester($semester);
      $page_content = $semester . ' Course name: ' .  $course_name;
      break;
    }
}

include 'index.php';
