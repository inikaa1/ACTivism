<?php
$error = '';
$topic = '';
$magnitude = '';
$problem = '';

function clean_text($string)
{
    $string = trim($string);
    $string = stripcslashes($string);
    $string = htmlspecialchars($string);
    return $string;
}
if (isset($_POST['submit'])){
    if (empty($_POST['topic']))
    {
        $error .= '<p><label class= "text-danger">Please Enter topic</label></p>';
    }
    else
    {
        $topic = clean_text($_POST['name']);
        if (!preg_match("/^[a-zA-Z ]*$/".$topic))
        {
            $error .= '<p><label class= "text-danger">Only Letters and white spaces</label></p>';
        }

    }
}
?>

