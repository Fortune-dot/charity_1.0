

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
  </head>
  <!-- CSS only -->
  <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="style.css" />
  <style type="text/css">
    svg{
      transform: scale(1.2);
      font-weight: bold;
    }
    body{
      background-color: #c486eb!important;
    }
    .container{
      max-width: 534px!important;
    }

  </style>

  <body>
    <div class="container">
      <br />
      <!--NAVBAR-->
      <div class="nav">
        <div class="section1">
          

          <!--share svg-->
          <span data-bs-toggle="modal" data-bs-target="#myModel">
           <svg

            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            fill="currentColor"
            class="bi bi-share"
            viewBox="0 0 16 16"
            style="cursor: pointer;"
           >
            <path
              d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"
            />

          </svg>
          </span>

          <!--share svg-->
<!----------------------------Share Modal----------------------------------------->
      <div class="modal fade" id="myModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <style type="text/css">
            #shareBtn {
                letter-spacing: 2px;
                font-weight: 600;
                box-shadow: none;
                background-color: #eee;
                color: #7d2ae8;
                border: none
            }

            .modal {
                top: 20%
            }

            .btn-close {
                box-shadow: none;
                border: none;
                outline: none
            }

            .modal-body .icons {
                margin: 15px 0px 20px 0px
            }

            .modal-body .icons a {
                text-decoration: none;
                border: 1px solid transparent;
                width: 40px;
                height: 40px;
                border-radius: 50%;
                margin-right: 20px;
                transition: all 0.3s ease-in-out
            }

            .modal-body .icons a:nth-child(1) {
                color: #1877F2;
                border-color: #B7D4FB
            }

            .modal-body .icons a:nth-child(1):hover {
                background-color: #1877F2;
                color: #fff
            }

            .modal-body .icons a:nth-child(2) {
                color: #46C1F6;
                border-color: #b6e7fc
            }

            .modal-body .icons a:nth-child(2):hover {
                background-color: #46C1F6;
                color: #fff
            }

            .modal-body .icons a:nth-child(3) {
                color: #e1306c;
                border-color: #f5bccf
            }

            .modal-body .icons a:nth-child(3):hover {
                background-color: #e1306c;
                color: #fff
            }

            .modal-body .icons a:nth-child(4) {
                color: #25d366;
                border-color: #bef4d2
            }

            .modal-body .icons a:nth-child(4):hover {
                background-color: #25d366;
                color: #fff
            }

            .modal-body .icons a:nth-child(5) {
                color: #0088cc;
                border-color: #b3e6ff
            }

            .modal-body .icons a:nth-child(5):hover {
                background-color: #0088cc;
                color: #fff
            }

            .modal-body .icons a:hover {
                border-color: transparent
            }

            .modal-body .icons a span {
                transition: all 0.09s ease-in-out
            }

            .modal-body .icons a:hover span {
                transform: scaleX(1.1)
            }

            .modal-body .field {
                margin: 15px 0px -5px 0px;
                height: 45px;
                border: 1px solid #dfdfdf;
                border-radius: 5px;
                padding: 0 5px
            }

            .modal-body .field.active {
                border-color: #7d2ae8
            }

            .field span {
                width: 50px;
                font-size: 1.1rem
            }

            .field.active span {
                color: #7d2ae8
            }

            .field input {
                border: none;
                outline: none;
                font-size: 0.89rem;
                width: 100%;
                height: 100%
            }

            .field button {
                padding: 5px 16px;
                color: #fff;
                background: #7d2ae8;
                border: 2px solid transparent;
                border-radius: 5px;
                font-weight: 500
            }

            @media (max-width: 330px) {
                .modal-body .icons a {
                    margin-right: 15px;
                    width: 35px;
                    height: 35px
                }
            }
        </style>
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <p>Share this link via</p>
                <div class="d-flex align-items-center icons"> <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A//royal-patches.herokuapp.com/home.php" class="fs-5 d-flex align-items-center justify-content-center"> <span class="fab fa-facebook-f"></span> </a> <a href="https://twitter.com/intent/tweet?text=https%3A//royal-patches.herokuapp.com/home.php" class="fs-5 d-flex align-items-center justify-content-center"> <span class="fab fa-twitter"></span> </a> <a href="#" class="fs-5 d-flex align-items-center justify-content-center"> <span class="fab fa-instagram"></span> </a> <a href="#" class="fs-5 d-flex align-items-center justify-content-center"> <span class="fab fa-whatsapp"></span> </a> <a href="#" class="fs-5 d-flex align-items-center justify-content-center"> <span class="fab fa-telegram-plane"></span> </a> </div>
                <p>Or copy link</p>
                <div class="field d-flex align-items-center justify-content-between"> <span class="fas fa-link text-center"></span> <input type="text" value="royalpatches.com"> <button>Copy</button> </div>
            </div>
          </div>
        </div>
        <script type="text/javascript">
          document.addEventListener('DOMContentLoaded',function(e){
          let field = document.querySelector('.field');
          let input = document.querySelector('input');
          let copyBtn = document.querySelector('.field button');

          copyBtn.onclick = () =>{
          input.select();
          if(document.execCommand("copy")){
          field.classList.add('active');
          copyBtn.innerText = 'Copied';
          setTimeout(()=>{
          field.classList.remove('active');
          copyBtn.innerText = 'Copy';
          },3500)
          }
          }
          })
        </script>
      </div>
