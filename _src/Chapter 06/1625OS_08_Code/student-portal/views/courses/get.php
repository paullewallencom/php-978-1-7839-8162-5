<div id="getCourses">
	<table>
		<tr>
			<th>Course Id</th>
			<th>Course Name</th>
			<th>Description</th>
		</tr>
		<?php foreach($this->course_data as $course): ?>
		<tr>
			<td><?= $course['course_id']?></td>
			<td><?= $course['name']?></td>
			<td><?= $course['description']?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>
