<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="B-SPIRITS accueil.css">
    <title>Document</title>
</head>
<body>
<div class="b-1">    
            
        <div class="navbar1">
            <div class="dropdown1">
            <button class="dropbtn1" onclick="myFunction1()">
              <div class="b-24">
              Mood
              </div>
                <i class="fa fa-caret-down1"></i>
            </button>
                <div class="dropdown-content1" id="myDropdown1">
                    <div class="carousel-container">
                        <div class="carousel">
                    <div class="b-2">
                        <a href="#">
                            <div class="im1">
                                <img src="./IMAGES1/Depositphotos_211065034_XL.jpg"/>
                            </div>
                            <div class="b-6">
                                <div class="b-7">
                                  <p>Lorem ipsum dolor sit amet. 
                Eum ducimus reiciendis id 
                eius dolorem ut blanditiis 
                facere. Qui atque natus et 
                quia molestiae in quod sint
                 aut tenetur nihil!</p>
                                  </div>
                                  </div>
                        </a>
                        <a href="#">
                            <div class="im1">
                                <img src="./IMAGES1/Depositphotos_34784409_XL.jpg"/>
                            </div>
                            <div class="b-8">
                                <div class="b-9">
                                  <p>Lorem ipsum dolor sit amet. 
                Eum ducimus reiciendis id 
                eius dolorem ut blanditiis 
                facere. Qui atque natus et 
                quia molestiae in quod sint
                 aut tenetur nihil!</p>
                                  </div>
                                  </div>
                        </a>
                    </div>
                    <div class="b-3">
                        <a href="#">
                            <div class="im1">
                                <img src="./IMAGES1/Fotolia_188806_XS.jpg"/>
                            </div>
                            <div class="b-10">
                                <div class="b-11">
                                  <p>Lorem ipsum dolor sit amet. 
                Eum ducimus reiciendis id 
                eius dolorem ut blanditiis 
                facere. Qui atque natus et 
                quia molestiae in quod sint
                 aut tenetur nihil!</p>
                                  </div>
                                  </div>
                        </a>
                        <a href="#">
                            <div class="im1">
                                <img src="./IMAGES1/Fotolia_38023519_S.jpg"/>
                        </div>
                        <div class="b-12">
                            <div class="b-13">
                              <p>Lorem ipsum dolor sit amet. 
            Eum ducimus reiciendis id 
            eius dolorem ut blanditiis 
            facere. Qui atque natus et 
            quia molestiae in quod sint
             aut tenetur nihil!</p>
                              </div>
                              </div>
                    </a>
                    </div>
                    <div class="b-4">
                        <a href="#">
                            <div class="im1">
                                <img src="./IMAGES1/Fotolia_62379893_XS.jpg"/>
                            </div>
                            <div class="b-14">
                                <div class="b-15">
                                  <p>Lorem ipsum dolor sit amet. 
                Eum ducimus reiciendis id 
                eius dolorem ut blanditiis 
                facere. Qui atque natus et 
                quia molestiae in quod sint
                 aut tenetur nihil!</p>
                                  </div>
                                  </div>
                        </a>
                        <a href="#">
                            <div class="im1">
                                <img src="./IMAGES1/Fotolia_12967994_XS.jpg"/>
                            </div>
                            <div class="b-16">
                                <div class="b-17">
                                  <p>Lorem ipsum dolor sit amet. 
                Eum ducimus reiciendis id 
                eius dolorem ut blanditiis 
                facere. Qui atque natus et 
                quia molestiae in quod sint
                 aut tenetur nihil!</p>
                                  </div>
                                  </div>
                        </a>
                    </div>
                </div>
            </div> 
        </div>
        
        <script>
        
        function myFunction1() {
          document.getElementById("myDropdown1").classList.toggle("show1");
        }
    
        </script>
    
    
    
    
    </div>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', () => {
    const carouselContainer = document.querySelector('.carousel-container');
    const carousel = document.querySelector('.carousel');
    let isMouseDown = false;
    let startY;
    let scrollTop;
    
    carouselContainer.addEventListener('mousedown', (e) => {
    isMouseDown = true;
    startY = e.pageY - carouselContainer.offsetTop;
    scrollTop = carouselContainer.scrollTop;
    carouselContainer.style.cursor = 'grabbing';
    carouselContainer.style.userSelect = 'none';
    });
    
    carouselContainer.addEventListener('mouseleave', () => {
    isMouseDown = false;
    carouselContainer.style.cursor = 'grab';
    });
    
    carouselContainer.addEventListener('mouseup', () => {
    isMouseDown = false;
    carouselContainer.style.cursor = 'grab';
    });
    
    carouselContainer.addEventListener('mousemove', (e) => {
    if (!isMouseDown) return;
    e.preventDefault();
    const y = e.pageY - carouselContainer.offsetTop;
    const walk = (y - startY) * 2; 
    carouselContainer.scrollTop = scrollTop - walk;
    });
    
    carouselContainer.style.cursor = 'grab';
    });
    </script> 
        




        
  
  
  
    <div class="navbar2">
        <div class="dropdown2">
        <button class="dropbtn2" onclick="myFunction2()">
          <div class="b-18">
          Homme
        </div>
            <i class="fa fa-caret-down2"></i>
        </button>
            <div class="dropdown-content2" id="myDropdown2">
                <a href="petètre2.html">
                    <div class="im2">
                        t-shirt
                    </div>
                </a>
                <a href="#">
                    <div class="im3">
                        Sweat
                    </div>
                </a>
                <a href="#">
                    <div class="im4">
                        pijama
                    </div>
                </a>
            </div>
        </div> 
    </div>
    
    <script>
    
    function myFunction2() {
      document.getElementById("myDropdown2").classList.toggle("show2");
    }
  
    </script>
  
  
  <div class="navbar3">
    <div class="dropdown3">
    <button class="dropbtn3" onclick="myFunction3()">
      <div class="b-19">
      Femme
      </div>
        <i class="fa fa-caret-down3"></i>
    </button>
        <div class="dropdown-content3" id="myDropdown3">
            <a href="#">
                <div class="im5">
                   t-shirt
                </div>
            </a>
            <a href="#">
                <div class="im6">
                    Sweat
                </div>
            </a>
            <a href="#">
                <div class="im7">
                    pijama
                </div>
            </a>
        </div>
    </div> 
  </div>
  
  <script>
  
  function myFunction3() {
  document.getElementById("myDropdown3").classList.toggle("show3");
  }
  
  </script>
  
  <div class="im8">
  <img src="./IMAGES1/5bf6fcff3d5623.27094295.jpg"/> 
   </div>
  
   <div class="navbar4">
    <div class="dropdown4">
    <button class="dropbtn4" onclick="myFunction4()">
      <div class="im9">
      <img src="./IMAGES1/icône-du-vecteur-de-compte-panneau-d-illustration-utilisateur-symbole-ou-logo-l-homme-peut-être-utilisé-pour-des-sites-web-228346098.webp"/>
    </div>
        <i class="fa fa-caret-down4"></i>
    </button>
        <div class="dropdown-content4" id="myDropdown4">
          <div class="b-20">   
            <a href="#">
              <div class="im10">
                <img src="./IMAGES1/icône-du-vecteur-de-compte-panneau-d-illustration-utilisateur-symbole-ou-logo-l-homme-peut-être-utilisé-pour-des-sites-web-228346098.webp"/>
                 </div>
            </a>
            <a href="#">
                
            </a>
          </div>
            <a href="#">
              <div class="b-21">
  
                <div class="navbar5">
                  <div class="dropdown5">
                  <button class="dropbtn5" onclick="myFunction5()">
                     <div class="b-22">
                historique du panier
                </div>
                      <i class="fa fa-caret-down5"></i>
                  </button>
                      <div class="dropdown-content5" id="myDropdown5">
                          <a href="#">
                              
                          </a>
                          <a href="#">
                              
                          </a>
                          <a href="#">
                              
                          </a>
                      </div>
                  </div> 
                </div>
                
                <script>
                
                function myFunction5() {
                document.getElementById("myDropdown5").classList.toggle("show5");
                }
                
                </script>
               
              </div>
            </a>
        </div>
    </div> 
  </div>
  <script>
    
    function myFunction4() {
      document.getElementById("myDropdown4").classList.toggle("show4");
    }
  
    </script>
    
  </div>































