<?php include 'include/header.php'; ?>
<head>
        <style>
        body{
            background: #F8F8F8;
        }

        .image-wrap {
        width: 250px;
        height: 340px;
        overflow: hidden;
        box-shadow: 0px 2px 25px rgba(0,0,0,0.1);
        border-radius: 5px; 
        margin: auto;
    }
.image-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: top center;
    transition: all 3s ease-in-out;

}
.image-wrap:hover img {
    object-position: bottom center;
}
section.project_section {
    margin-top: 100px;
    margin-bottom: 100px;
}
@media(max-width: 767px){
.image-wrap {
    width: 330px;
    height: 340px;
    overflow: hidden;
    box-shadow: 0px 2px 25px rgba(0,0,0,0.1);
    border-radius: 5px;
    margin: auto;
    margin-bottom: 21px;
}
}


.filterDiv {
  display: none;
}

.show {
  display: block;
}


/* Style the buttons */
.btn {
  background-color: #f1f1f1;
  cursor: pointer;
  margin-bottom: 10px;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #ffffff;
  color: black;
  border: 1px solid #f59403;
  border-radius: 0px;
}
div#myBtnContainer {
    padding-bottom: 83px;
    text-align: center;
}
.filterDiv{
    margin-bottom: 2%;
}
.preview a {
    padding: 6px;
    color: #000;
    border: 1px solid orange;
}

.preview {
    text-align: center;
    margin-top: 12px;
}
    </style>
