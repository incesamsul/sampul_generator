<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>generate cover</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="cover-wrapper" id="capture">
        <div class="front-cover">
            <div class="cover-effect-right"></div>
            <div class="cover-effect-left"></div>
            <div class="overlay-effect"></div>
            <img src="fc2.jpg" alt="">
        </div>
        <div class="front-cover-inside-left">
            <div class="cover-effect-right"></div>
            <div class="cover-effect-left"></div>
            <div class="barrier"></div>
            <div class="content">
                <h3>Pernikahan</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis dolor voluptatem libero obcaecati maxime odio maiores ab voluptates doloribus laborum minima quibusdam, hic, laboriosam delectus dignissimos molestias tenetur repudiandae veniam?</p><br><br>

                - NAdvi
            </div>
        </div>
        <div class="back-cover-inside-right">
            <div class="cover-effect-right"></div>
            <div class="cover-effect-left"></div>
            <div class="back-cover-wrapper">
                <div class="left"></div>
                <div class="right"></div>
            </div>
        </div>
        <div class="back-cover">
            <div class="cover-effect-right"></div>
            <div class="cover-effect-left"></div>
            <div class="overlay-effect"></div>
            <img src="fc2.jpg" alt="">
        </div>
        <div class="front-cover-inside-right">
            <div class="cover-effect-right"></div>
            <div class="cover-effect-left"></div>
            <div class="overlay-effect"></div>
            <img src="fc2.jpg" alt="">
        </div>
    </div>
    
    <button id="btn_convert">convert</button>
    <img id="theimage9">
    <!-- <img src="book-covers.jpg" alt=""> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js" integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        html2canvas(document.querySelector("#capture")).then(canvas => {
            document.body.appendChild(canvas)
        });

    </script>
</body>
</html>