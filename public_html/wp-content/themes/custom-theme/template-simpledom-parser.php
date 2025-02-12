<?php 
/*
Template Name: Simple Dom Parser Demo
*/
?>
<?php get_header(); ?>
<?php
include_once('includes/simple_html_dom.php');

function scraping_generic($url, $search) {
	// Didn't find it yet.
	$return = false;

	echo "reading the url: " . $url . "<br/>";
    // create HTML DOM
    $html = file_get_html($url);
	echo "url has been read.<br/>";

    // get article block
    foreach($html->find($search) as $found) {
		// Found at least one.
		$return - true;
		echo "found a: " . $search . "<br/><pre>";
		$found->dump();
		echo "</pre><br/>";
    }
    
    // clean up memory
    $html->clear();
    unset($html);

    return $return;
}


// ------------------------------------------
error_log ("post:" . print_r($_POST, true));
$url = "";
if (isset($_POST['url']))
{
	$url = $_POST['url'];
}
$search = "";
if (isset($_POST['search']))
{
	$search = $_POST['search'];
}
?>
<form method="post">
	<label>URL: </label><input name="url" type="text" value="<?=$url;?>"/><br/>
	<label>Search: </label><input name="search" type="text" value="<?=$search;?>"/>
	<input name="submit" type="submit" value="Submit"/>
</form>
<?php
// -----------------------------------------------------------------------------
// test it!
if (isset ($_POST['submit']))
{
	$response = scraping_generic($_POST['url'], $_POST['search']);
	if (!$response)
	{
		echo "Did not find any: " . $_POST['search'] . "<br />";
	}
}
?>