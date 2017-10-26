<?php

$hasError = false;
$sent = false;

$stuff = "";
$sticker = null;
$issue = null;

if(isset($_POST['submitform'])){
    
    if(!empty($_POST['list']))
    {
        foreach($_POST['list'] as $selected){
            $stuff = $selected;
            //echo $stuff;
            if($stuff === "sticker"){
                $sticker = "Send me some stickers.";//$stuff;
                //unset($stuff);
            }elseif($stuff === "issue")
            {
                $issue = "Send me an issue.";//$stuff;
                //unset($stuff);
            }elseif($stuff ==="stickerissue")
            {
                $sticker = "sticker";
                $issue = "issue";
                //unset($stuff);
            }else{
                $sticker = "";
                $issue = "";
                //unset($stuff);
            }
        }
        
    }
    
    $company = trim(htmlspecialchars($_POST['company'], ENT_QUOTES));
    $job = trim(htmlspecialchars($_POST['jobtitle'], ENT_QUOTES));
    $name = trim(htmlspecialchars($_POST['name'], ENT_QUOTES));
    $address = trim(htmlspecialchars($_POST['address'], ENT_QUOTES));
    $city = trim(htmlspecialchars($_POST['city'], ENT_QUOTES));
    $state = trim(htmlspecialchars($_POST['state'], ENT_QUOTES));
    $zip = trim(htmlspecialchars($_POST['zipcode'], ENT_QUOTES));
    $email = trim($_POST['email']);
    $country = trim(htmlspecialchars($_POST['country'], ENT_QUOTES));
    $phone = trim(htmlspecialchars($_POST['phone'], ENT_QUOTES));
    $message = trim(htmlspecialchars($_POST['message'], ENT_QUOTES));
	$thoughts = trim(htmlspecialchars($_POST['thoughts'], ENT_QUOTES));
    
    $fieldsArray = array(
        'item' => $stuff,
        'company' => $company,
        'job' => $job,
        'name' => $name,
        'address' => $address,
        'city' => $city,
        'state' => $state,
        'zip' => $zip,
        'email' => $email,
		'thoughts' => $thoughts
    );
    
    $errorArray = array();
    
    
    
    foreach($fieldsArray as $key => $val)
    {
        switch($key){
            case 'item':
                if(empty($val)){
                    $hasError = true;
                    $errorArray[$key] = "You have to chose at least one item either Sticker or issue or you can chose both.";
                }
                break;
            case 'company':
            case 'job':
            case 'name':
            case 'address':
            case 'city':
            case 'state':
            case 'zip':
                if(empty($val)){
                    $hasError = true;
                    $errorArray[$key] = ucfirst($key) . " fields was left empty.";
                }
                break;
            case 'email':
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $hasError = true;
                    $errorArray[$key] = "Invalid Email Address.";
                }else{
                    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
                }
                break;
        }
    }
    
    if($hasError !== true && $thoughts ==="")
    {
        $to = "david@coalfieldconnection.com";
        $subject = "Coalfield Connection Sticker-Issue Request";
        $msgcontent = "Company: $company \r\n";
        $msgcontent .= "Job/Title: $job \r\n";
        $msgcontent .= "Name: $name \r\n";
        $msgcontent .= "Address: $address \r\n";
        $msgcontent .= "$city, $state $zip \r\n";
        $msgcontent .= "Email: $email \r\n";
        $msgcontent .= "Phone: $phone \r\n";
        $msgcontent .= "Country: $country \r\n";
        $msgcontent .= "Issue: $issue \r\n";
        $msgcontent .= "Sticker: $sticker \r\n";
        $msgcontent .= "Message: $message";
        $headers = "From: $name <$email> \r\n";
        $mailsent = mail($to, $subject,$msgcontent,$headers);
        if($mailsent){
            $sent = true;
            unset($stuff);
            unset($sticker);
            unset($issue);
            unset($company);
            unset($job);
            unset($name);
            unset($address);
            unset($city);
            unset($state);
            unset($zip);
            unset($email);
            unset($country);
            unset($phone);
            unset($message);
        }
    }
    
    
    if($hasError === true){
        echo '<div class = "errorlist">';
        echo '<h3> Form Errors </h3><hr>';
        echo '<ul>';
        foreach($errorArray as $key => $val)
        {
            echo "<li>". $key . " feld error - $val</li>";
        }
        echo '</ul></div>';
        unset($hasError);
    }
    
    if($sent === true){
        echo '<div class = "formSent">';
        echo '<h3> Success </h3><hr>';
        echo '<h4>You message has been sent. We will get the requested materials to you as soon as possible. Thank you.</h4>';
        
        echo '</div>';
        unset($sent);
        echo '<META HTTP-EQUIV="Refresh" Content="2; index.php">';
    }
    
}


