<!DOCTYPE html>


<html>
    <head>
    <?php 
        include 'navi.php'; ?>

            
            <br><br><br>

            <form class="login" method="POST">
                <label class="label">ID</label>
                <input name="USERID" maxlength="20" type="text">
                <br>
                <label class="label">PW</label>
                <input name="PASSWORD" maxlength="20" type="PASSWORD"><br>
                <table class="navi">
                <th onclick="location.href='/register.php'">회원가입할래요?</th>
                </table>
            </form>

            <style>
                .centered-text {
                    text-align: center;
                    font-size: 40px;
                    cursor: pointer;
                }
        
                b i {
                    color: darkgoldenrod;
                }

                .login{
                    text-align: center;
                    margin: 100px auto;
                    padding: 15px;
                    display: flex;
                        justify-content: center;
                        align-items: center;
                        flex-direction:column;
                
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
                input {
                    padding: 5px;
                }
                </style>
</html>