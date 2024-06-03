<?php
echo "<h2>DICT 2-3 CLASS SCHEDULES</h2>";
echo "<table border='1'>";
echo "<tr><th>TIME</th><th>MONDAY</th><th>TUESDAY</th><th>WEDNESDAY</th><th>THURSDAY</th><th>FRIDAY</th><th>SATURDAY</th></tr>";

$schedule = array(
    array("7:30 AM", "", "", "", "", "", ""),
    array("8:00 AM", "", "", "", "", "", ""),
    array("8:30 AM", "", "", "", "", "", ""),
    array("9:00 AM", "", "", "Quantitative Methods with<br>Modeling and Simulation<br>PROF. BAUTISTA, MARC ANTHONY", "", "", ""),
    array("9:30 AM", "Object Oriented Programming<br>PROF. REYES, NIO", "VACANT 7:30 - 12:30", "", "", "VACANT 7:30 - 12:30", "VACANT 7:30 - 12:30"),
    array("10:00 AM", "", "", "", "", "", ""),
    array("10:30 AM", "", "", "", "", "", ""),
    array("11:00 AM", "", "", "", "", "", ""),
    array("11:30 AM", "", "", "VACANT 11:00 - 12:30", "", "", ""),
    array("12:00 PM", "", "", "", "", "", ""),
    array("12:30 PM", "", "", "", "", "", ""),
    array("1:00 PM", "30 MINS BREAK", "", "", "", "", ""),
    array("1:30 PM", "", "Business Intelligence<br>PROF.LIPARDO JR., FERNANDO", "Team Sports", "REST DAY", "", ""),
    array("2:00 PM", "", "", "", "", "", ""),
    array("2:30 PM", "", "", "", "", "", ""),
    array("3:00 PM", "Human Computer Interaction<br>PROF.APSAY, JONNALYN", "", "", "", "", "Business Analytics (SMP Plus)<br>PROF.ABOGADO, CAMILO"),
    array("3:30 PM", "", "", "", "", "", ""),
    array("4:00 PM", "", "", "", "", "Web Development<br>PROF.SALAZAR, RAQUEL", ""),
    array("4:30 PM", "", "", "", "", "", ""),
    array("5:00 PM", "", "", "Information Management<br>PROF.DELA ISLA, JOSEPHINE", "", "", ""),
    array("5:30 PM", "VACANT 5:30 - 9:00", "", "", "", "", ""),
    array("6:00 PM", "", "", "", "", "", ""),
    array("6:30 PM", "", "30 MINS BREAK", "", "", "", ""),
    array("7:00 PM", "", "", "", "", "", ""),
    array("7:30 PM", "", "Web Development<br>PROF.SALAZAR, RAQUEL", "", "", "VACANT 7:30 - 9:00", "Information Management<br>PROF.DELA ISLA, JOSEPHINE"),
    array("8:00 PM", "", "", "", "", "", ""),
    array("8:30 PM", "", "", "", "", "", ""),
    array("9:00 PM", "", "", "", "", "", "")
);

foreach($schedule as $row) {
    echo "<tr>";
    foreach($row as $cell) {
        echo "<td>$cell</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