?>
<?php include_once "get-stuff.php"; ?>
<div class="col-xs-12 col-md-7 col-md-offset-2">
	<div id = "get-sticker" class="panel panel-default">
            <div class="panel-body">
                <form id = "get-sticker-contact" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" novalidate>
                    <!--<span id="sticker-issue">Choose one or both*</span>-->
                    <div class="form-group issue-sticker">
						<span style = "color: #fff; margin-left: 20px; font-style: italic;">Feilds marked with an (*) are Required.</span></br></br>
                        <span id="sticker-issue">Please click one or both</span></br></br>
                        <input style="margin-left: 15px;" name="list[]" type="checkbox" id="get-sticker-cb" value="sticker"> <span id="sticker">Get a Sticker*</span>
                        <input style="margin-left: 40px;" name="list[]" type="checkbox" id="get-issue-cb" value="issue-cb"> <span id="issue-cb">Get an Issue*</span>
                    </div>
                     
                    <div class="form-group">
                        <label for="company">Company, Organization, or Employer*</label>
                        <input type="text" name="company" class="form-control" id="company" placeholder="Enter Company Name" >
                    </div>
                    
                    <div class="form-group">
                        <label for="jobTitle">Job Title/Position*</label>
                        <input type="text" class="form-control" name="jobtitle" id="jobTitle" placeholder="Enter Position">
                    </div>
                                        
                    <div class="form-group name">
                        <label for="name">Name*</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Enter Name">
                    </div>
                    
                    <div class="form-group">
                        <label for="address">Address*</label>
                        <input type="text" name="address" class="form-control" id="address" placeholder="Enter Address">
                    </div>

                     <div class="form-group">
                        <label for="city">City*</label>
                        <input type="text" name="city" class="form-control" id="city" placeholder="Enter City">
                    </div>
                    
                    <div class="form-group">
                        <label for="state">State*</label>
                        <input type="text" name="state" class="form-control" id="state" placeholder="Enter State">
                    </div>
                    
                    <div class="form-group">
                        <label for="zipcode">Zip*</label>
                        <input type="text" name="zipcode" class="form-control" id="zipcode" placeholder="Enter Zipcode">
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email*</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                    </div>
                
                    <div class="form-group">
                        <label for="phone">Phone </label>
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter Phone Number">
                    </div>
                
                     <div class="form-group">
                        <label for="country">Country</label>
                        <input type="text" name="country" class="form-control" id="country" placeholder="Enter Country">
                    </div>
                
                    <div class="form-group">
                        <label for="contactmessage">Comments</label>
                        <textarea class="form-control" name="message" id="contactmessage" rows="4"></textarea>
                    </div>

					<div class="form-group" style="display: none;">
                        <label for="thoughts">Spam counter</label>
                        <input type="text" name="thoughts" class="form-control" id="thoughts" placeholder="Enter Thoughts">
                    </div>
				
                    <input type="submit" name="submitform" class="btn btn-primary" id="submit" value="Submit">
                </form>
            </div>
        </div>
</div>
