<div id="getStudentCourses">
	<table>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Course Name</th>
		</tr>
		<?php foreach($this->studentsCourses_data as $studentCourseData): ?>
		<tr>
			<td><?= $studentCourseData['first_name']?></td>
			<td><?= $studentCourseData['last_name']?></td>
			<td><?= $studentCourseData['course_name']?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>
