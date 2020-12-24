<div>
<?php 
	if(isset($this->id)){
		echo "New course has been successfully added";
	}
?>

	<form class="Frm" action="add" method="post">
		<ul>
			<li>
				<label>Course Name</label>
                                <input name="name" placeholder="Enter Course Name">
			</li>
			<li>
                                <label>Description</label>
                                <textarea name="description" placeholder="Enter Description"></textarea> 
			</li>
			<li>
				<input type="submit" name="submit" value="Add Course">
			</li>
	</form>
</div>
