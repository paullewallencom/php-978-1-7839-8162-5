<div>
<?php 
	if(isset($this->id)){
		echo "Student has been successfully registered for the course";
	}
?>

	<form class="Frm" action="register" method="post">
		<ul>
			<li>
				<label>Course Id</label>
                                <input name="course_id" placeholder="Enter Course Id">
			</li>
			<li>
                                <label>Student Id</label>
                                <input name="student_id" placeholder="Enter Student Id"/> 
			</li>
			<li>
				<input type="submit" name="submit" value="Register Course">
			</li>
		</ul>
	</form>
</div>
