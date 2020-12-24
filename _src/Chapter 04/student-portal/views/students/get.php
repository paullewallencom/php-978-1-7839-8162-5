<div id="getStudent">
	<table>
		<tr>
			<th>Student Id</th>
			<th>First Name</th>
			<th>Last Name</th>
		</tr>
		<?php foreach($this->student_data as $student): ?>
		<tr>
			<td><?= $student['student_id']?></td>
			<td><?= $student['first_name']?></td>
			<td><?= $student['last_name']?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>
