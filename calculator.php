<?php
if(isset($_POST['calculate']))
{
    $ch=$_POST['operator'];
    $firstNumber=$_POST['firstNumber'];
    $secondNumber=$_POST['secondNumber'];

    switch($ch)
    {
        case '+':
            $res=$firstNumber+$secondNumber;
            break;

        case '-':
            $res=$firstNumber-$secondNumber;
            break;

        case '*':
            $res=$firstNumber*$secondNumber;
            break;

    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<form method="post">

    <div class="mb-3">
        <label class="form-label">First Number</label>
        <input class="form-control" type="number" name="firstNumber" value="<?php  echo $firstNumber;?>" required/>
    </div>

    <div class="mb-3">
        <label class="form-label">Select Operator</label>
        <select name="operator" class="form-select">
            <option>+</option>
            <option>-</option>
            <option>*</option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Second Number</label>
        <input class="form-control" type="number" name="secondNumber" value="<?php  echo $secondNumber;?>" required/>
    </div>


    <div class="mb-3">
        <label class="form-label">Result</label>
        <input type="number" readonly="readonly" disabled="disabled" class="form-control" value="<?php  echo $res;?>"/>
    </div>

    <button type="submit" class="btn btn-primary" name="calculate" value="submit">Submit</button>
</form>
</body>
</html>