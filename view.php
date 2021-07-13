<?php
echo $page_content;
?>

<select name="courses">
  <?php
  foreach ($list_of_courses as $course_name) : ?>
    <option><?= $course_name ?></option>
  <?php endforeach ?>
</select>

<form>
  <input type="hidden" name="action" value="bySemester">
  <?php
  foreach(get_semesters() as $semester){
    echo $semester . '<input type=radio name=semester value=' . $semester . '>';
  }
  ?>
  <input type="submit">
</form>