<?php 

$hcolor = $site->homePage()->hcolor();
?>
<style>
@charset "UTF-8";
@import url('https://fonts.googleapis.com/css?family=Rubik:300,400,600,700,800');


html {
  height: calc(100% - 150px);;
  box-sizing: border-box;
}


*,
*:before,
*:after {
  box-sizing: inherit;
}

body{
  font-family: 'Rubik', sans-serif;
  position: relative;
  margin: 0;
  min-height: 100%;
  padding-bottom: 80px;

}

body.overlay{
  overflow: hidden;
}

main{
    /*height:80vh; */
    padding-bottom: 50px!important;
    background-color: white;
}

h1,h2,h3{
  font-weight: 600;
  /*font-family: 'Rubik Mono One', sans-serif;  */
  /*font-family: 'Open Sans', sans-serif;*/
}

a:hover{
  text-decoration: none;
  /*color: #cc181e;*/
  color: <?= $hcolor ?>;
}

a.anchor{
    display: block;
    position: relative;
    top: -80px;
    visibility: hidden;
}

p{
  font-size: 2rem;
}

/*
    Header
*/
header{
    position: fixed;
    background-color: white;
    z-index: 9999;
    z-index: 999;
    padding-top: 50px;
    padding-bottom: 20px;
    top: 0;
    left: 0;
    right: 0;
}


header .logo svg{
  width: 80px!important;
}

header .logo svg:hover path{
  fill: <?= $hcolor ?>!important;
}

header.scroll{
    padding-top: 20px;
    padding-bottom: 10px;
}
header.scroll .logo svg{
    width: 52px!important;
}

header.scroll .lower label{
    top: 0px;
}
header.scroll .lower label:before, 
header.scroll .lower label:after {
  left: 15px;
  height: 2rem;
}


figure img{
  max-width: 100%;  
}

figure.floated{
  float: left;
}

/*
    Body
*/
body.error,
body.contact,
body.contact header{
    background-color: black;
}
body.home header,
body.error header{
    background-color: transparent;
}

body.home header .overlay header,
.overlay header{
  background-color: rgba(41,250,76,1)!important;
}

body.home .overlay header
body.error .overlay header,
body.contact .overlay header{
    background: rgba(41,250,76,1)!important;
}
body.error .overlay header div.logo svg path,
body.contact .overlay header div.logo svg path{
  fill: black!important;
}
body.error header div.logo svg path,
body.contact header div.logo svg path{
  fill: white!important;
}
body.error header div.logo svg:hover path,
body.contact header div.logo svg:hover path{
  fill: <?= $hcolor ?>!important;
}
body.home .lower label:before, 
body.home .lower label:after,
body.contact .lower label:before, 
body.contact .lower label:after,
body.error .lower label:before, 
body.error .lower label:after{
    background-color: white;
}
body.home .lower:hover label:before,
body.home .lower:hover label:after,
body.contact .lower:hover label:before, 
body.contact .lower:hover label:after,
body.error .lower:hover label:before, 
body.error .lower:hover label:after{
  background-color: <?= $hcolor ?>;
}
body.home header div.logo svg path{
  fill: white!important;
}
body.home header div.logo svg:hover path{
  fill: <?= $hcolor ?>!important;
}
body.home header div.logo.black svg path{
  fill: black!important;
}
body.home header div.logo.black svg:hover path{
  fill: white!important;
}

#fp-nav ul li a span, 
.fp-slidesNav ul li a span{
  background: white!important;
}
#fp-nav ul li a:hover span, 
.fp-slidesNav ul li a:hover span{
  background: <?= $hcolor ?>!important;
}
#fp-nav.right{
  right: 70px!important;
}
/*
    Container
*/
.container{
  /*border: solid 1px <?= $hcolor ?>;*/
}
.container.main{
    margin-top: 150px;
    background-color: white;
}
.container.dark{
    margin-top: 150px;
    color: white;
    font-size: 20px;
}

body.home .section{
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-position: center;
}
body.home .section .container{
    text-align: center;
    /*text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.4);*/
}
body.home .section .container h1,
body.home .section .container h2{
    color: white;
    padding: 10px 20px;
    display: inline-block;
}
body.home .section .container .title{
  margin-top: -8%;
}
body.home .section .container h1{
  font-size: 9rem;
  /*font-family: 'Rubik Mono One', sans-serif;  */

}
body.home .section .container h1:hover{
  color: <?= $hcolor ?>;
  /*text-shadow: 1px 1px 1px #fff;*/

}

/*
    Footer
*/
footer{
    color: white;
    font-size: 20px;
    font-weight: 300;
    background-color: #101010;
    padding-top: 20px;
    height: 60px;
    
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;    
}

footer a{
    color: white;
}
footer a:hover{
  color: <?= $hcolor ?>;
}
footer .social a{
  padding-left: 10px;
}

footer .col-md-6{
  width: 50%;
  float: left;
}
footer .col-md-6.pull-right{
  width: 50%;
  float: right;
  text-align: right;
}

/*body.error footer,
body.contact footer,*/
body.home footer{
    position:fixed;
    bottom:0px;
    left: 0px;
    right: 0px;
}


