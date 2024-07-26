<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Swiper demo</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
    />
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <!-- Demo styles -->
    <style>
      * {
        border: 0;
        margin: 0;
        box-sizing: border-box;
      }
      html,
      body {
        /* position: relative; */
        height: 100vh;
        width: 100vw;
        justify-content: center;
      }

      body {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
        margin: 0;
        padding: 0;
      }

      .swiper {
        width: 100%;
        height: 100%;
        border-radius: 10px;
      }

      .swiper-wrapper {
        width: 80vw;
        border-radius: 10px;
      }
      .slider_container {
        width: 100%;
        height: 80%;
        background: rgb(148, 148, 238);
        padding: 5rem;
      }
      .slider_container_wrapper {
        padding: 0rem 5rem;
      }

      .slider_container .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #bbb6f2;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 682px !important;
        height: 80%;
        border-radius: 10px;
      }

      .slider_container .swiper-slide img {
        display: block;
        width: 500px;
        height: 100%;
        object-fit: cover;
      }

      .slider_container .swiper-slide {
        width: 1000px;
      }

      .single_card {
        width: 100;
        height: 100%;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 1rem;
      }
      .single_card .profile img {
        width: 200px;
        height: 200px;
        border-radius: 10px;
        object-fit: fill;
        overflow: hidden;
      }

      .single_card p {
        color: white;
        font-family: "Roboto Slab", serif;
        text-align: center;
      }
      .user_name p {
        font-weight: bold;
      }
      .user_post p {
        font-size: 12px;
      }
      .single_card .user_speech p {
        font-size: 14px;
        padding-left: 2rem;
      }

      .swiper-button-next,
      .swiper-button-prev {
        bottom: 30px;
        background-color: rgb(4, 4, 101);
        padding: 0.5rem;
        size: 12px;
        border-radius: 50%;
        color: #675aff;
        top: var(--swiper-navigation-top-offset, 90%);
      }
      :root {
        --swiper-navigation-size: 21px;
      }

      button{
        background-color: #f47cd0;
        border: none;
        position: absolute;
        transform: translate(-50%, -50%);
        left: 50%;
        top: 70%;
        font-size: 30px;
        font-weight: bold;
      }
      .write{
        background: none;
        border: 2px solid #000;
        text-transform: uppercase;
        padding: 12px 20px;
        min-width: 200px;
        


      }
  /*    .write:hover{
  color: #fff;

}

.write::before{
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: #000;
  z-index: -1;
  

}  */

.write a{
  text-decoration: none;
}





      /* .swiper-slide:nth-child(2n) {
        width: 20%;
      } */
    </style>
  </head>

  <body>



    <!-- Swiper -->
    <div class="slider_container">
      <div class="slider_container_wrapper">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="single_card">
                <div class="profile">
                  <img
                    src="assets/rectangle-1-bg-ot1.png"
                    alt="cute girl"
                  />
                  <div class="user_name"><p>Nurul Islam</p></div>
                  <div class="user_post"><p>Businesman</p></div>
                </div>
                <div class="user_speech">
                  <p>
                    I was struggling with my child until i found this website. It helped me a lot go through my difficulties handling two autistic child in a family. I am glad i found this. I would recommend all. Hope they go a long way serving like this and people like me will be beneficial very much.
                  </p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="single_card">
                <div class="profile">
                  <img
                    src="assets/rectangle-1-bg-X2d.png"
                    alt="cute girl"
                  />
                  <div class="user_name"><p>Shaila Afroze</p></div>
                  <div class="user_post"><p>Special educator</p></div>
                </div>
                <div class="user_speech">
                  <p>
                    From a special educator&#39;s viewpoint, this website is a goldmine. It brilliantly compiles various teaching methods and tools that are adaptable to the diverse needs of autistic learners.</p>

                  </p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="single_card">
                <div class="profile">
                  <img
                    src="assets/rectangle-1-bg-cGu.png"
                    alt="cute girl"
                  />
                  <div class="user_name"><p>Tanzil Hasan</p></div>
                  <div class="user_post"><p>Child Psychologist</p></div>
                </div>
                <div class="user_speech">
                  <p>
                    As a child psychologist specializing in autism, I find &#39;HomeHarmonyAutism&#39; to be an extraordinary resource. The site expertly blends educational strategies with psychological insights, offering parents comprehensive, evidence approaches to homeschooling their children.</p>
      
                  </p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="single_card">
                <div class="profile">
                  <img
                    src="assets/rectangle-1-bg-hTb.png"
                    alt="cute girl"
                  />
                  <div class="user_name"><p>Dr. Reba Khan</p></div>
                  <div class="user_post"><p>Doctor</p></div>
                </div>
                <div class="user_speech">
                  <p>
                    It empowers parents with knowledge and practical tools, fostering a positive and effective homeschooling environment. The site&#39;s holistic approach, addressing both educational and emotional aspects, aligns perfectly with the supportive and nurturing strategies.</p>
           
                  </p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="single_card">
                <div class="profile">
                  <img
                    src="assets/rectangle-1-bg-9nD.png"
                    alt="cute girl"
                  />
                  <div class="user_name"><p>Faria Nanjeba</p></div>
                  <div class="user_post"><p>Autism Therapist</p></div>
                </div>
                <div class="user_speech">
                  <p>
                    In my role as an autism therapist, I appreciate how this website addresses the multifaceted challenges of homeschooling autistic children.The site&#39;s focus on empowering parents with knowledge and skills is exemplary.</p>
          
                  </p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="single_card">
                <div class="profile">
                  <img
                    src="assets/rectangle-1-bg-CA9.png"
                    alt="cute girl"
                  />
                  <div class="user_name"><p>Alvi Mojumdar</p></div>
                  <div class="user_post"><p>Businessman</p></div>
                </div>
                <div class="user_speech">
                  <p>
                    I faced challenges in caring for my two autistic children until I discovered this website. It provided valuable assistance in navigating the complexities of raising multiple autistic children within a family. </p>
         
                  </p>
                </div>
              </div>
            </div>
            
            <div class="swiper-slide">
              <div class="single_card">
                <div class="profile">
                  <img
                    src="assets/pexels-cottonbro-studio-4100672.jpg"
                    alt=""
                  />
                  <div class="user_name"><p>Oli Ahmed</p></div>
                  <div class="user_post"><p>App Developer</p></div>
                </div>
                <div class="user_speech">
                  <p>
                    I recently had the opportunity to explore [HomeHarmony Autism], and I must say, it left a lasting impression. The user interface is intuitively designed, providing a seamless and enjoyable navigation experience. The aesthetic appeal of the website is striking, with a clean layout and visually pleasing graphics that enhance overall user engagement.
                  </p>
                </div>
              </div>
            </div>
            
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </div>
    
    
    
    


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: "auto",
        spaceBetween: 30,
        // freeMode: true,
        loop: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
  </body>
</html>
