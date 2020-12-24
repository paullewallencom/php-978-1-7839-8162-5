<div id="getStudent">
	<div id="importStudents">
		<p>
			<a id="exportStudentsLink" href="export">Export Students</a>
			|<a id="importStudentsLink" href="#">Import Students</a>
		</p>
		<div style="clear:both"></div>
		<div id="importStudentsFrm" style="display:none;">
			<form action="/student-portal/students/import" method="post" enctype="multipart/form-data">
				<input type="file" name="file" />
				<input type="submit" name="submit" value="Import Students" />
			</form>
		</div>
	</div>
	<div id="message">
	<?php if(isset($this->message)): ?>
		<?= $this->message ?>
	<?php endif; ?>
	</div>
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