<!------------------------------#share modal------------------------------------------->

        </div>
        <div class="holder2">
          <!--HAMBURGER SVG-->
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="20"
            height="20"
            fill="currentColor"
            class="bi bi-list"
            viewBox="0 0 16 16"
            data-bs-toggle="modal"
            data-bs-target="#exampleModal"
            style="cursor: pointer;">
            <path
              fill-rule="evenodd"
              d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"
            />
          </svg>
          <!--HAMBURGER SVG-->
        </div>
      </div>
      <!--NAVBAR-->

      <!-- Modal -->
      <div
        class="modal fade"
        id="exampleModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
        max-width="327px"
      >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"></h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <ul>
                <center>
                  <a
                    href="./index.php"
                    style="text-decoration: underline !important"
                  >
                    <li class="list-group-item">Home</li>
                  </a>
                </center>
                <center>
                  <a
                    href="./programs.html"
                    style="text-decoration: none !important"
                  >
                    <li class="list-group-item">Programs and Campaigns</li>
                  </a>
                </center>
                <center>
                  <a
                    href="./events.html"
                    style="text-decoration: none !important"
                  >
                    <li class="list-group-item">Events</li>
                  </a>
                </center>
                <center>
                  <a
                    href="./support.html"
                    style="text-decoration: none !important"
                  >
                    <li class="list-group-item">Support Us</li>
                  </a>
                </center>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!--LOGO SECTION-->
      <center>
        <img
          src="./images/logooo.png"
          alt=""
          height="122px"
          width="105px"
          class="logo-image"
        data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="cursor: pointer;" />
      </center>
      <center>
        <p class="tagline">????royalpatches</p>
      </center>
      <!--LOGO SECTION-->




<!-- Modal -->

<div class="modal fade "  id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
     
          <br>
         
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
               <center><h5 class="text-align:center!important;">????</h5></center>
       <center>
        <br>
           <center>        <p >@royalpatches</p>
        </center>
        <br>
       

         <img src="./images/code.png" height="150px" width="150px">
       </center>
       <br>
       <br>
      </div>
      
    </div>
  </div>
</div>

      <!--articles-->
      <div class="landing">
        <div class="cocoon">
          <p>
            Royal Patches is a group creating awareness
            on Vitiligo through the Entertainment Industry,
            Art,Music, Modelling,Acting,Dancing and Events in General!
          </p>
          <br />
          <p >
            We integrate Vitiligo culture into the community in order to enhance diversity and inclusion.
          </p>
        </div>
      </div>
      <!--articles-->

      <!--ICONS NAV-->
      <div class="outerdiv">
        <div class="innerdiv">
          <a href="https://youtube.com/channel/UCmdpfFa7Oy7yWUu4kw62TTg" target="_blank">
          <button class="youtube-button">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="19"
              height="13"
              fill="currentColor"
              class="bi bi-youtube"
              viewBox="0 0 16 16"
            >
              <path
                d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"
              />
            </svg>
            Youtube
          </button>
          </a>

          
<a href="https://www.facebook.com/Royalpatchesfoundation/" target="_blank" style="text-decoration:none; color:black; cursor: pointer;">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            fill="currentColor"
            class="bi bi-facebook"
            viewBox="0 0 16 16"
          >
            <path
              d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"
            />
          </svg>
          </a>
<a href="https://vm.tiktok.com/ZMLaMj6aS/" target="_blank" style="text-decoration:none; color:black; cursor:pointer;">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            fill="currentColor"
            class="bi bi-tiktok"
            viewBox="0 0 16 16"
          >
            <path
              d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"
            />
          </svg>

          </a>  
<a href="./home.php">
          <button class="screen-button">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-pc-display-horizontal"
              viewBox="0 0 16 16"
            >
              <path
                d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0h-13Zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5ZM12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0ZM1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1ZM1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25Z"
              />
            </svg>
            Our website
          </button></a>
<a href="mailto:royalpatches254@gmail.com?subject=Contact Royalpatches" target="_blank">
          <button class="mail">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-envelope"
              viewBox="0 0 16 16"
            >
              <path
                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"
              />
            </svg>
            email us
          </button>
          </a>
        </div>
      </div>
      <!--ICONS NAV-->
      <br />
      <br />
      <center>
        <h2 style="font-size: 16px; ">WE ARE WHOM WE ARE IN DIFFERENT SHADES OF US</h2>
      </center>
      <br />
  <a href="./sandbox.php">
          <div class="banner home-banner">
        <!---banner design image-->
      </div>
  </a>

      <br />

      <a href="./support.html" style="text-decoration: none !important">
        <div id="container">
          <div id="background">
            <center>
              <h1 class="emoji">????</h1>
            </center>
          </div>
          <br />
          <br />
          <center>
            <p style="font-size: 16px; color: white; font-weight: bold">
              Support Royalpatches
            </p>
          </center>
        </div>
      </a>

      <br />

      <a href="./events.html" style="text-decoration: none !important">
        <div id="container">
          <div id="background">
            <center>
              <h1 class="emoji">????</h1>
            </center>
          </div>
          <br />
          <br />
          <center>
            <p style="font-size: 16px; color: white; font-weight: bold">
              Events
            </p>
          </center>
        </div>
      </a>

      <br />
      <a href="./programs.html" style="text-decoration: none !important">
        <div id="container">
          <div id="background">
            <center>
              <h1 class="emoji">????</h1>
            </center>
          </div>
          <br />
          <br />
          <center>
            <p style="font-size: 16px; color: white; font-weight: bold">
              Programs and Campaigns
            </p>
          </center>
        </div>
      </a>

      <br />
      <a href="./story.php" style="text-decoration: none !important">
        <div id="container">
          <div id="background">
            <center>
              <h1 class="emoji">????</h1>
            </center>
          </div>
          <br />
          <br />
          <center>
            <p style="font-size: 16px; color: white; font-weight: bold">
              Share your story
            </p>
          </center>
        </div>
      </a>

   
      
      <div class="empty-soul"></div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </body>
</html>
