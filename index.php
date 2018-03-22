<?php

$db= mysqli_connect('localhost', 'root', 'root', 'sign_in');

if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$userEmail = $_POST['email'];
$timestamp = date('Y-m-d G:i:s');
$message = "";

$select ="SELECT * FROM signinform WHERE email = '$userEmail'";
$result = mysqli_query($db, $select);
if(mysqli_num_rows($result) > 0) {
    $message = 'This email is already being used';
    $userEmail = "";
}

if(isset($_POST['submit'])) {
    if(!empty($userEmail)) {
        $sql = "INSERT INTO signinform (email, created_on) VALUES('$userEmail', '$timestamp')";
        if(mysqli_query($db, $sql)){
            $message = "Thanks for signing up! You'll recieve an email with your invititation";
        } else{
            $message = "There was a problem with your request: valid email address not provided";
        }
    } else {
        $message = "";
    }
}
mysqli_close($db);
?>

<!Doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MATTR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style/main.css" />
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" /> -->
</head>
<body>
    <div class="header-picture">
        <nav>
            <div>
                <p class="inline-block-font-style proxima-nova-font-style" id="header-title">MATTR</p>
                <p class="inline-block-font-style proxima-nova-font-style" id="header-blog">BLOG</p>
                <a class="inline-block-font-style proxima-nova-font-style" id="header-sign-in" href="sign_in.php">SIGN IN</a>
            </div>
        </nav>
        <header class="text-position">
            <div>
                <img src="./images/logo.png" alt="mattr logo">
                <p class="inline-block-font-style proxima-nova-font-style" id="mobile-header-title">MATTR</p>
                <h2 id="sub-title" class="adelle-font-style">Personalities<br> tell powerful stories.</h2>
                <p class="proxima-nova-font-style">The key to succesful brand engagement lies within the vibrant personalities that make 
                    up online audiences. Mattr translates the social data they generate into powerful stories
                    and actionable insights, allowing brands to connect on a deeper level with their tragets.
                </p>
            </div>
            <div id="invite-content">
                <p class="proxima-nova-font-style">GET TO KNOW YOUR AUDIENCE. <br> REQUEST A PRIVATE BETA INVITATION</p>
                <form action="" method="POST" id="input-email">
                    <input id="email-input" class="proxima-nova-font-style" type="email" name="email" placeholder="your@email.com">
                    <button id="request-button"type="submit" name="submit">REQUEST INVITE</button>
                </form>
                <span class="proxima-nova-font-style" id="email-message"><?php echo $message ?></span>
            </div>
        </header>
    </div>
    <hr>
    <div id="navbar" style="display: none;">
            <img src="./images/logo.png" alt="mattr log">
            <p class="proxima-nova-font-style" id="nav-header-title">MATTR</p>
            <button id="request-button"type="button">REQUEST AN INVITATION</button>
    </div>
    <section>
        <div>
            <h1 class="adelle-font-style">The App</h1>
            <p class="proxima-nova-font-style" id="italic-style"> Mattr allows you to build a more  complete view of your social media  audience through a comprehensive set of segmentation, comparison
            monitoring, and visualization tools. Explore your Features to learn more.</p>
        </div>
        <div>
            <img class="img-center" src="./images/audience.png" alt="">
            <!-- <div class="text-over proxima-nova-font-style"> <a href="#">VIEW <br> SCREENSHOTS </a> </div> -->
            <h3>Audience Personality Segments</h3>
            <p class="proxima-nova-font-style">Decide how you want to look at your  audience, based on our Unique Personality Type Analysis and demographics.</p>
        </div>
        <div>
           <img class="img-center" src="./images/persona.png" alt="">
           <h3>Persona Builder</h3> 
           <p class="proxima-nova-font-style">Combine Personality Traits and Demographics  information to create Audience Personas that make sense for your business.</p>
        </div>
        <div>
            <img class="img-center" src="./images/engagement.png" alt="">
            <h3>Engagement Response by Pesrona</h3>
            <p class="proxima-nova-font-style">Which of your social media activities are  attaching the audience engagement you're  looking for? See a segmented report on a  per-post basis.</p>
        </div>
        <div>
            <img class="img-center" src="./images/social.png" alt="">
            <h3>Social Brand BenchMarking</h3>
            <p class="proxima-nova-font-style">See how your brand's audience compares  to that of your competition, or your industry.  Choose what you want to compare and then  view the comparision</p>
        </div>
        <div>
            <img class="img-center" src="./images/sentiment.png" alt="">
            <h3>Sentiment Variance</h3>
            <p class="proxima-nova-font-style">Knowing that your audience is 'upbeat' just  isn't enough. You need to know if they're  more upbeat about your brand than they are  about other things.</p>
        </div>
    </section>
    <footer>
        <div>
            <h3 class="text-align-left">San Francisco, CA</h3>
            <p class="proxima-nova-font-style">Rocetspace <br> 181 Fremont Street <br> San Francisco, California 94105 <br> EMAIL US</p>
        </div>
        <div>
            <h3 class="text-align-left">Austin, TX</h3>
            <p class="proxima-nova-font-style">8140 North Mopac Expressway <br> Building 1, Suite 150 <br> Austin, Texas 78759 <br> EMAIL US</p>
        </div>
        <div>
            <h3 class="text-align-left">Elsewhere</h3>
            <ul>
                <li><span></span>Twitter</li>
                <li><span></span>Facebook</li>
                <li><span></span>LinkedIn</li>
            </ul>
        </div>
        <div>
            <h3 class="text-align-left">Company</h3>
            <ul>
                <li>Sign In</li>
                <li>Blog</li>
                <li>FAQ</li>
            </ul>
        </div>
        <div>
            <p class="proxima-nova-font-style">&copy 2013 MATTR. All rights reserved.</p>
        </div>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>