</head>
        <div class="container z-index-3">
            <div class="row">

                <!-- parsonal-info-start -->
               <?php include 'include/side_bar.php'; ?>
                <!-- personal-info-end -->

                <!-- resume-page-start -->
                <div class="col-xxl-8 col-xl-9">
                    <div class="bostami-page-content-wrap">

                        <!-- page title -->
                        <div class="section-wrapper pl-60 pr-60 pt-60">
                            <div class="bostami-page-title-wrap mb-15">
                                <h2 class="page-title">Portfolio</h2>
                            </div>
                        </div>


                       <section class="project_section">
            
            <div class="container">
                <div id="myBtnContainer">
                  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
                  <button class="btn" onclick="filterSelection('Ecommerce')"> Ecommerce</button>
                  <button class="btn" onclick="filterSelection('Job')"> Job</button>
                  <button class="btn" onclick="filterSelection('NGO')"> NGO</button>
                  <button class="btn" onclick="filterSelection('Import Export')"> Import Export</button>
                  <button class="btn" onclick="filterSelection('Digital Agency')"> Digital Agency</button>
                  <button class="btn" onclick="filterSelection('Cyber Security')"> Cyber Security</button>
                  <button class="btn" onclick="filterSelection('Interior')"> Interior</button>
                  <button class="btn" onclick="filterSelection('Constructions')"> Constructions</button>
                  <button class="btn" onclick="filterSelection('Static')"> Static</button>
                  <button class="btn" onclick="filterSelection('Academy')"> Academy</button>
                  <button class="btn" onclick="filterSelection('Real Estate')"> Real Estate</button>
                  <button class="btn" onclick="filterSelection('News Blog')"> News / Blog</button>
                  <button class="btn" onclick="filterSelection('Restaurant')"> Restaurant</button>
                  <button class="btn" onclick="filterSelection('Photography')"> Photography</button>
                  <button class="btn" onclick="filterSelection('Medicine')"> Medicine</button>
                   <button class="btn" onclick="filterSelection('College')"> College</button>
                </div>
                
                <div class="row">
                    <div class="col-md-4 filterDiv Ecommerce">
                        <div class="image-wrap">
                            <a href="https://vipuloptical.com/" target="_blank">
                                <img src="project/vipul-optical.png" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://vipuloptical.com/" target="_blank">Preview</a>
                        </div>
                    </div>
                    <div class="col-md-4 filterDiv Ecommerce">
                        <div class="image-wrap">
                            <a href="https://archi3.viswasi.com/" target="_blank">
                                <img src="project/ecom0.png" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://archi3.viswasi.com/" target="_blank">Preview</a>
                        </div>
                    </div>
                    <div class="col-md-4 filterDiv Ecommerce">
                        <div class="image-wrap">
                            <a href="https://archi2.viswasi.com/" target="_blank">
                                <img src="project/ecom01.png" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://archi2.viswasi.com/" target="_blank">Preview</a>
                        </div>
                    </div>
                    <div class="col-md-4 filterDiv Ecommerce">
                        <div class="image-wrap">
                            <a href="https://vweldsolutions.com/" target="_blank">
                                <img src="project/ecom2.png" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://vweldsolutions.com/" target="_blank">Preview</a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 filterDiv Ecommerce">
                        <div class="image-wrap">
                            <a href="https://electronic.aliciaconsultancy.com/" target="_blank">
                                <img src="project/ecom1.png" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://electronic.aliciaconsultancy.com/" target="_blank">Preview</a>
                        </div>
                    </div>
                    <div class="col-md-4 filterDiv Ecommerce">
                        <div class="image-wrap">
                            <a href="https://aibindia.co.in/" target="_blank">
                                <img src="project/e1.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://aibindia.co.in/" target="_blank">Preview</a>
                        </div>
                    </div>
                    <div class="col-md-4 filterDiv Ecommerce">
                        <div class="image-wrap">
                            <a href="https://apnaenterprises.in/" target="_blank">
                                <img src="project/e2.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://apnaenterprises.in/" target="_blank">Preview</a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 filterDiv Ecommerce">
                        <div class="image-wrap">
                            <a href="https://kraftscandy.com/" target="_blank">
                                <img src="project/e5.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://kraftscandy.com/" target="_blank">Preview</a>
                        </div>
                    </div>
                    <div class="col-md-4 filterDiv Ecommerce">
                        <div class="image-wrap">
                            <a href="https://manka.co.uk/" target="_blank">
                                <img src="project/e6.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://manka.co.uk/" target="_blank">Preview</a>
                        </div>
                    </div>
                    <div class="col-md-4 filterDiv Ecommerce">
                        <div class="image-wrap">
                            <a href="https://aamijaan.in/" target="_blank">
                                <img src="project/e7.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://aamijaan.in/" target="_blank">Preview</a>
                        </div>
                    </div>
                    <div class="col-md-4 filterDiv Ecommerce">
                        <div class="image-wrap">
                            <a href="https://mrpindia.in/" target="_blank">
                                <img src="project/e8.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://mrpindia.in/" target="_blank">Preview</a>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-4 filterDiv Job">
                        <div class="image-wrap">
                            <a href="https://archi5.viswasi.com/" target="_blank">
                                <img src="project/job1.png" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://archi5.viswasi.com/" target="_blank">Preview</a>
                        </div>
                    </div>
                    <div class="col-md-4 filterDiv Job">
                        <div class="image-wrap">
                            <a href="https://blantichrsolutions.com/" target="_blank">
                                <img src="project/j1.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://blantichrsolutions.com/" target="_blank">Preview</a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 filterDiv NGO">
                        <div class="image-wrap">
                            <a href="https://digitalindiafoundation.org/" target="_blank">
                                <img src="project/n1.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://digitalindiafoundation.org/" target="_blank">Preview</a>
                        </div>
                    </div>
                    <div class="col-md-4 filterDiv NGO">
                        <div class="image-wrap">
                            <a href="https://digitalindiafoundation.org/" target="_blank">
                                <img src="project/n2.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://digitalindiafoundation.org/" target="_blank">Preview</a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 filterDiv Import Export">
                        <div class="image-wrap">
                            <a href="https://enlightexims.com/" target="_blank">
                                <img src="project/ie1.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://enlightexims.com/" target="_blank">Preview</a>
                        </div>
                    </div>
                    <div class="col-md-4 filterDiv Import Export">
                        <div class="image-wrap">
                            <a href="https://f2shandicrafts.com/" target="_blank">
                                <img src="project/ie2.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://f2shandicrafts.com/" target="_blank">Preview</a>
                        </div>
                    </div>
                    <div class="col-md-4 filterDiv Import Export">
                        <div class="image-wrap">
                            <a href="https://shikhargo.com/" target="_blank">
                                <img src="project/ie3.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://shikhargo.com/" target="_blank">Preview</a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 filterDiv Digital Agency">
                        <div class="image-wrap">
                            <a href="https://innosiddhitech.com/" target="_blank">
                                <img src="project/d1.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://innosiddhitech.com/" target="_blank">Preview</a>
                        </div>
                    </div>
                     <div class="col-md-4 filterDiv Digital Agency">
                        <div class="image-wrap">
                            <a href="https://eadigital.in/" target="_blank">
                                <img src="project/d2.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://eadigital.in/" target="_blank">Preview</a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 filterDiv Cyber Security">
                        <div class="image-wrap">
                            <a href="https://ncsis.org/" target="_blank">
                                <img src="project/c1.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://ncsis.org/" target="_blank">Preview</a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 filterDiv Interior">
                        <div class="image-wrap">
                            <a href="https://coreintech.in/" target="_blank">
                                <img src="project/inte.png" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://coreintech.in/" target="_blank">Preview</a>
                        </div>
                    </div>
                    <div class="col-md-4 filterDiv Interior">
                        <div class="image-wrap">
                            <a href="https://kkinterior.info/" target="_blank">
                                <img src="project/i1.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://kkinterior.info/" target="_blank">Preview</a>
                        </div>
                    </div>
                    <div class="col-md-4 filterDiv Interior">
                        <div class="image-wrap">
                            <a href="https://www.thedesigndirectors.in/" target="_blank">
                                <img src="project/i2.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://www.thedesigndirectors.in/" target="_blank">Preview</a>
                        </div>
                    </div>
                    <div class="col-md-4 filterDiv Interior">
                        <div class="image-wrap">
                            <a href="https://www.mountattalia.in/" target="_blank">
                                <img src="project/i3.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://www.mountattalia.in/" target="_blank">Preview</a>
                        </div>
                    </div>
                    <div class="col-md-4 filterDiv Interior">
                        <div class="image-wrap">
                            <a href="https://www.keramicinfra.com/" target="_blank">
                                <img src="project/i4.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://www.keramicinfra.com/" target="_blank">Preview</a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 filterDiv Constructions">
                        <div class="image-wrap">
                            <a href="https://traumformer.com/" target="_blank">
                                <img src="project/con1.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://traumformer.com/" target="_blank">Preview</a>
                        </div>
                    </div>
                    <div class="col-md-4 filterDiv Constructions">
                        <div class="image-wrap">
                            <a href="https://silverdealsestate.com/" target="_blank">
                                <img src="project/con2.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://silverdealsestate.com/" target="_blank">Preview</a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 filterDiv Static">
                        <div class="image-wrap">
                            <a href="https://aliciaconsultancy.com/" target="_blank">
                                <img src="project/s1.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://aliciaconsultancy.com/" target="_blank">Preview</a>
                        </div>
                    </div>
                    <div class="col-md-4 filterDiv Static">
                        <div class="image-wrap">
                            <a href="https://www.amsolutions.co.in/" target="_blank">
                                <img src="project/s2.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://www.amsolutions.co.in/" target="_blank">Preview</a>
                        </div>
                    </div>
                    <div class="col-md-4 filterDiv Static">
                        <div class="image-wrap">
                            <a href="https://anilenterprises.co.in/" target="_blank">
                                <img src="project/s3.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://anilenterprises.co.in/" target="_blank">Preview</a>
                        </div>
                    </div>
                    <div class="col-md-4 filterDiv Static">
                        <div class="image-wrap">
                            <a href="https://banarasipaanbhandar.com/" target="_blank">
                                <img src="project/s4.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://banarasipaanbhandar.com/" target="_blank">Preview</a>
                        </div>
                    </div>
                    <div class="col-md-4 filterDiv Static">
                        <div class="image-wrap">
                            <a href="https://www.karyteck.com/" target="_blank">
                                <img src="project/s5.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://www.karyteck.com/" target="_blank">Preview</a>
                        </div>
                    </div>
                    <div class="col-md-4 filterDiv Static">
                        <div class="image-wrap">
                            <a href="https://mothershakti.in/" target="_blank">
                                <img src="project/s6.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://mothershakti.in/" target="_blank">Preview</a>
                        </div>
                    </div>
                    <div class="col-md-4 filterDiv Static">
                        <div class="image-wrap">
                            <a href="https://www.shashankassociates.com/" target="_blank">
                                <img src="project/s7.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://www.shashankassociates.com/" target="_blank">Preview</a>
                        </div>
                    </div>
                    <div class="col-md-4 filterDiv Static">
                        <div class="image-wrap">
                            <a href="https://arbuildcare.com/" target="_blank">
                                <img src="project/s8.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://arbuildcare.com/" target="_blank">Preview</a>
                        </div>
                    </div>
                    <div class="col-md-4 filterDiv Static">
                        <div class="image-wrap">
                            <a href="https://dreamfuel.in/" target="_blank">
                                <img src="project/s9.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://dreamfuel.in/" target="_blank">Preview</a>
                        </div>
                    </div>
                    <div class="col-md-4 filterDiv Static">
                        <div class="image-wrap">
                            <a href="https://easyloanfinance.in/" target="_blank">
                                <img src="project/s10.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://easyloanfinance.in/" target="_blank">Preview</a>
                        </div>
                    </div>
                    <div class="col-md-4 filterDiv Static">
                        <div class="image-wrap">
                            <a href="https://harekrishnamovers.com/" target="_blank">
                                <img src="project/s11.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://harekrishnamovers.com/" target="_blank">Preview</a>
                        </div>
                    </div>
                    <div class="col-md-4 filterDiv Static">
                        <div class="image-wrap">
                            <a href="https://kulhadchaiindia.com/" target="_blank">
                                <img src="project/s12.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://kulhadchaiindia.com/" target="_blank">Preview</a>
                        </div>
                    </div>
                    <div class="col-md-4 filterDiv Static">
                        <div class="image-wrap">
                            <a href="https://sakshatdarshan.com/" target="_blank">
                                <img src="project/s13.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://sakshatdarshan.com/" target="_blank">Preview</a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 filterDiv Academy">
                        <div class="image-wrap">
                            <a href="https://cowingersacademy.com/" target="_blank">
                                <img src="project/a1.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://cowingersacademy.com/" target="_blank">Preview</a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 filterDiv Academy">
                        <div class="image-wrap">
                            <a href="https://mrkclasses.in/" target="_blank">
                                <img src="project/a2.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://mrkclasses.in/" target="_blank">Preview</a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 filterDiv Real Estate">
                        <div class="image-wrap">
                            <a href="https://dkbuildcare.in/" target="_blank">
                                <img src="project/r1.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://dkbuildcare.in/" target="_blank">Preview</a>
                        </div>
                    </div>
                    <div class="col-md-4 filterDiv Real Estate">
                        <div class="image-wrap">
                            <a href="https://planettoursllc.com/" target="_blank">
                                <img src="project/r2.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://planettoursllc.com/" target="_blank">Preview</a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 filterDiv News Blog">
                        <div class="image-wrap">
                            <a href="https://techieness.org/" target="_blank">
                                <img src="project/nn1.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://techieness.org/" target="_blank">Preview</a>
                        </div>
                    </div>
                    <div class="col-md-4 filterDiv News Blog">
                        <div class="image-wrap">
                            <a href="https://thenerdgeek.com/" target="_blank">
                                <img src="project/nn2.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://thenerdgeek.com/" target="_blank">Preview</a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 filterDiv Restaurant">
                        <div class="image-wrap">
                            <a href="https://toyboyindia.com/" target="_blank">
                                <img src="project/res1.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://toyboyindia.com/" target="_blank">Preview</a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 filterDiv Photography">
                        <div class="image-wrap">
                            <a href="https://eastudio.in/" target="_blank">
                                <img src="project/p1.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://eastudio.in/" target="_blank">Preview</a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 filterDiv Medicine">
                        <div class="image-wrap">
                            <a href="https://lifebeammedicare.com/" target="_blank">
                                <img src="project/m1.webp" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://lifebeammedicare.com/" target="_blank">Preview</a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 filterDiv College">
                        <div class="image-wrap">
                            <a href="https://sms.vdomain.co.in/" target="_blank">
                                <img src="project/col1.png" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://sms.vdomain.co.in/" target="_blank">Preview</a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 filterDiv College">
                        <div class="image-wrap">
                            <a href="https://sms.vdomain.co.in/" target="_blank">
                                <img src="project/col2.png" />
                            </a>
                        </div>
                        <div class="preview">
                          <a href="https://sms.vdomain.co.in/" target="_blank">Preview</a>
                        </div>
                    </div>
                  
                </div>
            </div>
        </section>
        <script>
            filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
        </script>

                        <!-- footer copyright -->
                        <?php include 'include/footer.php'; ?>

                    </div>
                </div>
                <!-- resume-page-end -->

                <!-- main-menu-start -->
                <div class="col-xxl-1 d-xxl-block d-none">
                    <div class="bostami-main-menu-wrap">
                        <nav class="bastami-main-menu main_menu">
                            <ul>
                                <li>
                                    <a href="index.php">
                                        <span>
                                            <i class="fa-light fa-address-card"></i>
                                        </span>
                                        about
                                    </a>
                                </li>
                                <li>
                                    <a href="resume.php">
                                        <span>
                                            <i class="fa-light fa-file-user"></i>
                                        </span>
                                        Resume
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="work.php">
                                        <span>
                                            <i class="fa-light fa-briefcase"></i>
                                        </span>
                                       My Works
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="contact.php">
                                        <span>
                                            <i class="fa-light fa-address-book"></i>
                                        </span>
                                        contact
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- main-menu-end -->

            </div>


        </div>

        <!-- portfolio-modal-start -->
        <div class="modal portfolio-modal-box fade" id="portfolio-1" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal">
                            <i class="far fa-times"></i>
                        </button>
                    </div>

                    <div class="modal-body">

                        <h6 class="blog-title">
                            Chul urina
                        </h6>

                        <div class="portfolio-modal-table">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="portfolio-modal-table-text">
                                        <i class="fa-regular fa-file-lines"></i>
                                        Project : <span>Website</span>
                                    </h3>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="portfolio-modal-table-text">
                                        <i class="fa-regular fa-user "></i>
                                        Client : <span>Envato</span>
                                    </h3>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="portfolio-modal-table-text">
                                        <i class="fa-solid fa-code"></i>
                                        Langages : <span> Photoshop, Figma</span>
                                    </h3>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="portfolio-modal-table-text">
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                        Preview : <a href="#">www.envato.com</a>
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <div class="h1-modal-paragraph">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga consequatur delectus porro
                                sapiente molestias, magni quasi sed, enim corporis omnis doloremque soluta inventore
                                dolorum conseqr quo obcaecati rerum sit non. Lorem ipsum dolor, sit amet consectetur
                                adipisicing elit. Fuga consequatur delectus porro sapiente molestias, magni quasi sed,
                                enim corporis omnis doloremque soluta inventore dolorum consequuntur quo obcaecati rerum
                                sit non.</p>

                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga consequatur delectus porro
                                sapiente molestias, magni quasi sed, enim corporis omnis doloremque soluta inventore
                                dolorum consetur quo obcaecati rerum sit non. Lorem ipsum dolor, sit amet consectetur
                                adipisicing elit. Fuga consequatur delectus porro sapiente molestias, magni quasi sed,
                                sit amet consectetur adipisicing elit. Fuga consequatur delectus porro sapiente
                                molestias, magni quasi sed, enim corporis omnis doloremque soluta inventore dolorum
                                consequuntur.</p>

                        </div>
                        <div class="h1-modal-img">
                            <img src="assets/img/work/portfolio-modal-img-1.jpg" alt="">
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- portfolio-modal-end -->


    </div>

    <!-- JS here -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swipper-bundle.min.js"></script>
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/appear.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from bostami-bootstrap.ibthemespro.com/bostami-template/portfolio.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Feb 2024 06:57:46 GMT -->
</html>