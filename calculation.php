<?php include("header.php") ?>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $prodCost = (float) $_POST["prodCost"];
    $price = (float) $_POST["price"];
    $demand = $_POST["demand"];
} else {
    echo "Invalid";
}
    ?>
    <div class="card pay-off">
        <h1 class="text-center">Pay-Off</h1>
        <div class="container">
        <table class="table table-striped table-dark">
            <thead>
            <tr>
                <?php 
                    echo "<th> Data </th>";
                    for($i=0; $i<count($demand); $i++) {
                    echo "<th>" . $demand[$i] . "</th>";
                    }
                ?>
            </tr>
            </thead>
            <tbody>
                <form method="POST" action="result.php">
            <tr>
                <?php
                for($i=0; $i<count($demand); $i++) {
                    echo "<tr>";
                    echo "<td>" . $demand[$i] . "</td>";
                    for($j=0; $j<count($demand); $j++) {
                    ?>
                    <?php
                        if($i == $j) {
                            ?>
                            <td><input type="number" class="form-control" name="value[<?php $i?>] [<?php $j?>]" value="<?php echo 
                            abs($demand[$i] * $price - $demand[$j] * $prodCost)?>"></td>
                        </td>
                            <?php
                        } else {
                            ?>
                            <td><input type="number" class="form-control" name="value[<?php $i?>] [<?php $j?>]" value="value[<?php $i?>] [<?php $j?>]"></td>
                            <?php
                        }
                    ?>
                    <?php
                    }
                    echo "</tr>";
                }              
                ?>
            </tr>
            <tr>
                <?php
                for($i=0; $i<1; $i++) {
                    echo "<tr>";
                    echo "<td>Prob</td>";
                    for($j=0; $j<count($demand); $j++) {
                    ?>
                    <td><input type="text" class="form-control" name="prob[<?php $j?>]"></td>
                    <?php
                    }
                    echo "</tr>";
                }                     
                ?>
            </tr>
            <tr>
                <?php
                for($i=0; $i<1; $i++) {
                    echo "<tr>";
                    echo "<td>Demand</td>";
                    for($j=0; $j<count($demand); $j++) {
                    ?>
                        <td><input type="text" class="form-control" name="demand[<?php $j?>]" value="<?php echo $demand[$j]?>"></td>
                    <?php
                    }
                    echo "</tr>";
                }                     
                ?>
            </tr>
            </tbody>
        </table>
        <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
        </form>
        </div>
    </div>
<?php include("footer.php") ?>