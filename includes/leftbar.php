	
	<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
			<li class="ts-label">Main</li>
			<li><a href="profile.php"><i class="fa fa-user"></i> &nbsp;Profile</a>
			</li>
			
			
		
				<?php 
				$role = $_SESSION['role'];
				if($role !='Student'){
									?>
			<li><a href="students_list.php"><i class="fa fa-search" aria-hidden="true"></i> &nbsp;Student List</a>
			
							<?php }?>
					<?php		
							if($role =='Admin'){
									?>
		<li><a href="professor_list.php"><i class="fa fa-search" aria-hidden="true"></i> &nbsp;Professor List</a>
			
							<?php }?>
			
							
			<li><a href="course_list.php"><i class="fa fa-search" aria-hidden="true"></i> &nbsp;Course List</a>
			<li><a href="target_list.php"><i class="fa fa-search" aria-hidden="true"></i> &nbsp;Target</a>
			<li><a href="achievement_list.php"><i class="fa fa-search" aria-hidden="true"></i> &nbsp;Grade</a>
			</ul>
		
		</nav>

		
				