<?php include 'partials/head.php';?>
<?php include 'partials/header_menu.php';?>
<?php include 'partials/admin-sidebar.php';?>
<?php include 'partials/bredcrumb.php';?>

<div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add New Students</h3>
                            </div>
                        </div>
                        <form class="new-added-form">
                            <div class="form-group">
							    <label for="region_id">Region Id:</label>
							    <input type="number" name="region_id" class="form-control" id="region_id">
							  </div>
							  <div class="form-group">
							    <label for="name">Name:</label>
							    <textarea class="form-control" name="name"></textarea>
							  </div>
							  <div class="form-group">
							    <label for="description">Description:</label>
							    <input type="text" name="description" class="form-control" id="description">
							  </div>
							  <button type="submit" class="btn btn-info">Submit</button>
                        </form>
                    </div>
                </div>


<?php include 'partials/footer.php';?>