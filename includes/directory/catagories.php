<div id = "directory" class="container">
    <div class="panel panel-default panel-custom">
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Business Directory</h2>
                </div>
                <div class="col-md-12 hidden-xs jump-nav">
                    <?php include_once "dir-nav.php"; ?><!-- contains Jump Navof the directory.-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <?php include_once "cat-row-1.php"; ?><!-- contains The first row of the directory.-->
                </div>
                <div class="col-md-4">
                    <?php include_once "cat-row-2.php"; ?><!-- contains The second row of the directory.-->
                </div>
                <div class="col-md-4">
                    <?php include_once "cat-row-3.php"; ?><!-- contains The second row of the directory.-->
                </div>
                
            </div>
        </div>
    </div>
</div>



<!-- Begin the Modal inclusion area -->
<?php include_once "modal.php"; ?>