<!DOCTYPE html>


<html>
    <head>
    <?php 
        include 'navi.php'; ?>
            <br><br><br>
            <div style="width: 100%; height: 100px;">
                <h2 style="text-align: center; font-size: 30px"> Deep learning 이란?</h2><br><br></div>
            <div style="width: 20%; height: 800px; float:left; background-color:;" >
            <table class="deep_navi">
                <tr><td onclick="location.href='/deep_learning.php'" style="">deep learning이란?</td></tr>
                <tr><td onclick="location.href='/linear_regression.php'" style="">선형 회귀란?</td></tr>
                <tr><td onclick="location.href='/Multilayer_Perceptron.php'" style="">다층 퍼셉트론이란?</td></tr>
            </table><br>
            </div>
            <div style="width: 60%; height: 300px; float:left;">
            <h3 style="text-align: center; font-size: 20px">심층 학습(深層學習) 또는 딥 러닝(
                영어: deep structured learning, deep learning 또는 hierarchical learning)은 
                여러 비선형 변환기법의 조합을 통해 높은 수준의 추상화(abstractions, 다량의 데이터나 복잡한 
                자료들 속에서 핵심적인 내용 또는 기능을 요약하는 작업)를 시도하는 기계 학습 알고리즘의 집합으로 
                정의됩니다. <br><br><br><br><br><br><br>밑의 그림은 딥러닝과 머신러닝 그 범주를 밴다이어 그램으로 나타낸 것입니다.</h3></div>
   
            <div style="width: 20%; height: 800px; float: right;"></div>
            <div style="width: 60%; height: 500px; float:right;">
                <h4 class="img"><img class="img" src="/images/deeplearning.png"></h4>
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
            max-width: 600px;
            max-height: 600px;
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
