<?php 
    $errorMess = "";
    $res = "";
    
    if(!empty($_GET)) {
        $n1 = isset($_GET["num1"]) ? trim($_GET["num1"]) : "";
        $n2 = isset($_GET["num2"]) ? trim($_GET["num2"]) : "";
        $op = isset($_GET["op"]) ? ($_GET["op"]) : "";
        if($n1 === "" || $n2 === "") {
            $errorMess = "Please enter full information";
        } else {
            $num1 = floatval($n1);
            $num2 = floatval($n2);
            switch ($op) {
                case '+':
                    $res = $num1 + $num2;
                    break;
                case '-':
                    $res = $num1 - $num2;
                    break;
                case '*':
                    $res = $num1 * $num2;
                    break;
                case '/':
                    if($num2 == 0) {
                        $errorMess = 'Can not divided by zero';
                        break;
                    }
                    $res = $num1 / $num2;
                    break;
            }
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>PHP Exercises</title>
</head>
<body>
    <div class="container">

        <div class="row">
            <div class="col-md-6 my-5 mx-auto border rounded px-3 py-3">
                <h4 class="text-center">Tính toán cơ bản</h4>
                <form>
                    <div class="form-group">
                        <label for="num1">Số hạng 1</label>
                        <input type="text" class="form-control" id="num1" name="num1" value="<?php echo isset($_GET["num1"]) ? $_GET["num1"] : '' ; ?>">
                    </div>
                    <div class="form-group">
                        <label for="num2">Số hạng 2</label>
                        <input type="text" class="form-control" id="num2" name="num2" value="<?php echo isset($_GET["num2"]) ? $_GET["num2"] : '' ; ?>">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input id="add" type="radio" class="custom-control-input" name="op" value='+' checked>
                            <label for="add" class="custom-control-label">Cộng</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input id="subtract" type="radio" class="custom-control-input" name="op" value='-'>
                            <label for="subtract" class="custom-control-label">Trừ</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input id="multiply" type="radio" class="custom-control-input" name="op" value='*'>
                            <label for="multiply" class="custom-control-label">Nhân</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input id="divide" type="radio" class="custom-control-input" name="op" value='/'>
                            <label for="divide" class="custom-control-label">Chia</label>
                        </div>
                        <?php if($errorMess !== ""): ?>
                            <div class="alert alert-danger" style="margin-top:5px">
                                <?php echo $errorMess; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <button class="btn btn-success">Xem kết quả</button>
                </form>
            </div>
        </div>
        <?php if ($res !== "" && $errorMess === ""): ?>
            <div class="row">
                <div class="col-md-6 mx-auto px-3 py-3 text-center">
                    <div class="alert alert-success">
                        <?php echo "$num1 $op $num2 = $res"; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>