<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Колю ебут в Жопу</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body bakcgraundcolor="hameleon" class="border">

   <h1 class="text" style="font-family: arial;">Коля лох</h1>
   <h1 class="textcenter">Стишок любимому</h1>
        <h2 class="stixb">
            <div class="kolya">
            <img src="./kolya.png" width="145" height="230">
            </div>
                <div class="textstix"><p>Давид любит Николая</p>
                <p>Он так ему и говорит</p>
                <p>Ты с*ка грязный извращенец</p>
                <p>Я люблю тебя прости</p></div>
        </h2>

   <audio controls src="./Music.mp3"></audio>
   <h3>CS 1.6</h3>
   <img  class="contentb , image"  src="./heart.png">

   <br><br>


   <audio controls src="./Kayf.mp3"></audio>
   <h3>Колина любовь</h3>
   <img  class="contentb , image" src="./heart.png">

   <br><br>
   <iframe width="1088" height="612" src="https://www.youtube.com/embed/VDcErD5ghPo" title="Песня про Колю" frameborder="0"
   allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

   <style>
       div {
            margin-bottom: 30px;
       }

       .correct{
            border: 1px solid green;
       }
       .incorrect{
            border: 1px solid red;
       }
    </style>
   <div id="test" class="textcenter">
        <div><h1>Тест на знания про Колю</h1></div>
            <div>
                <p>Какой любимый цвет Николая ?</p>
                <input data-right="Чёрный">
            </div>

            <div>
                <p>Какая люимая марка авто Николая ?</p>
                <input data-right="Мустанг">
            </div>

            <div>
                <p>Какой любимый вид мальчиков Николая ?</p>
                <input data-right="Красивые">
            </div>

            <div>
                <p>Сколько сантиметров член у Николая в попе ?</p>
                <input data-right="20">
            </div>
            <button id="button">Проверить</button>
        </div>
        <script>
            let button = document.querySelector('#button');

            button.addEventListener('click' , function() {
                    let inputs = document.querySelectorAll('#test input');

                    inputs.forEach(input => {
                        if (input.value == input.dataset.right) {
                            input.classList.add('correct');
                        } else {
                            input.classList.add('incorrect');
                        }
                    });
            });
            </script>

   <h1 class="love" style="font-family: arial;">Коля лох</h1>
</body>
</html>
