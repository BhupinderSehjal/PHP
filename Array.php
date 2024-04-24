


<h2 style="color: black;">

<?php
$Students = array(
    "amit" => array(
    "Physics" => 77,
    "Chemistry" =>86,
    "Maths" => 84),

    "Chirag" => array(
        "Physics" =>84,
        "Chemistry" =>92,
        "Maths" => 78
    ),
    
    "Vandana" => array(
        "Physics" =>91,
        "Chemistry" =>88,
        "Maths" =>97
    )
    );


    foreach($Students as $Student => $Subjects)
    {
        foreach($Subjects as $Subject => $mark)
        {
            echo  "<br>".$Student. "\n has scored \n" . $mark ."\n in \n" .$Subject. "<br>";
        }
    }

?>

</h2>