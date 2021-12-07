<?php include("header.php") ?>
<?php 
$tempValue = '';
$data = array();
$demand = '';
$max = 0;
$result =0;
// $ = array();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = $_POST["value"];
    $prob = $_POST["prob"];
    $demand = $_POST["demand"];
} else {
    echo "Invalid";
}
$extract_value = array_chunk($data, count($prob));

for($i=0; $i<4; $i++) {
    $tempValue = 0;
    for($j=0; $j<4; $j++) {
        $tempValue += (float) $extract_value[$i][$j] * (float) $prob[$j];
    }
    $arrEV[$i] = $tempValue;
}

?>

<div class="card result">
    <?php
        foreach($arrEV as $key => $value) {
        if($max === null || $value > $max) {
            $result = $key;
            $max = $value;
        }
        }
    ?>
    <h1>Conclution </h1>
    <h3>The total of products that should you provide is:</h3>
    <h2><?php echo $demand[$result] ?></h2>
</div>
<?php include("footer.php") ?>