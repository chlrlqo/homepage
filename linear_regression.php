<!DOCTYPE html>


<html>
    <head>
    <?php 
        include 'navi.php'; ?>
            <br><br><br>
            <div style="width: 100%; height: 100px;">
                <h2 style="text-align: center; font-size: 30px"> 선형회귀(linear Regression)이란?</h2><br><br></div>
            <div style="width: 20%; height: 800px; float:left; background-color:;" >
            <table class="deep_navi">
                <tr><td onclick="location.href='/deep_learning.php'" style="">deep learning이란?</td></tr>
                <tr><td onclick="location.href='/linear_regression.php'" style="">선형 회귀란?</td></tr>
                <tr><td onclick="location.href='/Multilayer_Perceptron.php'" style="">다층 퍼셉트론이란?</td></tr>
            </table><br>
            </div>
            <div style="width: 60%; height: 300px; float:left;">
            <h3 style="text-align: center; font-size: 20px">종속 변수 Y와 한 개 이상의 독립 변수 (또는 설명 변수) X와의 선형 
            상관 관계를 모델링하는 회귀분석 기법입니다. 한 개의 설명 변수에 기반한 경우에는 단순 선형 회귀, 둘 이상의 설명 변수에 기반한 경우에는 
            다중 선형 회귀라고 합니다.</h3> <br><img class="img" src="/images/Normdist_regression.png"> <br> 밑의 내용은 추후에 더 추가할 예정입니다.</div>
            <div style="width: 20%; height: 800px; float: right;"></div>
            <div style="width: 60%; height: 500px; float:right;">
            </div>
            <div style="width: 100%; height: 5px; float: left; background-color: darkgoldenrod;"></div>
            <div style="width: 100%; height: 150px; float: left;">
            <p class="bottom">
                <b>Gi Bae Choi</b><br>
                github 주소: https://github.com/chlrlqo <br>
                Department of Animal Life Science, Kangwon National University (KNU)<br>
                Chuncheon, Republic of Korea.<br>
                Lab of Microbial Genomics and Big Data, College of Animal Life Sciences.<br>
                E-mail : kmkchoco59@gmail.com<br>
            </p>
            </div>
            
        </body>
    </head>
        <style>
        .bottom {
            text-align: center;
        }
        .img {
            text-align: center;
            object-fit: cover;
            width: auto;
            height: auto;
            max-width: 300px;
            max-height: 300px;
            display: block;
            margin: auto;

        }

        .deep_navi {
            background-color:;
            border="0";
            text-align: center;
            column-width: auto;
            font-size: 15px;
            cursor:pointer;
            width: 100%;
    

        }
        </style>
</html>