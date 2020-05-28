<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>New Year of Coding - Lesson 2 - Final Code</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <?php
    function renderResItem($resItem) {
      echo '<li><div>' . $resItem['name'] . '</div><input type="text" /><small>' . $resItem['description'] . '</small></li>';
    }

    $resolutions = array(
      array(
        "name" => "My first resolution",
        "description" => "First res description"
      ),
      array(
        "name" => "My second resolution",
        "description" => "Second res description"
      ),
      array(
        "name" => "My third resolution",
        "description" => "Third res description"
      )
    );
    ?>

    <h1>My New Year's Resolutions</h1>
    <ul id="resolution_list">
      <?php
      foreach ($resolutions as $resItem) {
        renderResItem($resItem);
      }
      ?>
    </ul>

    <div>
    <input id="resolution_name" type="text"> <button id="add_resolution">+ Add Resolution</button>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script src="script.js"></script>

</body>
</html>