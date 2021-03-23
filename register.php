<!DOCTYPE html>


<html>
    <head>
    <?php 
        include 'navi.php'; ?>
        <br><br><br><br><br><br><br><br>
            <form  class= "register" method="POST" action="recive.php">
                <label>아이디</label><input type="text" name="userID"><br>
                <label>이름</label><input type="text" name="name"><br>
                <label>비빌번호</label><input type="password" name="password"><br>
                <label>이메일</label><input type="email" name="email"><br>
                <br><br>
                <input type="submit" value="제출하실꺼에요?">
            </form>
        </body>
    </head>
        <style>
        .register{
            text-align: center;
            column-width: auto;
            vertical-align: middle;

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
