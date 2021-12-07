<?php include("header.php") ?>
<?php
    $demand = $_POST["demand"]
?>
    <div class="card form">
        <form method="post" action="calculation.php">
            <div class="form-group">
                <label for="prodCost">Production Cost</label>
                <input type="text" class="form-control" name="prodCost" placeholder="Enter Your Production Cost">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" name="price" placeholder="Enter Your Price">
            </div>

            <div class="form-group">
            <?php
                for($i=0; $i<$demand; $i++) {
                    ?>
                    <label for="demand">Demand</label>
                    <input type="text" class="form-control" name="demand[]" placeholder="Enter Your Demand">
                    <br>
            <?php
                }
            ?>
             </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
        </form>
    </div>

    <?php include("footer.php") ?>