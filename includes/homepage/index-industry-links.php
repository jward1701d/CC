<!-- Nav tabs -->
<ul class="nav nav-tabs industry-links" role="tablist">
    <li class = "active">
        <a href="#tc" role="tab" data-toggle="tab">
            <img class = "tab-img-1" src="img/coal.png" alt="coal">  Links
        </a>
    </li>
    <li>
        <a href="#goverment" role="tab" data-toggle="tab">
            <img class ="tab-img" src="img/coal.png" alt="coal"> Government
        </a>
    </li>
    <li>
        <a href="#associations" role="tab" data-toggle="tab">
            <img class ="tab-img" src="img/coal.png" alt="coal"> Associations
        </a>
    </li>
    <li>
        <a href="#educational" role="tab" data-toggle="tab">
            <img class ="tab-img" src="img/coal.png" alt="coal"> Educational
        </a>
    </li>
</ul>
<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane fade active in" id="tc">
        <p>Government, Associations, & Educational External Links</p>
    </div>
    <div class="tab-pane fade" id="goverment">
       <?php include_once "government.php"; ?> <!-- Section contains the news accordian -->
    </div>
    <div class="tab-pane fade" id="associations">
        <?php include_once "associations.php"; ?> <!-- Section contains the news accordian -->
    </div>
    <div class="tab-pane fade" id="educational">
        <?php include_once "educational.php"; ?> <!-- Section contains the news accordian -->
    </div>
</div>