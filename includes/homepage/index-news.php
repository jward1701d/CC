   <div id = "news">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <!-- Industry Shows panel -->
           <div id="tradeshows" class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingZero">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseZero" aria-expanded="false" aria-controls="collapseZero">
                        <img class = "cc-sticker" src="http://via.placeholder.com/25x25" alt="coal" > Industry Shows
                     </a>
                 </h4>
             </div>
             <div id="collapseZero" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne"> <!-- In order ot have it auto expanded add "in" to the class attribute. -->
                 <div class="panel-body">
                     <!-- Content here -->
                     <?php include_once "tradeshow-slider.php"; ?>
                  </div>
              </div>
          </div>
<!-- End Industry Shows  panel -->
           <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <img class = "cc-sticker" src="http://via.placeholder.com/25x25" alt="coal" > Upcoming (Regional) Events
                     </a>
                 </h4>
             </div>
             <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                 <div class="panel-body">
                     <?php include_once "regional.php"; ?>
					 </br></br><span>Add Upcoming (Regional) Event <a href="#">here</a>.</span> 
				 </div>
              </div>
          </div>
<!-- End Upcoming Region Events panel -->
    
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <img class = "cc-sticker" src="http://via.placeholder.com/25x25" alt="coal" > Editorials and Press Releases
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                    
					<?php include_once "editorial.php"; ?>
		
		</br></br><span>Add Press Release <a href="#">here</a>.</span>
	   			</div>
            </div>
        </div>
        <!-- End Editorials & Press Release Panel -->
        
        
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <img class = "cc-sticker" src="http://via.placeholder.com/25x25" alt="coal" > Product News
                    </a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                  <?php include_once "productnews.php"; ?>
					
					</br></br><span>Add Product News <a href="#">here</a>.</span>
                </div>
            </div>
        </div>
        <!-- End Product News Panel -->
        
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFour">
                <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                         <img class = "cc-sticker" src="http://via.placeholder.com/25x25" alt="coal" > Industry News & Announcements
                    </a>
                </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                <div class="panel-body">
                    <?php include_once "industrynews.php"; ?>
                    	
                </br></br><span>Add Industry News & Announcements <a href="#">here</a>.</span>
                </div>
            </div>
        </div>
        <!-- End Industry News Panel -->    
    </div>
    <!-- End news panel group -->
</div>