<?php include('header.php'); ?>    
<?php include('session.php'); ?>    
    <body>
	<?php include('navbar.php'); ?>
			<div id="masthead">  
				<div class="container">
					<?php include('heading1.php'); ?>
				</div><!-- /cont -->
				<div class="container">
					<div class="row">
					<div class="col-md-12">
						<div class="top-spacer"><h2 id="po" class="font-family: 'Oswald',arial narrow,sans-serif;"> My Photos</h2></div>

				<?php
	$query = $conn->query("select * from photos where member_id='$session_id' ORDER BY photos_id DESC");
	while($row = $query->fetch()){
	$id = $row['photos_id'];
	?>
            <div class="col-md-2 col-sm-3 text-center">
				<img class="photo" src="<?php echo $row['location']; ?>" width="160" height="150">
				<hr>
	<a class="btn btn-danger" href="delete_photos.php<?php echo '?id='.$id; ?>"><i class="icon-remove"></i> Delete</a>
            </div>
				<?php } ?>
                					</div>
					</div> 
				</div><!-- /cont -->
			
    <div class="container">
	<div class="row">
	<div class="top-spacer"><h2 id="po" class="font-family: 'Oswald',arial narrow,sans-serif;"> My Posts</h2></div>
    <div class="col-md-12">
    <div class="panel">
    <div class="panel-body">
    <div class="row">
                				<?php
	$query = $conn->query("select * from post LEFT JOIN members on members.member_id = post.member_id where post.member_id='$session_id' order by post_id DESC");
	while($row = $query->fetch()){
	$posted_by = $row['firstname']." ".$row['lastname'];
	$posted_image = $row['image'];
	$id = $row['post_id'];
	?>
            <div class="col-md-2 col-sm-3 text-center">
             <img  src="<?php echo $posted_image; ?>" style="width:100px;height:100px" class="img-circle"></a>
            </div>
            <div class="col-md-10 col-sm-9">
             	<div class="alert"><?php echo $row['content']; ?></div>
              <div class="row">
                <div class="col-xs-9">
                  <h4><span class="label label-info"> <?php echo $row['date_posted']; ?></span></h4><h4>
                  <small style="font-family:courier,'new courier';" class="text-muted">Posted By:<a href="#" class="text-muted"><?php echo $posted_by; ?></a></small>
                  </h4></div>
                <div class="col-xs-3"><a href="delete_post.php<?php echo '?id='.$id; ?>" class="btn btn-danger"><i class="icon-trash"></i> Delete</a></div>
              </div>
              <br><br>
            </div>
	<?php } ?>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
                                               
                                                                                
<?php include('footer.php'); ?>
        
    </body>
</html>