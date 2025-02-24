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
        .about-us-hero{
            height: 70vh;
            background: url('../rudi-html/assets/img/village1.jpg') no-repeat center center fixed;
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
        }

        .about-us-hero h1{
            text-align: center;
            color: white;
            font-size: 4rem;
            position: absolute;
            top: 40%;
        }

        .about-info{
            display: flex;
            height: 100vh;
            justify-content: space-between;
            /* align-items: center; */
        }

        .about-info .info-text{
            width: 50%;
            margin-left: 5rem;
            margin-top: 3rem;
        }

        .about-info .info-text h2{
            font-size: 2rem;
        }

        .about-info .info-text p{
            font-size: 1.5rem;
            margin-top: 1rem;
            /* letter-spacing: 2px; */
        }

        .about-info .info-image{
            width: 30%;
            height: 400px;
            overflow: hidden;
            margin-right: 5rem;
            margin-top: 3rem;
        }

        .about-info .info-image img{
            height: 100%;
            width: auto;
        }

        .about-info .info-image img:hover{
            transform: scale(1.2);
            transition: ease-in-out all .5s;
        }

        .about-goals{
            display: flex;
            height: 70vh;
            justify-content: center;
            background: url('../rudi-html/assets/img/community6.jpg')no-repeat center center fixed;
            background-size: cover;
            background-position: center;
            align-items: center;
        }

        .about-goals .items{
            display: flex;
            width: 1200px;
            gap: 2rem;
            justify-content: center;
            
        }

        .about-goals .items .vision,.mission,.core-values{
            width: 300px;
            height: 300px;
        }
        .about-goals .items .vision{
            background: lightblue;
        }

        .about-goals .items .mission{
            background: lightcyan;
        }

        .about-goals .items .core-values{
            background: lightsalmon;
        }
        
    </style>
</head>
<?php include './include/header.php'?>
<section class="about-us-hero">
        <h1>About Us</h1>
</section>

<section class="about-info">
    <div class="info-text">
        <h2>Who We Are</h2>
        <p>Lorem ipsum dolor sit amet consectetur
             adipisicing elit. Cum eum assumenda
              quod culpa nostrum dolorum velit quibusdam,
               quaerat cumque. Repudiandae eligendi provident
                porro, perspiciatis adipisci neque ratione ducimus
                 a officiis distinctio vero nostrum quis, voluptate
                  quasi ex sapiente praesentium hic fugit voluptates.
                   Id corporis illo vero iure, commodi suscipit nostrum
                    facere laudantium, ut iste quasi eligendi aspernatur
                     accusamus praesentium quo voluptatem minima nulla.
                      Omnis, doloribus? Incidunt illo odio dolor sed vitae
                       est, quo assumenda amet? Asperiores, possimus magnam
                        minus consequatur vitae deleniti ea corrupti magni
                         neque et maiores dolore culpa voluptatum voluptas
                          quibusdam dicta distinctio perspiciatis unde commodi
                           excepturi assumenda?
        </p>
    </div>

    <div class="info-image" data-aos="fade-left" 
    data-aos-duration="2000">
        <img src="../rudi-html/assets/img/community7.png" alt="">
    </div>
</section>

<section class="about-goals">
    <div class="items">
    <div class="vision" data-aos="fade-up"
    data-aos-duration="1000">
        <h2 style="padding: 1rem;">Vision</h2>
        <p style="padding: 1rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Sed facilis tenetur necessitatibus rem odio, blanditiis
              accusamus dolor quaerat veritatis eos.
        </p>
    </div>

    <div class="mission" data-aos="fade-up"
    data-aos-duration="2000">
        <h2 style="padding: 1rem;">Mission</h2>
        <p style="padding: 1rem;">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
             Libero ad enim autem nihil natus perspiciatis nam pariatur
              error delectus veniam?
        </p>
    </div>

    <div class="core-values" data-aos="fade-up"
    data-aos-duration="3000">
        <h2 style="padding: 1rem;">Core Values</h2>
        <p style="padding: 1rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Quas facilis omnis doloremque culpa quasi natus nobis
              consequuntur voluptatum nam illum!
        </p>
    </div>
    </div>
</section>
    
<?php include './include/footer.php'?>