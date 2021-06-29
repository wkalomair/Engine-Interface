<?php include 'config.php' ?>
<?php
	$engine1 =  0;
    $engine2 =  0;
    $engine3 =  0;
    $engine4 =  0;
    $engine5 =  0;
    $engine6 =  0; 
?> 
<?php
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['run'])) {
$sql = "SELECT engine1, engine2, engine3, engine4, engine5, engine6 FROM motor";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $engine1 =  $row["engine1"];
    $engine2 =  $row["engine2"];
    $engine3 =  $row["engine3"];
    $engine4 =  $row["engine4"];
    $engine5 =  $row["engine5"];
    $engine6 =  $row["engine6"];
  }
}
}

?>

<?php 
  if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['update'])) {

      $engine1 = $_POST['engine1'];
      $engine2 = $_POST['engine2'];
      $engine3 = $_POST['engine3'];
      $engine4 = $_POST['engine4'];
      $engine5 = $_POST['engine5'];
      $engine6 = $_POST['engine6'];

      $sql = "UPDATE motor SET engine1='$engine1', engine2='$engine2',  engine3='$engine3',  engine4='$engine4',  engine5='$engine5',  engine6='$engine6' WHERE id=1";

      if ($conn->query($sql) === TRUE) {
        //echo "Record updated successfully";
      } else {
        echo "Error updating record: " . $conn->error;
      }

      $conn->close();

  }
 ?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="copyright" content="Mohamed.B">
<link rel="shortcut icon" href=" هنا ايقونه الموقع ">

<!-- Start CSS -->
<link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css"
integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If"
crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<!-- End CSS -->

<!-- Start Font -->
<link href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" rel="stylesheet">
<!-- End Font -->

<title>oiRanily</title>
</head>
<body>

  <div class="TOP">
    <div class="jumbotron pt-2 pb-4 container text-justify text-dark text-center">

      <h1 class="pt-3">المحركات</h1>
      <form accept="index.php" method="POST">
      <!-- المحرك الأول -->
      <div class="range-slider">
        <h5 class="pt-3 pr-2">محرك 1</h5>
        <input class="range-slider__range" type="range" min="0" name="engine1" value="<?php if($engine1 == null) { echo "0";} else echo $engine1; ?>" max="180">
        <span class="SL1 pl-1 range-slider__value"><?php if($engine1 == null) { echo "0";} else echo $engine1; ?></span> %
      </div>
      <!-- المحرك الثاني-->
      <div class="range-slider">
        <h5 class="pt-3 pr-2">محرك 2</h5>
        <input class="range-slider__range" type="range" min="0" name="engine2" value="<?php if($engine2 == null) { echo "0";} else echo $engine2; ?>" max="180">
        <span class="SL1 pl-1 range-slider__value"><?php if($engine2 == null) { echo "0";} else echo $engine2; ?></span> %
      </div>
      <!-- المحرك الثالث-->
      <div class="range-slider">
        <h5 class="pt-3 pr-2">محرك 3</h5>
        <input class="range-slider__range" type="range" min="0" name="engine3" value="<?php if($engine3 == null) { echo "0";} else echo $engine3; ?>" max="180">
        <span class="SL1 pl-1 range-slider__value"><?php if($engine3 == null) { echo "0";} else echo $engine3; ?></span> %
      </div>
      <!-- المحرك الرابع-->
      <div class="range-slider">
        <h5 class="pt-3 pr-2">محرك 4</h5>
        <input class="range-slider__range" type="range" min="0" name="engine4" value="<?php if($engine4 == null) { echo "0";} else echo $engine4; ?>" max="180">
        <span class="SL1 pl-1 range-slider__value"><?php if($engine4 == null) { echo "0";} else echo $engine4; ?></span> %
      </div>
      <!-- المحرك الخامس-->
      <div class="range-slider">
        <h5 class="pt-3 pr-2">محرك 5</h5>
        <input class="range-slider__range" type="range" min="0" name="engine5" value="<?php if($engine5 == null) { echo "0";} else echo $engine5; ?>" max="180">
        <span class="SL1 pl-1 range-slider__value"><?php if($engine5 == null) { echo "0";} else echo $engine5; ?></span> %
      </div>
      <!-- المحرك السادس-->
      <div class="range-slider">
        <h5 class="pt-3 pr-2">محرك 6</h5>
        <input class="range-slider__range" type="range" min="0" name="engine6" value="<?php if($engine6 == null) { echo "0";} else echo $engine6; ?>" max="180">
        <span class="SL1 pl-1 range-slider__value"><?php if($engine6 == null) { echo "0";} else echo $engine6; ?></span> %
      </div>
      <div class="pt-4">
        <button type="submit" class="btn zr-save btn-dark mr-2" name="update">حفظ</button>
        <button type="submit" class="btn zr-start btn-dark ml-2" name="run">تشغيل</button>
      </div>
      </form>
    </div>
  </div>

<!-- Start jquery , bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.js"
 integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
 crossorigin="anonymous">
</script>
<script src="https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js"
 integrity="sha384-a9xOd0rz8w0J8zqj1qJic7GPFfyMfoiuDjC9rqXlVOcGO/dmRqzMn34gZYDTel8k"
 crossorigin="anonymous">
</script>
<script>
const settings={}
const sliders = document.querySelectorAll('.range-slider');
Array.prototype.forEach.call(sliders,(slider)=>{
slider.querySelector('input').addEventListener('input', (event)=>{
    slider.querySelector('span').innerHTML = event.target.value;
    applyFill(event.target);
  });
  applyFill(slider.querySelector('input'));
});
function applyFill(slider) {
  const percentage = 100*(slider.value-slider.min)/(slider.max-slider.min);
  const bg = `linear-gradient(90deg, ${settings.fill} ${percentage}%, ${settings.background} ${percentage+0.1}%)`;
  slider.style.background = bg;
}
</script>
<!-- End jquery , bootstrap -->
</body>
</html>


