<?php
echo "<table border='1'><br />";

for ($row = 0; $row < 8; $row++) {
    echo "<tr>";

    for ($col = 1; $col <= 8; $col++) {
        echo "<td>", ($col + ($row * 8)), "</td>";
    }

    echo "</tr>";
}

echo "</table>";
