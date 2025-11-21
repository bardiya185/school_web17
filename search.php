<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <title>Document</title>
</head>
<style>
    @font-face {
        font-family: iran;
        src: url('font/IRANYekanXVF.woff');
    }

    * {
        font-family: iran;
    }

    #box_product1 {
        width: 80%;
        max-width:600px;
        height: auto;
        background-color: #202741;
        gap: 10px;
        margin-top: 10px;
        padding: 10px;
        border-radius: 10px;
        opacity: 100%;
        display: flex;
        align-items: start;
        align-self: start;
        align-content: center;
        justify-self: center;
        justify-content: center;
        justify-items: center;
        flex-direction: row;
        direction: ltr;
        transition: 0.5s 0s;
    }

    #product_img1 {
        width: 100px;
        height: 100px;
        display: flex;
        align-self: center;
        align-items: center;
        align-content: center;
        flex-direction: column;
        margin-left: 10px;

    }

    #product_img1 img {
        width: 100px;
        height: 100px;
        display: flex;
        align-self: center;
        align-items: center;
        align-content: center;
        flex-direction: column;
        margin-left: 0px;

    }

    #box_text_btn1 {
        width: 200%;
        height: auto;
        display: flex;
        align-self: center;
        align-content: center;
        flex-direction: column;
        gap: 0px;
    }

    #box_text_btn1 h1 {
        width: 100%;
        display: flex;
        justify-content: right;
        justify-self: right;
        justify-items: right;
        align-items: start;
        align-content: start;
        flex-direction: row;
        align-self: safe;
        color: #F9F2ED;
        text-align: right;
        font-size: 25px;
        margin-left:-10px;
    }

    #box_text_btn1 button {
        width: auto;
        height: 50px;
        display: flex;
        justify-content: center;
        justify-self: right;
        justify-items: center;
        align-items: end;
        align-self: end;
        align-content: end;
        flex-direction: row;
        border: transparent;
        border-radius: 5px;
        font-size: 18px;
        padding: 10px;
        margin-right:0px;
        background-color: #F87474;
        color: #F9F2ED;
        cursor: pointer;
        font-weight: 600;
    }

    .show_hidden1 {
        width: 100%;
        height: auto;
        opacity: 100%;
    }


    @media screen and (max-width:768px) {


        #box_product1 {
            width: 90%;
            height: auto;
            background-color: #202741;
            gap: 10px;
            margin-top: 10px;
            padding: 10px;
            border-radius: 10px;
            opacity: 100%;
            display: flex;
            align-items: start;
            align-self: start;
            align-content: center;
            justify-self: center;
            justify-content: center;
            justify-items: center;
            flex-direction: row;
            direction: ltr;
            transition: 0.5s 0s;
        }

        #product_img1 {
        width: 100px;
        height: auto;
        display: flex;
        align-self: center;
        align-items: center;
        align-content: center;
        flex-direction: column;
        margin-left: 10px;

    }

    #product_img1 img {
        width: 80px;
        height: 80px;
        display: flex;
        align-self: center;
        align-items: center;
        align-content: center;
        flex-direction: column;
        margin-left: 0px;

    }

    #box_text_btn1 {
        width: 200%;
        height: auto;
        display: flex;
        align-self: center;
        align-content: center;
        flex-direction: column;
        gap: 10px;
    }

        #box_text_btn1 h1 {
            width: 100%;
            display: flex;
            justify-content: right;
            justify-self: right;
            justify-items: right;
            align-items: start;
            align-content: start;
            flex-direction: row;
            align-self: start;
            color: #F9F2ED;
            text-align: right;
            font-size: 20px;
        }

        #box_text_btn1 button {
            width: auto;
            height: 40px;
            display: flex;
            justify-content: center;
            justify-self: right;
            justify-items: center;
            align-items: end;
            align-self: end;
            align-content: end;
            flex-direction: row;
            border: transparent;
            border-radius: 5px;
            font-size: 14px;
            padding: 10px;
            background-color: #F87474;
            color: #F9F2ED;
            cursor: pointer;
            font-weight: 600;
        }



    }
</style>

<body>
    <?php
    $conn = mysqli_connect("localhost","scifre_sciuser","sciweb18","scifre_scidata");
    mysqli_set_charset($conn, "utf8");
    $search_text = '';

    if (isset($_POST['search'])) {
        $search_text = $_POST['search'];

        $sql = "SELECT * FROM product WHERE product_hidden_name LIKE '%$search_text%' LIMIT 5";

        $result = mysqli_query($conn, $sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

                ?>

                <div class="show_hidden1">
                    <div id="box_product1">
                        <div id="product_img1">
                            <img src="<?php echo "Icons/" . $row['product_img']; ?>" alt="error">
                        </div>
                        <div id="box_text_btn1">
                            <h1><?php echo $row['product_name']; ?></h1>
                            <button  class="btn_information" type="button">اطلاعات بیشتر</button>
                        </div>
                    </div>
                </div>

                <?php
            }
        }
    else {
        if ($search_text != "") {
            echo "<h1>چیزی یافت نشد</h1>"; 
        }
    }


} 


?>
    <script src="alert.js"></script>

</body>

</html>