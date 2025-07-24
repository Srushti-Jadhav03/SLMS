<?php 
	include('inc/head.php'); 
	session_start();
	if (isset($_SESSION['email'])) {
		
	}
	else{
		header('location:index.php');
	}
	
?>
<body>
	<nav class="navbar navbar-toggleable-sm navbar-inverse bg-inverse p-0">
		<div class="container">
			<button class="navbar-toggler toggler-right" data-target="#mynavbar" data-toggle="collapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a href="#" class="navbar-brand mr-3">Student Leave Management System</a>
			<div class="collapse navbar-collapse" id="mynavbar">
				
				<ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown mr-3">
						
						<li class="nav-item">
							<a href="logout.php" class="nav-link"><i class="fa fa-power-off"></i> Logout</a>
						</li>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<header id="main-header" class="bg-danger py-2 text-white">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h1><i class="fa fa-user-secret"></i>Faculty Panel</h1>
				</div>
			</div>
		</div>
	</header>

	<section id="sections" class="py-4 mb-4 bg-faded">
		<div class="container">
			<div class="row">
				<div class="col-md"></div>
				<div class="col-md-2">
					<a href="#" class="btn btn-warning btn-block" style="border-radius:0%;" data-toggle="modal" data-target="#addPostModal"><i class="fa fa-spinner"></i> Pending Leaves</a>
				</div>
				<div class="col-md-2">
					<a href="#" class="btn btn-success btn-block" style="border-radius:0%;" data-toggle="modal" data-target="#addCateModal"><i class="fa fa-check"></i>Approved Leaves</a>
				</div>
				<div class="col-md-2">
					<a href="#" class="btn btn-primary btn-block" style="border-radius:0%;" data-toggle="modal" data-target="#addUsertModal"><i class="fa fa-th"></i> Total Leaves</a>
				</div>
				<div class="col-md-2">
					<a href="#" class="btn btn-info btn-block" style="border-radius:0%;" data-toggle="modal" data-target="#viewEmpModal"><i class="fa fa-eye"></i> View Students</a>
				</div>
				<div class="col-md"></div>
			</div>
		</div>
	
	</section>

	<section id="post">
		<div class="container">
			<div class="row">
			<table class="table table-bordered table-hover table-striped">
							<thead>
								<th>Sr.No</th>
								<th>Name</th>
								<th>Class</th>
								<th>Date</th>
								<th>Reason</th>
								<th>Status</th>
							</thead>
							 <tbody>
							 	<?php 
									$sql = "SELECT * FROM leaves ORDER BY id DESC";
									$que = mysqli_query($con,$sql);
									$cnt = 1;
									while ($result = mysqli_fetch_assoc($que)) {
										
									?>

									
							 	<tr>
									<td><?php echo $cnt;?></td>
							 		<td><?php echo $result['name']; ?></td>
							 		<td><?php echo $result['class']; ?></td>
							 		<td><?php echo $result['leavedate']; ?></td>
									<td><?php echo $result['leavedur']; ?></td>
							 		<td><?php echo $result['leavereason']; ?></td>
							 		<td>
							 			<?php 
							 			if ($result['status'] == 0) {
											echo "<span class='badge badge-warning'>Pending</span>";
							 			}
							 			else if ($result['status'] == 1) {
											echo "<span class='badge badge-success'>Approved</span>";
							 			}
										else {
											echo "<span class='badge badge-danger'>Rejected</span>";
										}
							 	$cnt++;	}
							 		 ?>
							 		</td>
							 	</tr>
								
							 </tbody>
						</table>
			</div>
		</div>
	</section>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<!----Section3 footer ---->
	<section id="main-footer" class="text-center text-white bg-inverse mt-4 p-4">
		<div class="container">
			<div class="row">
				<div class="col">
				<p class="lead">&copy; <?php echo date("Y")?> CSBS</p>
				</div>
			</div>
		</div>
	</section>
	
	
	<div class="modal fade" id="addPostModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <div class="modal-title">
                    <h5>Pending Leaves</h5>
                </div>
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Sr. No</th>
                                <th>Name</th>
                                <th>Class</th>
                                <th>Date</th>
                                <th>Duration</th>
                                <th>Reason</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $sql = "SELECT * FROM leaves WHERE status = 0";
                                $que = mysqli_query($con,$sql);
                                $cnt = 1;
                                while ($result = mysqli_fetch_assoc($que)) {
                            ?>
                            <tr>
                                <td><?php echo $cnt;?></td>
                                <td><?php echo $result['name']; ?></td>
                                <td><?php echo $result['class']; ?></td>
                                <td><?php echo $result['leavedate']; ?></td>
                                <td><?php echo $result['leavedur']; ?></td>
                                <td><?php echo $result['leavereason']; ?></td>
                                <td><?php echo ($result['status'] == 0) ? "Pending" : "Approved"; ?></td>
                                <td>
                                    <?php if ($result['status'] == 0) { ?>
                                    <form action="accept.php?id=<?php echo $result['id']; ?>" method="POST">
                                        <input type="hidden" name="appid" value="<?php echo $result['id']; ?>">
                                        <input type="submit" class="btn btn-sm btn-success" name="approve" value="Approve">
                                    </form>
                                    <form action="reject.php?id=<?php echo $result['id']; ?>" method="POST">
                                        <input type="hidden" name="appid" value="<?php echo $result['id']; ?>">
                                        <input type="submit" class="btn btn-sm btn-danger" name="reject" value="Reject">
                                    </form>
                                    <?php } ?>
                                </td>
                            </tr>
                            <?php $cnt++; }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="addCateModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <div class="modal-title">
                    <h5>Approved Leaves</h5>
                </div>
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Sr. No</th>
                                <th>Name</th>
                                <th>Class</th>
                                <th>Date</th>
                                <th>Duration</th>
                                <th>Reason</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $sql = "SELECT * FROM leaves WHERE status = 1";
                                $que = mysqli_query($con, $sql);
                                $cnt = 1;
                                while ($result = mysqli_fetch_assoc($que)) {
                            ?>
                            <tr>
                                <td><?php echo $cnt;?></td>
                                <td><?php echo $result['name']; ?></td>
                                <td><?php echo $result['class']; ?></td>
                                <td><?php echo $result['leavedate']; ?></td>
                                <td><?php echo $result['leavedur']; ?></td>
                                <td><?php echo $result['leavereason']; ?></td>
                                <td>
                                    <?php 
                                        if ($result['status'] == 0) {
                                            echo "<span class='badge badge-warning'>Pending</span>";
                                        } elseif ($result['status'] == 1) {
                                            echo "<span class='badge badge-success'>Approved</span>";
                                        } else {
                                            echo "<span class='badge badge-danger'>Rejected</span>";
                                        }
                                    ?>
                                </td>
                            </tr>
                            <?php 
                                $cnt++;
                            } 
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addUsertModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <div class="modal-title">
                    <h5>Total Leaves</h5>
                </div>
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Sr. No</th>
                                <th>Name</th>
                                <th>Class</th>
                                <th>Date</th>
                                <th>Duration</th>
                                <th>Reason</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $sql = "SELECT * FROM leaves ORDER BY id DESC";
                                $que = mysqli_query($con,$sql);
                                $cnt = 1;
                                while ($result = mysqli_fetch_assoc($que)) {
                            ?>
                            <tr>
                                <td><?php echo $cnt;?></td>
                                <td><?php echo $result['name']; ?></td>
                                <td><?php echo $result['class']; ?></td>
                                <td><?php echo $result['leavedate']; ?></td>
                                <td><?php echo $result['leavedur']; ?></td>
                                <td><?php echo $result['leavereason']; ?></td>
                                <td>
                                    <?php 
                                        if ($result['status'] == 0) {
                                            echo "<span class='badge badge-warning'>Pending</span>";
                                        }
                                        else if ($result['status'] == 1) {
                                            echo "<span class='badge badge-success'>Approved</span>";
                                        }
                                        else {
                                            echo "<span class='badge badge-danger'>Rejected</span>";
                                        }
                                    ?>
                                </td>
                            </tr>
                            <?php 
                                $cnt++;
                            } 
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



	<div class="modal fade" id="viewEmpModal">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header bg-info text-white">
					<div class="modal-title">
						<h5>Students List</h5>
					</div>
					<button class="close" data-dismiss="modal"><span>&times;</span></button>
				</div>
				<div class="modal-body">
				<table class="table table-bordered table-hover table-striped">
							<thead>
								<th>Sr.No</th>
								<th>Name</th>
								<th>Class</th>
								<th>Email</th>
							</thead>
							 <tbody>
							 	<?php 
									$sql = "SELECT * FROM student";
									$que = mysqli_query($con,$sql);
									$cnt = 1;
									while ($result = mysqli_fetch_assoc($que)) {
									?>

							 	<tr>
									<td><?php echo $cnt;?></td>
							 		<td><?php echo $result['name']; ?></td>
							 		<td><?php echo $result['class']; ?></td>
							 		<td><?php echo $result['email']; ?></td>
							 	</tr>

							 </tbody>
							 <?php $cnt++; }?>
						</table>
				</div>
				
			</div>
		</div>
	</div>
  
  
  <script src="js/jquery.min.js"></script>
  <script src="js/tether.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.9.1/standard/ckeditor.js"></script>
  <script>
	CKEDITOR.replace('editor1');
  </script>
</body>
</html>
