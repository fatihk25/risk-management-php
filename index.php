<?php include("header.php") ?>
<div class="index">
    <div class="card index-card">
    <h1 class="header">RISK MANAGEMENT</h1>
        <form method="post" action="form.php">
            <div class="form-group">
                <label for="prodCost">Input Demand</label>
                <input type="text" class="form-control" name="demand" placeholder="Input Total Demand">
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
        </form>
        <a href="user-guide.pdf" class="link-primary text-center" style="margin-top: 8px;">Need Help?</a>
    </div>
</div>

<?php include("footer.php") ?>