/*
  Forms
*/
.form-control{
  background-color: black!important;
  color: white!important;
  border: solid 1px white!important;
  border-radius: 0!important;
  border: none;
}
.btn-dark{
  color: white!important;
  background-color: black!important;  
  border: solid 1px white!important;
  border-radius: 0!important;
}


/*
  Search
*/
.search {
  position: relative;
}
.search span{
  position: absolute;
  color: black;
  top: 20px;
  right: 20px;
}
#search_field{
    background-color: rgba(41,250,76,1);
    border: solid 1px black;
    width: 100%;
    height: 50px;
    padding: 10px 20px;
    font-size: 2rem;  
}
#search_field:focus{
    border-color: black !important;
    box-shadow: 0 1px 1px rgba(229, 103, 23, 0.075) inset, 0 0 8px rgba(229, 103, 23, 0.6) !important;
    outline: 0 none !important;    
}

/*
    Close Button
*/
.timeline{
    position: relative;
}
.close {
  position: absolute;
  right: 0px;
  top: 10px;
  width: 32px;
  height: 32px;
  opacity: 1;
}
.close:before, .close:after {
  position: absolute;
  left: 15px;
  content: ' ';
  height: 33px;
  width: 2px;
  background-color: #fff;
}
.close:before {
  transform: rotate(45deg);
}
.close:after {
  transform: rotate(135deg);
}
.close:hover:before,
.close:hover:after{
  background-color: <?= $hcolor ?>;
  opacity: 1;  
}
.close:hover:before {
  transform: rotate(-45deg);
  -webkit-transition-duration: 0.5s; /* Safari */
  transition-duration: 0.5s;    
}
.close:hover:after {
  transform: rotate(45deg);
  -webkit-transition-duration: 0.5s; /* Safari */
  transition-duration: 0.5s;    
}

/*
  Slider
*/
.carousel-inner .item img{
  width: 100%!important;
}

/*
    Overlay
*/
.lower{
  opacity:1;
  color:white;
}

input#op{
  opacity: 0;

}

.lower label{
    position: absolute;
    right: 0px;
    top: 10px;
    width: 32px;
    height: 32px;
    opacity: 1;
    cursor:pointer;    
}
.lower label:before, .lower label:after {
  position: absolute;
  left: 15px;
  content: ' ';
  height: 33px;
  width: 2px;
  background-color: #000;
}
.lower label:before {
  transform: rotate(90deg);
}
.lower label:after {
  transform: rotate(180deg);
}
.lower:hover label:before,
.lower:hover label:after{
  background-color: <?= $hcolor ?>;
}
.lower:hover label:before {
  transform: rotate(0deg);
  -webkit-transition-duration: 0.5s; /* Safari */
  transition-duration: 0.5s;    
}
.lower:hover label:after {
  transform: rotate(90deg);
  -webkit-transition-duration: 0.5s; /* Safari */
  transition-duration: 0.5s;    
}
.overlay{
    color: black;
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    overflow-y: scroll;
    padding-top: 50px;
    background: rgba(41,250,76,1);
    z-index: 999;
    -webkit-overflow-scrolling: touch;    
}
/*.overlay .header{
  position: fixed;
  top: 50px;
}*/
.overlay a{
    color: black!important;
    text-decoration: none;
}
.overlay .oclose label{
    position: absolute;
    right: 15px;
    top: 10px;
    width: 32px;
    height: 32px;
    opacity: 1;
    z-index: 100;
    cursor:pointer;
}
.overlay .oclose label:before, .overlay label:after {
  position: absolute;
  left: 15px;
  content: ' ';
  height: 33px;
  width: 2px;
  background-color: #000;
}


.overlay .oclose label:before {
  transform: rotate(45deg);
}
.overlay .oclose label:after {
  transform: rotate(135deg);
}
.overlay .oclose:hover label:before,
.overlay .oclose:hover label:after{
  background-color: white;
}
.overlay .oclose:hover label:before {
  transform: rotate(-45deg);
  -webkit-transition-duration: 0.5s; /* Safari */
  transition-duration: 0.5s;    
}
.overlay .oclose:hover label:after {
  transform: rotate(45deg);
  -webkit-transition-duration: 0.5s; /* Safari */
  transition-duration: 0.5s;    
}



.lower~.overlay-hugeinc{
    opacity: 0;
    visibility: hidden;
    -webkit-transition: opacity 0.5s, visibility 0s 0.5s;
    transition: opacity 0.5s, visibility 0s 0.5s;
}

#op:checked~.overlay-hugeinc{
    opacity: 1;
    visibility: visible;
    -webkit-transition: opacity 0.5s;
    transition: opacity 0.5s;
}

.overlay ul{
    margin-top: 100px;
    margin-left: 20px;
    padding-left: 0px;
}
.overlay ul li {
    list-style: none;
    padding-bottom: 40px;
}
.overlay ul li h3{
    padding: 0!important;
    margin: 0!important;
}


/*
  Responsive Shit
*/
@media (max-width:767px){
  header{
    padding-top: 20px;
  }
  body.home .section .container h1{
    font-size: 5rem!important;
  }
  .container.main{
    margin-top: 100px;
  }
  #fp-nav.right{
    display: none;
    right: 5px!important;
  }  
}

</style>