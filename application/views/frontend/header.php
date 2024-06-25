
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Bootstrap -->

  <!-- Icon -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <!-- Icon -->

  <!-- Java Srcript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Java Srcript -->

  <!-- Title Tab -->
  <title>BubbleWash Laundry</title>
  <!-- Title Tab -->
  <style>
    /* ----------------------------------------------------------- GENERAL ----------------------------------------------------- */
    *{
      font-family: serif;
      margin: 0;
      padding: 0;
    }
    body{
      background-image: url('img/background/bgbody.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }


    /* Navbar */
    .body-navbar{
      background-image: url('img/background/bgnavbar.jpg');
    }
    .brand-toko{
      font-size: 30px;
      margin-left: 25px;
    }
    .brand-toko span{
      font-weight: bold;
      font-size: 35px;
    }
    .nav-btn{
      font-size: 21px;
    }
    .nav-btn:hover{
      border-bottom: 1px solid white;
    }
    .space{
      margin-left: 300px;
    }
    /* Navbar */

    /* Contact */
    .fab-container{
      position: fixed;
      bottom: 30px;
      right: 25px;
      z-index: 999;
      cursor: pointer;
    }
    .fab-icon-holder{
      width: 50px;
      height: 50px;
      border-radius: 100%;
      background: #12389F;
      box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
    }
    .fab-icon-holder:hover{
      opacity: 0.8;
    }
    .fab-icon-holder i {
      justify-content: center;
      align-items: center;
      display: flex;
      margin-top: 20px; 
      height: 100%
      font-style: 150px;
      color: #F2EDDB;
    }
    .fab{
      width: 60px;
      height: 60px;
      background: #12389F;
    }
    .fab-options{
      list-style-type: none;
      margin: 0;
      position: absolute;
      bottom: 70px;
      right: 0;
      opacity: 0;
      transition: all 0.3s ease;
      transform: scale(0);
      transform-origin: 85% bottom; 
    }
    .fab:hover + .fab-options, .fab-options:hover{
      opacity: 1;
      transform: scale(1);
      font-size: 30px;
    }
    .fab-options li{
      display: flex;
      justify-content: flex-end;
      padding: 5px;
    }
    .fab-label{
      padding: 2px 7px;
      align-self: center;
      user-select: none;
      white-space: nowrap;
      border-radius: 5px;
      font-size: 16px;
      background: #F2EDDB;
      color: #12389F;
      box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
      margin-right: 10px;
    }
    /* Contact */

    /* Footer */
    footer{
      padding: 30px 0;
      background-color: #12389F;
      color: black;
      text-align: center;
    }
    a{
      color: inherit;
      text-decoration: none;
    }
    ul li{
      display: inline-block;
      padding: 0px;
    }
    footer{
      position: fixed;
      bottom: 0;
    }
    @media (max-height: 800px)
    {
      footer{
        position: static;
      }
    }
    .footer-distributed{
      background-color: #12389F;
      box-sizing: border-box;
      widows: 100%;
      text-align: left;
      font-family: bold 16px serif;
      padding: 50px 50px 30px 50px;
    }
    .footer-distributed .footer-left, .footer-distributed .footer-center, .footer-distributed .footer-right{
      display: inline-block;
      vertical-align: top;
    }
    .footer-distributed .footer-left{
      width: 30%;
      font-weight: bold;
    }
    .footer-distributed .footer-links{
      color: white;
      margin: 10px 0 7px;
    }
    .footer-distributed .footer-links a{
      display: inline-block;
      line-height: 1.8;
      text-decoration: none;
      color: white;
    }
    .footer-distributed .footer-links a:hover{
      color: white;
    }
    .footer-distributed .footer-company-name{
      color: #7096d1; 
      font-size: 14px;
      font-weight: normal;
      margin-bottom: 17px;
      font-weight: bold;
    }
    .footer-distributed .footer-center{
      margin-left: 50px;
      width: 35%;
    }
    .footer-distributed .footer-center i{
      background-color: transparent;
      border: 1px solid white;
      color: white;
      font-size: 20px;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      text-align: center;
      line-height: 42px;
      margin: 10px 15px;
      vertical-align: middle;
    }
    .footer-distributed .footer-center i .fa-envelope{
      font-size: 17px;
      line-height: 38px;
    }
    .footer-distributed .footer-center p{
      display: inline-block;
      color: white;
      vertical-align: middle;
      margin: 0;
      font-weight: bold;
    }
    .footer-distributed .footer-center p span{
      display: block;
      font-weight: normal;
      font-size: 15px;
      line-height: 2;
      font-weight: bold;
    }
    .footer-distributed .footer-center p a{
      color: white;
      text-decoration: none;
    }
    .footer-distributed .footer-center p a:hover{
      color: white;
    }
    .footer-distributed .footer-right{
      width: 30%;
    }
    .footer-distributed .footer-company-about{
      line-height: 20px;
      color: white;
      font-size: 15px;
      font-weight: normal;
      font-weight: bold;
    }
    .footer-distributed .footer-icons{
      margin-top: 10px;
    }
    .footer-distributed .footer-icons a{
      display: inline-block;
      width: 35px;
      height: 35px;
      cursor: pointer;
      border: 1px solid;
      border-radius: 2px;
      font-size: 23px;
      color: white;
      text-align: center;
      line-height: 35px;
      margin-right: 5px;
    }
    .footer-distributed .footer-icons a:hover{
      background-color: #f7f2eb;
      color: #12389F;
      border: 1px solid #12389F;
    }
    @media(max-width: 880px){
      .footer-distributed .footer-links, .footer-distributed .footer-center, .footer-distributed .footer-right,{
        display: block;
        width: 100%;
        margin-bottom: 40px;
        text-align: center;
      }
      .footer-distributed .footer-center i{
        margin-left: 0;
      }
    }
    /* Footer */
    /* ---------------------------------------------------------- GENERAL END --------------------------------------------------- */



    /* ------------------------------------------------------------- HOME ------------------------------------------------------- */
    /* Banner */
    .banner{
      height: 79vh;
      background-image: url(img/home/banneranimation1.png);
      background-repeat: no-repeat;
      position: relative;
      display: flex;
      margin: 0;
      animation: change 22s infinite ease-in-out;
    }
    @keyframes change{
      0%
      {
        background-image: url(img/home/banneranimation4.png);
      }
      20%
      {
        background-image: url(img/home/banneranimation3.png);
      }
      40%
      {
        background-image: url(img/home/banneranimation1.png);
      }
      60%
      {
        background-image: url(img/home/banneranimation4.png);
      }
      75%
      {
        background-image: url(img/home/banneranimation3.png);
      }
      85%
      {
        background-image: url(img/home/banneranimation1.png);
      }
      100%
      {
        background-image: url(img/home/banneranimation4.png);
      }
    }
    .text-banner-1{
      color: #F2E9C6;
      font-size: 57px;
      margin-top:120px;
      margin-left: 400px;
      text-shadow: 2px -2px rgba(0, 0, 0, 0.3);
    }
    .text-banner-1 span{
      color: orange;
      text-shadow: 2px -2px rgba(0, 0, 0, 0.3);
    }
    .text-banner-2{
      color: #F2E9C6;
      font-size: 27px;
      margin-top: 5px;
      margin-left: 530px;
      margin-bottom: 40px;
      text-shadow: 2px -1px rgba(0, 0, 0, 0.3);
    }
    .button-banner{
      font-size: 25px;
      color: black;
      background-color: orange;
      border: 1px solid rgba(0, 0, 0,1.0);
      border-radius: 10px;
      box-shadow: 0 60px 12px -18px rgba(0, 0, 0, 0.2), 0 60px 20px -12px rgba(0, 0, 0, 0.1), inset -3px -3px rgba(0, 0, 0, 0.5);
      padding: 5px 30px 5px 35px;
      margin-left: 730px;
      transition: transform 0.2s ease;
      animation: dolphin 1s infinite ease-in-out alternate;
      -webkit-animation: dolphin 1s infinite ease-in-out alternate;
    }
    .button-banner:hover{
      color: #F2E9C6;
      background-color: #12389F;
      border: 1px solid black;
    }
    .button-banner:active{
      transform: scale(0.96);
    }
    @keyframes dolphin{
      100%{
        transition: translateY(20px);
        -webkit-transform: translateY(20px);
        -moz-transform: translateY(20px);
        -ms-transform: translateY(20px);
        -o-transform: translateY(20px);
        box-shadow: 0 40px 10px -18px rgba(0, 0, 0, 0.3), 0 40px 16px -12px rgba(0, 0, 0, 0.2);
      }
    }
    /* Banner */

    /* About */
    .about{
      width: 100%;
      padding: 4% 11%;
      background-color: rgba(18, 56, 159, 0.1);
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .img-about img{
      width: 470px;
      padding: 10px 5%;
      margin-left: 30px;
    }
    .text-about h1{
      margin-top: 20px;
      font-size: 45px;
      color: #12389F;
      position: relative;
      -webkit-text-stroke: 1px rgba(0, 0, 0, 0.2);
    }
    .text-about span{
      font-size: 26px;
    }
    .text-about h1::after{
      position: absolute;
      content: "";
      width: 30%;
      height: 4px;
      background-color: #12389F;
      top: 53px;
      left: 0;
      bottom: 2px;
    }
    .text-about h5{
      margin-top: 0px;
      font-size: 25px;
      color: black;
      position: relative;
      margin-bottom: 0px;
    }
    .text-about p{
      font-size: 18px;
      color: black;
      line-height: 28px;
      margin: 17px 0 25px 0;
      max-width: 480px;
    }
    .why-icon{
      font-size: 33px;
      color: #12389F;
      border: 1px solid #12389F;
      padding: 10px;
      border-radius: 10px;
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
    }
    .why-icon:hover{
      background-color: #12389F;
      color: #F2EDDB;
    }
    /* About */

    /* section */
    section{
      padding: 230px 0px 0px;
      margin-top: 150px;
    }
    /* section */

    /* Title */
    .title-fs{
      text-align: center;
      font-weight: bold;
      color: #12389F;
      margin-bottom: 0;
      background-color: #F2EDDB;
      border-radius: 10px;
      border: 1px solid #12389F;
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
      padding: 10px 0;
      margin-left: 390px;
      margin-right: 390px;
    }
    .title-rv{
      text-align: center;
      font-weight: bold;
      color: #12389F;
      margin-bottom: 0;
      background-color: #F2EDDB;
      border-radius: 10px;
      border: 1px solid #12389F;
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
      padding: 10px 0;
      margin-left: 380px;
      margin-right: 380px;
    }
    /* Title */

    /* Featured Service */
    .card-service{
      width: 350px;
      height: 430px;
      border: 1px solid #12389F;
      border-radius: 20px;
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
      background-color: #F2EDDB;
      color: black;
      transition: 0.2s;
    }
    .card-service:hover{
      width: 347px;
      height: 427px;
      border: 1px solid;
      background-image: url('img/background/bgbody.jpg');
    }
    .img-service{
      padding: 3px 6px 3px 3px;
      border-radius: 30px;
    }
    .title-service{
      font-size: 25px;
      text-align: center;
      font-weight: bold;
      margin-top: 5px;
      color: #12389F;
    }
    .text-service{
      text-align: center;
    }
    .btn-service{
      background-color: #12389F;
      color: #F2EDDB;
      border: 1px solid rgba(0, 0, 0, 0.4);
      border-radius: 10px;
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
      margin-left: 70px;
      margin-bottom: 10px;
      padding: 5px 50px;
    }
    .btn-service:hover{
      background-color: orange;
      color: #12389F; 
    }
    /* Featured Service */


    /* Check Home */
    .unithome{
      margin-bottom: 30px;
    }
    /*card*/
    .card-size{
      margin-left: 20px;
      float: left;
      margin-top: 20px;
      width: 800px;
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
      border-radius: 20px;
      background-color: #F2EDDB;
      margin-bottom: 40px;
      transition: 1s;
      border: 1px solid #12389F;
    }
    .card-size:hover{
      background-image: url('img/background/bgbody.jpg');
      border: 1px solid;
    }
    .card-title-cekhome{
      font-size: 35px;
      text-align: center;
      margin-bottom: 15px;
      color: #12389F;
    }
    .seasonal-pict{
      border-radius: 20px;
    }
    .text-cekhome{
      text-align: center;
      font-size: 18px;
      padding: 10px 15px 0px;
    }
    .body-cekhome{
      margin-top: 35px;
    }
    .cekhome-button{
      margin-top: 20px;
      margin-left: 25px;
      margin-right: 25px;
      border-radius: 10px;
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
      background-color: #12389F;
      color: white;
      border: 1px solid #12389F;
      font-size: 18px;
      transition: transform 0.2s ease;
    }
    .cekhome-button:hover{
      background-color: #12389F;
      color: white;
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
    }
    .cekhome-button:active{
      transform: scale(0.96);
    }
    /*card*/

    /* Carousel-Slice */
    .body-slice-right{
      float: right;
      border-radius: 10px;
      margin-top: 20px;
      margin-right: 20px;
      width: 265px;
    }
    .photo-slice{
      border-radius: 15px;
    }

    /* Check Home */

    /* Review */
    .review{
      height: 60vh;
      background-repeat: no-repeat; 
      position: relative;
      display: flex;
      margin-top: 20px;
    }
    .review-body1{
      width: 330px;
      height: 350px;
      background-color: #F2EDDB;
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
      border-radius: 20px;
      margin-top: 10px;
      margin-left: 95px;
      transition: 1s;
      border: 1px solid #12389F;
    }
    .review-body2{
      width: 330px;
      height: 350px;
      background-color: #F2EDDB;
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
      border-radius: 20px;
      margin-top: 10px;
      margin-left: 40px;
      transition: 1s;
      border: 1px solid #12389F;
    }
    .review-body3{
      width: 330px;
      height: 350px;
      background-color: #F2EDDB;
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
      border-radius: 20px;
      margin-top: 10px;
      margin-left: 40px;
      transition: 1s;
      border: 1px solid #12389F;
    }
    .review-icon{
      margin-top: 30px;
      color: #12389F;
      text-shadow: inset -2px -2px rgba(0, 0, 0, 0.6);
      font-size: 25px;
      padding: 5px 5px 15px 5px;
      margin-left: 30px;
      position: relative;
      display: flex;
    }
    .review-name{
      margin-left: 35px;
      font-size: 20px;
      margin-bottom: 0px;
      padding: 5px 10px 0px;
      position: relative;
      display: flex;
    }
    .review-name span{
      color: #12389F;
    }
    .review-komen{
      padding: 0px 20px;
      text-align: center;
      font-size: 18px;
      margin-bottom: 25px;
    }
    .rating{
      font-size: 18px;
      margin-left: 35px;
      margin-top: 0px;
      padding: 0px 10px;
      position: relative;
      display: flex;
      color: orange;
      -webkit-text-stroke: 1px rgba(0, 0, 0, 0.5);
    }
    .img-review{
      width: 60px;
      border-radius: 50px;
      position: relative;
      display: flex;
      float: left;
      margin-left: 30px;
    }
    /* Review */
    
    /* G-Maps */
    .google-maps{
      margin-top: 100px;
      background-color: rgba(18, 56, 159, 0.1);
      padding: 40px 50px 150px 50px;
    }
    .maps{
      border: none;
      width: 600px;
      height: 350px;
      float: right;
      padding: 0px 0px 0px 15px;
    }
    .text-maps{
      padding: 70px 0px 0px 0px;
      font-size: 16px;
    }
    .title-maps{
      color: #12389F;
      font-weight: bold;
      font-size: 26px;
      -webkit-text-stroke: 1px rgba(0, 0, 0, 0.2);
    }
    .maps-button{
      color: #12389F;
      background-color: #F2EDDB;
      border: none;
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4) ;
      border-radius: 10px;
      transition: transform 0.2s ease;
      margin-left: 370px;
    }
    .maps-button:hover{
      color: #F2EDDB;
      background-color: #12389F;
    }
    .maps-button:active{
      transform: scale(0.96);
    }
    .teksmap1 h5::after{
      position: absolute;
      content: "";
      width: 24%;
      height: 1px;
      background-color: black;
      color: #12389F;
      top: 2917px;
      left: 50px;
      bottom: 2px;
    }
    /* G-Maps */
    /* ----------------------------------------------------------- HOME END ----------------------------------------------------- */



    /* ----------------------------------------------------------- SERVICE ------------------------------------------------------ */
    /* Title */
    .title-layanan-category{
      text-align: center;
      font-weight: bold;
      color: #12389F;
      margin-bottom: 0;
      background-color: #F2EDDB;
      border-radius: 10px;
      border: 1px solid #12389F;
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
      padding: 10px 0;
      margin-left: 390px;
      margin-right: 390px;
    }
    /* Title */

    /* Service */
    .layanan{
      background-color: #F2EDDB;
      color: black;
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
      border: 1px solid rgba(0, 0, 0, 0.5);
      border-radius: 15px;
      border: 1px solid #12389F;
    }
    .layanan:hover{
      background-image: url('img/background/bgbody.jpg');
      border: 2px solid #12389F;
    }
    .judul-layanan{
      text-align: center;
      font-weight: bold;
      color: #12389F;
      margin-top: 15px;
      margin-bottom: 0px;
      -webkit-text-stroke: 1px rgba(0, 0, 0, 0.2);
    }
    .title-layanan{
      color: #12389F;
      font-weight: bold;
      text-align: center;
      font-size: 19px;
      margin-top: 0px;
      margin-bottom: 5px;
    }
    .harga-layanan{
      text-align: left;
      font-size: 18px;
      padding: 5px 0px 15px;
      text-align: center;
    }
    .harga-layanan2{
      text-align: left;
      font-size: 18px;
      padding: 5px 0px 15px;
      margin-left: 40px;
    }
    .img-layanan{
      padding: 5px 7px 0px 5px;
      border-radius: 30px;
      margin-bottom: 0px;
    }
    .menu-layanan{
      color: #12389F;
      font-size: 20px;
      -webkit-text-stroke: 1px rgba(0, 0, 0, 0.2);
    }
    .menu-layanan:hover{
      color: #12389F;
      background-color: rgba(18, 56, 159, 0.1); 
    }
    .container-navtabs .nav-layanan .active{
      background-color: rgba(18, 56, 159, 0.1);
      color: #12389F;
      border: 1px solid #12389F;
      box-shadow: inset -3px 0px rgba(0, 0, 0, 0.3);
    }
    .allservice{
      background-color: rgba(18, 56, 159, 0.1);
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
      border-radius: 15px;
      padding: 1px 0px;
      margin: 0px 30px 30px;
      border: 1px solid #12389F;
    }
    /* Service */
    /* --------------------------------------------------------- SERVICE END ---------------------------------------------------- */



    /* --------------------------------------------------------- HISTORY -------------------------------------------------------- */
    .histori{
      width: 1120px;
      height: 320px;
      background-color: rgba(18, 56, 159, 0.1);
      border: 1px solid #12389F;
      border-radius: 20px;
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
    }
    .cek{
      text-align: center;
      font-weight: bold;
      color: #12389F;
      margin-top: 20px;
      margin-bottom: 40px;
    }
    .btn-histori{
      color: #F2EDDB;
      background: #12389F;
      border: 1px solid rgba(0, 0, 0, 0.4);
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
      border-radius: 5px;
      transition: transform 0.2s ease;
      margin-left: 20px
    }
    .btn-histori:active{
      transform: scale(0.96);
    }
    .btn-histori:hover{
      color: black;
      background: orange;
    }
    .box-form-cek{
      margin-left: 30px;
      border: 1px solid #12389F;
      margin-bottom: 0px;
      box-shadow: inset -2px -2px rgba(0, 0, 0, 0.4);
    }
    .tabel-transaksi{
      background-color: #12389F;
      color: white;
      border: 1px solid rgba(0, 0, 0, 0.8);
      margin-top: 0px;
    }
    .tabellll{
      margin-top: 0px;
      padding: 0px 30px;
    }
    /* ------------------------------------------------------- HISTORY END ------------------------------------------------------ */

  </style>
</head>
<body>
  <!-------------------------------------------------------------- Navbar --------------------------------------------------------->
  <nav class="navbar navbar-expand-lg navbar-dark body-navbar">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarNav">
        <a class="navbar-brand brand-toko" href="<?= base_url()?>home">
          <img src="img/logo/short_logo.jpg" alt="" width="60" height="60" class="me-2 logo">
          <span>BubbleWash </span> Laundry
        </a>
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link nav-btn space <?php if(uri_string() == '' || uri_string() == 'home') echo 'active'; ?>" aria-current="page" href="<?= base_url()?>home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-btn <?php if(uri_string() == 'service') echo 'active'; ?>" href="<?= base_url()?>service">Our Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-btn <?php if(uri_string() == 'histori') echo 'active'; ?>" href="<?= base_url()?>histori">Check Status Laundry</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!------------------------------------------------------------ Navbar End -------------------------------------------------------->


  <!-------------------------------------------------------------- Contact --------------------------------------------------------->
  <div class="fab-container">
    <div class="fab fab-icon-holder">
      <i class="fa fa-plus"></i>
    </div>

    <ul class="fab-options">
      <li>
        <span class="fab-label">Whatsapp</span>
        <div class="fab-icon-holder">
          <a href="https://wa.me/6285811886269?text=Halo,%20saya%20tertarik%20untuk%20mengetahui%20lebih%20lanjut%20tentang%20layanan%20cucian%20yang%20Anda%20tawarkan.%20Bisakah%20Anda%20memberikan%20informasi%20terkait harga,%20jenis%20layanan,%20dan%20waktu%20pengerjaan?%20Terimakasih."><i class="fa-brands fa-whatsapp" style="font-size: 25px; margin-top: 13px;"></i></a>
        </div>
      </li>
      <li>
        <span class="fab-label">Instagram</span>
        <div class="fab-icon-holder">
          <a href="https://www.instagram.com/laundry_bubblewash?igsh=MnRwZTZncmNlNW5o"><i class="fa-brands fa-instagram" style="font-size: 25px; margin-top: 13px;"></i></a>
        </div>
      </li>
      <li>
        <span class="fab-label">Facebook</span>
        <div class="fab-icon-holder">
          <a href="https://www.facebook.com/ubsi.kaliabang?locale=id_ID"><i class="fa-brands fa-square-facebook" style="font-size: 25px; margin-top: 13px;"></i></a>
        </div>
      </li>
      <li>
        <span class="fab-label">Tiktok</span>
        <div class="fab-icon-holder">
          <a href="https://www.tiktok.com/@ubsi_official"><i class="fa-brands fa-tiktok" style="font-size: 25px; margin-top: 13px;"></i></a>
        </div>
      </li>
      <li>
        <span class="fab-label">Telegram</span>
        <div class="fab-icon-holder">
          <a href="https://t.me/+P-eOfvujcbU0MjQ1"><i class="fa-brands fa-telegram" style="margin-top: 10px;"></i></a>
        </div>
      </li>
    </ul>
  </div>
  <!------------------------------------------------------------ Contact End ------------------------------------------------------->
</body>
</html>