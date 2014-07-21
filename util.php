  
<?php
/**
 * This Shows Website Title
 */
$Website_Title = "MDC Corporation";

/**
 * This Shows Website Header Title
 */
$Website_Header_Title = "MDC Corporation";

/**
 * This Shows Website Logo
 */
$Website_Logo = "/images/logo_100x100.png";


/**
 * This Shows Website Favicon
 */
$Website_Favicon = "/images/MdcCorp_favicon1.png";


/**
 * This is meta Tag for description
 */
$Meta_Description = 'Look through your photos and submit your best shots to our online photo contest website, the photo with the most votes will win. The Contest is open to all professionals and non-photographers also. There is no age or location barriers to apply for the contest. So hurry up & submit it today!!';

/**
 * This is meta Tag for Keyword
 */
$Meta_keyword = 'Photocontest, Photography comiptition 2014, Online Photo Contest';

/**
 * This is meta Tag for Auther
 */
$Meta_Auther = '(CodeLord,Rishav) Developer @MDC Concepts India Pvt Ltd';


$Menu_Active = 0;

//rishav

/**
 * This variable is used for getting all Match Data
 */
date_default_timezone_set("Asia/Bangkok");
?>

<script type="text/javascript">
    // alert(screen.width);
//alert(screen.height);
    if (((screen.width >= 800) && (screen.height >= 1000)) || ((screen.width >= 1000) && (screen.height >= 750))) {
        // document.getElementsByClassName(".button11").style.margin-top = "35%";

        // alert(screen.width);
        // alert(screen.height);   


         window.location = "http://mdccorp.in/<?php echo basename($_SERVER['PHP_SELF']); ?>";
    }

</script> 