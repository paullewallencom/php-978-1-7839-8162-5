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
				<?php if($this->role != 'student'):?>
	                                <input name="student_id" placeholder="Enter Student Id"/> 
				<?php else: ?>
					<label><?= $this->student_id ?></label>
        	                        <input name="student_id" type="hidden" value=<?= $this->student_id?>/> 
				<?php endif;?>
			</li>
			<li>
				<input type="submit" name="submit" value="Register Course">
			</li>
		</ul>
	</form>
</div>
