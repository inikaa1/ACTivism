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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<div class="container" >
<br><br>
<h1 style="color:Blue">Topics</h1>
    <br>
    <div class="col-md-6" style="margin: 0; auto; float:none">
    <form>
    <div class="form-group">
        <label for="exampleInputTopic11">Topic</label>
        <input type="text" class="form-control" id="exampleInputTopic1" aria-describedby="TopicHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputImpact">Impact</label>
        <input type="text" class="form-control" id="exampleInputImpact">
    </div>
    <label for="exampleInputDescription">Description</label>
    <textarea id="probdescription" name="probdescription" rows="4" cols="50"></textarea>
    <br>
    <br>
    <button type="submit" class="btn btn-primary">Approval</button>
    