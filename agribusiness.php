<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RUDI</title>
    <link rel="icon" type="image" href="./assets/img/rudi logo design 1.png">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">  
    
    <style>
        .intro-container{
            position: relative;
            display: flex;
            height: 76vh;
            justify-content: center;
            /* align-items: center; */
            gap: 4rem;
        }

        .intro-image{
            width: 30%;
            height: 400px;
            overflow: hidden;
            margin-top: 2rem;
        }

        .intro-image img{
            width: 100%;
            height: auto;
        }

        .intro-text{
            width: 40%;
            margin-top: 5rem;
            text-align: justify;
        }

        .intro-text h1{
            font-size: 3rem;
        }

        .intro-text p{
            margin-top: 2rem;
            font-size: 1.2rem;
        }

        .news-container{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .news-container .news-video{
            height: 80%;
            width: auto;
        }

        .news-container .news-video video{
            height: 100%;
            width: auto;
        }

        
    </style>
</head>
<?php include './include/header.php'?>
<section class="intro-container">
    <div class="intro-image">
        <img src="../rudi-html/assets/img/agri1.jpg" alt="">
    </div>

    <div class="intro-text">
        <h1>Agribusiness</h1>
        <p>Agribusiness refers to the industry involved in the production,
             processing, and distribution of agricultural products. It encompasses
              all activities related to farming, including crop cultivation,
               livestock breeding, agrochemicals, farm machinery, food processing,
                marketing, and retail sales. Agribusiness integrates traditional
                 agriculture with modern technology, finance, and supply chain management
                  to improve efficiency and profitability. It includes small family farms,
                   large commercial farms, and multinational corporations involved in agriculture-related enterprises.
        </p>
    </div>
</section>

<section class="news-container">
    <div class="news-video">
        <video autoplay loop muted controls src="../rudi-html/assets/vid/Youth in agribusiness.mp4"></video>
    </div>
</section>

<section class="info">
  <h1>Our Stories</h1>

  <div class="info-cards">
    
  </div>
</section>

<?php include './include/footer.php'?>