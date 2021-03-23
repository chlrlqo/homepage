<!DOCTYPE html>


<html>
    <head>
    <body>
        <?php 
        include 'navi.php';

        $userID = $_POST["userID"];
        $userName = $_POST["name"];
        $userPassword = $_POST["password"];
        $userEmail = $_POST["email"];

        echo "<style=text-align:center;>로그인:</style>", $userID, "<br>";
        echo "이름:", $userName, "<br>";
        echo "비밀번호:", $userPassword, "<br>";
        echo "이메일:", $userEmail, "<br>";

        ?>
        </body>
    </head>
        <style>
        .register{
            top: 40%;
            left: 50%;
            text-align: left;
            position: absolute;
            column-width: auto;
            vertical-align: text-bottom;

            display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
        }
        .navi {
            background-color:;
            border="0";
            text-align: center;
            column-width: auto;
            font-size: 15px;
            cursor:pointer;color: darkgoldenrod;
            width: 100%;

        }
        
        .centered-text {
            text-align: center;
            font-size: 40px;
            cursor: pointer;
        }
        b i {
            color: darkgoldenrod;
        }

        .introduction_2 {
            font-size: 15px;
        }
        </style>
</html>

