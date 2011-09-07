<?php include './src/class.seostats.php';
error_reporting(0);
try 
{
        $url = new SEOstats($_GET['url']);
        $url->print_array('Social','json');

} 
catch (SEOstatsException $e) 
{
        die($e->getMessage());
}
?>