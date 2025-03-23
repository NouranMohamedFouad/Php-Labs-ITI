<?php


function drawTable($header, $tableData) {

    echo '<body style="background-color: rgb(32, 30, 30);"><div class="table-responsive">
        <table class="table table-hover table-bordered align-middle w-100">
            <thead class="table-dark">
            <tr>';
    foreach ($header as $value) {
        echo "<th>$value</th>";
    }
    echo "</tr></thead><tbody>";

    foreach ($tableData as $row) {
        echo "<tr>";
        foreach ($row as  $field) {
            echo "<td>{$field}</td>";
        }
        echo "</tr>";
    }

    echo "</tbody></table></div> </div> </body>";

}

?>