<?php include './src/class.seostats.php';
error_reporting(0);
try 
{
        $url = new SEOstats($_GET['url']);
        $url->print_array('Custom','json');

} 
catch (SEOstatsException $e) 
{
        die($e->getMessage());
}
?>