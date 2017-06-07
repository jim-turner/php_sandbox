<?php require_once("includes/connection.php");

?>
<?php require_once("includes/functions.php"); ?>
<?php include("includes/header.php"); ?>

<table id="structure">
    <tr>
        <td id="navigation">
            <ul class="subjects">
                <?php
                    $query = "SELECT * 
                    FROM subjects ORDER BY position ASC";
$subject_set = mysqli_query($connection, $query );
    if (!$subject_set){
    die("Database query failed:" . mysql_error());
    }
    
    //results
    while($subject = mysqli_fetch_array($subject_set)){
        echo "<li><a href=\"content.php\">{$subject["menu_name"]}</a></li>";
        
        $page_set = mysqli_query($connection, "SELECT * FROM pages WHERE  subject_id = {$subject["id"]} ORDER BY position ASC" );
    if (!$page_set){
    die("Database query failed:" . mysql_error());
    }
    
    //results
    echo "<ul class=\"pages\">";    
    while($page = mysqli_fetch_array($page_set)){
        echo "<li><a href=\"content.php\">{$page["menu_name"]}</a></li>";
    }
        echo "</ul>";
    }
    ?>
            </ul>
        </td>
        <td id="page">
            <h2>Content Area</h2>

        </td>
    </tr>
</table>

<?php include("includes/footer.php"); ?>
