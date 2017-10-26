<?php
// varriable Input1
$getal1 = 0;
// varriable Input2
$getal2 = 0;

$operator = "";

$result= 0;


if (isset($_GET["Number1"]))
{
	$getal1 = $_GET["Number1"];
}
if (isset($_GET["Number2"]))
{
	$getal2 = $_GET["Number2"];
}
if (isset($_GET["operator"]))
{
	$operator = $_GET["operator"];
}
if ($operator == "add")
{
	$result = $getal1 + $getal2;
}
if ($operator == "subtract")
{
	$result = $getal1 - $getal2;
}
if ($operator == "multiply")
{
	$result = $getal1 * $getal2;
}
if ($operator == "divide")
{

	if ($getal2 != 0 && $getal2 != "")
	{
		$result = $getal1 / $getal2;
	}
	else
	{
		$result = "niet mogelijk";
	}
}
if ($operator == "power")
{
	if ($getal1) {
		$result = pow($getal1, $getal2);
	}

}
if ($operator == "squareroot")
{
	if ($getal1) {
		$result = sqrt($getal1);
	}
}



?>

<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">

      <meta name="description" content="mijn eerste website">

      <link rel="stylesheet" type="text/css" href="style.css.css">

      <title>Mijn eerste pagina met HTML</title>
    </head>
    <body>

      <div class="container">

      
        <div class="top-part">
          <?php echo $result;
           ?>
        </div>

        <div class="bottem-part">




        <form action="" method="GET">
          <ul>



            <li>
              <label>Number1</label>
              <input type="number" name="Number1" value="" placeholder="">
              </li>

              <li>
                <label>operator</label>
              <select name="operator">
                <<option value="add">+</option>
                <<option value="subtract">-</option>
                <<option value="multiply">X</option>
                <<option value="divide">/</option>
                <<option value="squareroot">Extraction of roots</option>
                <<option value="power">Power</option>
              </select>

              </li>
              <li>
                <label>Number2</label>
                <input type="number" name="Number2" value="">

              </li>



            <li>
              <input class="btn-calculate" type="submit" value="calculator" name="submit">
              <input class="btn-reset" type="reset" value="reset">
            </li>
          </div>
				</div>
          </ul>
        </form>
    </body>
</html>