<div class="b-23">

    <div class="navbar6">
        <div class="dropdown6">
        <button class="dropbtn6" onclick="myFunction6()">
            <div class="b-20">
                Homme
                </div>
            <i class="fa fa-caret-down6"></i>
        </button>
            <div class="dropdown-content6" id="myDropdown6">
                <a href="petètre2.html">
                    <div class="im11">
                        <img src="./IMAGES1/65c8f927-dc6c-42ad-a309-8a7452d61d4f.jpg"/>
                    </div>
                </a>
                <a href="#">
                    <div class="im12">
                        <img src="./IMAGES1/sweat-a-capuche-carhartt.jpg"/>
                    </div>
                </a>
                <a href="#">
                    <div class="im13">
                        <img src="./IMAGES1/610-lagardy-pijama-villela-cuadros-camisa-abierta-manga-larga-01.jpg"/>
                    </div>
                </a>
            </div>
        </div> 
    </div>
    
    <script>
    
    function myFunction6() {
      document.getElementById("myDropdown6").classList.toggle("show6");
    }

    </script>


<div class="navbar7">
    <div class="dropdown7">
    <button class="dropbtn7" onclick="myFunction7()">
        <div class="b-19">
            Femme
            </div>
        <i class="fa fa-caret-down7"></i>
    </button>
        <div class="dropdown-content7" id="myDropdown7">
            <a href="#">
                <div class="im14">
                    <img src="./IMAGES1/65c8f927-dc6c-42ad-a309-8a7452d61d4f.jpg"/>
                </div>
            </a>
            <a href="#">
                <div class="im15">
                    <img src="./IMAGES1/sweat-a-capuche-carhartt.jpg"/>
                </div>
            </a>
            <a href="#">
                <div class="im16">
                    <img src="./IMAGES1/610-lagardy-pijama-villela-cuadros-camisa-abierta-manga-larga-01.jpg"/>
                </div>
            </a>
        </div>
    </div> 
</div>

<script>

function myFunction7() {
  document.getElementById("myDropdown7").classList.toggle("show7");
}
    
</script>

</div>
</body>
</html>