<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>UDICT</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
            
        .owlSliderDoNotChange{
        display: grid;
        height: 100%;
        place-items: center;
        text-align: center;
        }
        .cardHeight{
            height: 455px;
        }
        .slider{
        max-width: 1100px;
        }
        .slider .card{
        flex: 1;
        margin: 0 10px;
        background: #fff;
        }
        .slider .card .img{
        height: 250px;
        width: 100%;
        }
        .slider .card .img img{
        height: 100%;
        width: 100%;
        object-fit: cover;
        }
        .slider .card .content{
        padding: 10px 20px;
        }
        .card .content .title{
        font-size: 25px;
        font-weight: 600;
        }
        .card .content .sub-title{
        font-size: 20px;
        font-weight: 600;
        color:#428bca;
        line-height: 20px;
        }
        .card .content p{
        margin: 10px 0;
        }
        .card .content .btn{
        display: block;
        text-align: left;
        margin: 10px 0;
        }
        .card .content .btn button{
        background:#428bca;
        color: #fff;
        border: none;
        outline: none;
        font-size: 17px;
        padding: 5px 8px;
        border-radius: 5px;
        cursor: pointer;
        transition: 0.2s;
        }
        .card .content .btn button:hover{
        transform: scale(0.9);
        }
    </style>


</head>

<body >
    <div class="slider owl-carousel owlSliderDoNotChange container">
        <div class="card cardHeight">
            <div class="img">
                <img src="assets/img/news/1.jpg" alt="">
            </div>
            <div class="content">
                <div class="title">
                Red Hat Academy Activities
                </div>
                <!-- <div class="sub-title">
                    Graphic Designer
                </div> -->
                <p>
                An expert talk on “Running Docker on AWS", Resource Person: Mr Ramesh Padmanabhan, Director, Red Hat
                </p>
                <!-- <div class="btn">
                    <button>Read more</button>
                </div> -->
            </div>
        </div>
        <div class="card cardHeight">
            <div class="img">
                <img src="assets/img/news/2.jpg" alt="">
            </div>
            <div class="content">
                <div class="title">
                Alumni Meet
                </div>
                <!-- <div class="sub-title">
                    Web Developer
                </div> -->
                <p>
                Alumni Pre Meet on 16-11-2019 for Alumni Industry Institute Connect 2020

                </p>
                <!-- <div class="btn">
                    <button>Read more</button>
                </div> -->
            </div>
        </div>
        <div class="card cardHeight">
            <div class="img">
                <img src="assets/img/news/3.jpg" alt="">
            </div>
            <div class="content">
                <div class="title">
                PAC Meet

                </div>
                <!-- <div class="sub-title">
                    App Developer
                </div> -->
                <p>
                A Program Advisory Meet to get inputs for MGMU BTech IT curriculum from Industry, Academia and Alumni

                </p>
                <!-- <div class="btn">
                    <button>Read more</button>
                </div> -->
            </div>
        </div>


        <!-- 2nd round -->
        <div class="card cardHeight">
            <div class="img">
                <img src="assets/img/news/4.jpg" alt="">
            </div>
            <div class="content">
                <div class="title">
                    Curriculum Design Meet
                </div>
                <!-- <div class="sub-title">
                    App Developer
                </div> -->
                <p>
                    An Industry Institute Alumni interaction meet on 24-25th January 2020
                </p>
                <!-- <div class="btn">
                    <button>Read more</button>
                </div> -->
            </div>
        </div>
        <div class="card cardHeight">
            <div class="img">
                <img src="assets/img/news/5.jpg" alt="">
            </div>
            <div class="content">
                <div class="title">
                    Blockchain Workshop
                </div>
                <!-- <div class="sub-title">
                    App Developer
                </div> -->
                <p>
                    3 Days Workshop on “Blockchain Fundamentals” Sponsored by TEQIP-IIIDr. BATU Lonere
                </p>
                <!-- <div class="btn">
                    <button>Read more</button>
                </div> -->
            </div>
        </div>
        <div class="card cardHeight">
            <div class="img">
                <img src="assets/img/news/6.jpg" alt="">
            </div>
            <div class="content">
                <div class="title">
                    IT INFORIA 
                </div>
                <!-- <div class="sub-title">
                    App Developer
                </div> -->
                <p>
                    Four days “Logic development and problem solving in C”, workshop, for SYIT students during 14/07/2019 to 17/07/2019.
                </p>
                <!-- <div class="btn">
                    <button>Read more</button>
                </div> -->
            </div>
        </div>

        <!-- 3rd round -->
        <div class="card cardHeight">
            <div class="img">
                <img src="assets/img/news/7.jpg" alt="">
            </div>
            <div class="content">
                <div class="title">
                    Internship Meet
                </div>
                <!-- <div class="sub-title">
                    App Developer
                </div> -->
                <p>
                    A meet to provide an internship to final year students with Emertech Innovations Pvt. Ltd., Mumbai MS India
                </p>
                <!-- <div class="btn">
                    <button>Read more</button>
                </div> -->
            </div>
        </div>

    </div>
    <script>
        $(".slider").owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 2000, //2000ms = 2s;
            autoplayHoverPause: true,
        });
    </script>
</body>

</html>