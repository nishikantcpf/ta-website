<?php
// Sample PHP code to demonstrate dynamic content generation
$director_general = [
    'name' => 'Lt Gen R Baijal',
    'commissioned' => '1987 in 6 LANCERS of Indian Army 1987 in 6 LANCERS of Indian Army',
    // Add more details as needed
];

$vision = 'Ensure operational mission readiness and force modernisation of Armd Corps alongwith long term capability building for future war in sync with operational role across all sectors for op enhancement of IA.';

$thrust_areas = [
    'Ensure fleet mgt through eff sustenance & upgradation.',
    'Ensure capability building with induction of FRCV & lt tk & other new gen eqpt.',
    'Ensure fleet upgradation / new induction aligned to the threats of UCAVs, LMS & to remain eff force in future war env.',
    'Refine op role of Armd Corps in sync with op challenges in future war scenario in all sectors.',
    'Ensure trg policies in alignment to op role and make ACC&S centre of excellence.',
    'Ensure manpower plg, HR and policy exec on all aspects in op / functional interests of the corps.',
    'Ensure eff office functioning, incorporate IT & implement all security measures.',
    // Add more thrust areas as needed
];

$whats_new = [
    'Compendium of Problem Definition Statement 2023',
    'After Me Folder',
    'Annual Insp Manual',
    'The Art of Study',
    'Wedded to the Olive Greens',
    'Welfare Schemes Compendium',
    'IA Land Warfare Doctrine'
];
?>

<!DOCTYPE html>
<html lang="en">

<?php include("includes/head.php"); ?>

<body>
    <?php include("includes/header.php"); ?>
    <?php include("includes/menu.php"); ?>

    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-4" style="text-align: justify;" >
                <div class="section-header mb-2" >
                    <h5>DIRECTOR GENERAL TERRITORIAL ARMY(DG TA)</h5>
                </div>
                <!-- <img src="./img/goc1.JPG" alt="Director General" class="img-fluid mb-3"> -->
                <p>
                    <img src="./img/goc1.JPG" width='250px' alt="alt text" style="float: left; padding: 10px " class="img-fluid  ">
                    <!-- <strong><?php echo $director_general['name']; ?></strong> was commissioned in <?php echo $director_general['commissioned']; ?> -->
                    <div class="mt-2 mb-2" ><strong ><?php echo $director_general['name']; ?></strong></div>
                    On the 74th Anniversary of the Territorial Army, our heartiest greetings and best wishes to All Ranks of the Territorial Army and their families. On this occasion, we pay tribute and homage to our brave hearts, whose valor and supreme sacrifice in the line of duty epitomizes the spirit and ethos of our organization
                   
                    The ‘Citizens’ Army’ has a proven track record and has acquitted itself with honour and professionalism whenever called out whether during war, counter terrorist / insurgency operations or natural calamities. It continues its relentless pursuit for excellence in true traditions of the Indian Army. The highest standards of bravery and devotion to the duty displayed by the personnel of the Territorial Army is highly 
                    commendable and  Minister
                    The commitment and dedication of both Non-Departmental and Departmental TA units has made a tremendous impact wherever they have been deployed. .... <button class="btn btn-light"> <a href="about-dg.php">view more</a></button>
                    
                
                <!-- </br></br>
                    The efforts put in by our Ecological Task Forces and the Ganga Task Force showcases our professionalism and contribution to Nation building.
                    </br></br>
                    We would like all the ‘TERRIERS’ to join hands in continuous efforts to enhance the efficiency and organizational capabilities of the Territorial Army.
                    </br></br>
                    We once again compliment all ranks for their contribution in service to the Nation. We are sanguine to the fact that collective will and efforts of TA fraternity will help us achieve further pinnacles of glory and success. -->
                </p>
            </div>

            <!-- <div class="col-md-5">
                

            </div> -->
            <div class="col-md-5">
                <div class="section-header mb-2">
                    <h5>Photo Gallery</h5>
                </div>
                <!-- <div class="contentheader" style="text-decoration:blink">Photo Gallery</div> -->
                <div class="mb-2" id="slider" style="width: 600px; ">

                    <!-- image size 600*400  if want to change then change form its css-->
                    <img src="img/slider/7.jpg" alt="" />
                    <img src="img/slider/8.jpg" alt="" />
                    <img src="img/slider/9.jpg" alt="" />
                    <img src="img/slider/10.jpg" alt="" />
                    <img src="img/slider/11.jpg" alt="" />
                    <img src="img/slider/12.jpg" alt="" />
                    <img src="img/slider/13.jpg" alt="" />
                    <img src="img/slider/14.jpg" alt="" />

                </div>
                <div class="section-header mb-2" >
                    <h5>Vision</h5>
                </div>
                <p style="text-align: justify;"><?php echo $vision; ?></p>

                <!-- <div class="section-header mb-2 mt-4">
                    <h5>Thrust Areas</h5>
                </div>
                <ol>
                    <?php foreach ($thrust_areas as $area): ?>
                        <li><?php echo $area; ?></li>
                    <?php endforeach; ?>
                </ol> -->
            </div>
            <div class="col-md-3">
                <div class="section-header mb-2">
                    <h5>What's New</h5>
                </div>
                <!-- <div class="marquee" >
                    <span>
                        <?php echo implode(' &bull; ', $whats_new); ?>
                    </span>
                </div> -->
                <div class="marquee" style="height:200px">

                    <marquee direction=up width="380" height="170px" scrollamount="2" onMouseOver="this.stop();"
                        onMouseOut="this.start();">
                        <ul>
                            <li><a href="#">News Flash 1</a></li><BR>
                            <li><a href="#">News Flash 2</a></li><BR>
                            <li><a href="#">News Flash 3</a></li><BR>
                            <li><a href="#">News Flash 4</a></li><br>
                        </ul>
                    </marquee>
                </div>
                <div class="navbar navbar-dark bg-dark  mt-2" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li><a class=" nav-link p-2" href="#">Postings</a> </a></li>
                    <li><a class=" nav-link p-2" href="#">Bidding AD/EU </a></li>
                    <li><a class=" nav-link p-2" href="#">Paramaount Card </a></li>
                    <li><a class=" nav-link p-2" href="#">TA School </a></li>
                    <li><a class="nav-link p-2" href="#">Misc</a></li>
                    <li><a class=" nav-link p-2" href="pdf/contact.pdf">Contact us </a></li>
                </ul>
                </div>
            </div>
        </div>
        <div class="container mt-2 pt-4 bg-light">
    <div id="imageCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-flex justify-content-center">
                    <div class="text-center mx-2">
                        <a target="_blank" href="#"><img src="img/goc1.jpg" height="200" width="200"></a>
                        <p style="padding-top: 10px;padding-bottom: 10px;color:black">Lt Gen R Baijal</p>
                    </div>
                    <div class="text-center mx-2">
                        <a target="_blank" href="#"><img src="img/goc1.jpg" height="200" width="200"></a>
                        <p style="padding-top: 10px;padding-bottom: 10px;color:black">Lt Gen R Baijal</p>
                    </div>
                    <div class="text-center mx-2">
                        <a target="_blank" href="#"><img src="img/goc1.jpg" height="200" width="200"></a>
                        <p style="padding-top: 10px;padding-bottom: 10px;color:black">Lt Gen R Baijal</p>
                    </div>
                    <div class="text-center mx-2">
                        <a target="_blank" href="#"><img src="img/goc1.jpg" height="200" width="200"></a>
                        <p style="padding-top: 10px;padding-bottom: 10px;color:black">Lt Gen R Baijal</p>
                    </div>
                    <div class="text-center mx-2">
                        <a target="_blank" href="#"><img src="img/goc1.jpg" height="200" width="200"></a>
                        <p style="padding-top: 10px;padding-bottom: 10px;color:black">Lt Gen R Baijal</p>
                    </div>
                 
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-center">
                    <div class="text-center mx-2">
                        <a target="_blank" href="#"><img src="img/goc1.jpg" height="200" width="200"></a>
                        <p style="padding-top: 10px;padding-bottom: 10px;color:black">Lt Gen R Baijal</p>
                    </div>
                    <div class="text-center mx-2">
                        <a target="_blank" href="#"><img src="img/goc1.jpg" height="200" width="200"></a>
                        <p style="padding-top: 10px;padding-bottom: 10px;color:black">Lt Gen R Baijal</p>
                    </div>
                    <div class="text-center mx-2">
                        <a target="_blank" href="#"><img src="img/goc1.jpg" height="200" width="200"></a>
                        <p style="padding-top: 10px;padding-bottom: 10px;color:black">Lt Gen R Baijal</p>
                    </div>
                    <div class="text-center mx-2">
                        <a target="_blank" href="#"><img src="img/goc1.jpg" height="200" width="200"></a>
                        <p style="padding-top: 10px;padding-bottom: 10px;color:black">Lt Gen R Baijal</p>
                    </div>
                    <div class="text-center mx-2">
                        <a target="_blank" href="#"><img src="img/goc1.jpg" height="200" width="200"></a>
                        <p style="padding-top: 10px;padding-bottom: 10px;color:black">Lt Gen R Baijal</p>
                    </div>
                </div>
            </div>
            <!-- Add more .carousel-item divs as needed -->
        </div >
        <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev" style="margin: -30px;">
            
            <span class="carousel-control-prev-icon " aria-hidden="true"></span>
            <!-- <span class="sr-only">Previous</span> -->
        </a>
        <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next" style="margin: -30px;">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <!-- <span class="sr-only">Next</span> -->
        </a>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        
<div class="container mt-4 pt-4">
  <div class="row text-center">
    <div class="col">
      <a target="_blank" href="#">
        <img src="img/quciklinks/1.jpeg" class="img-fluid" alt="e-Task Manager">
      </a>
      <p class="mt-2">e-Task Manager</p>
    </div>
    <div class="col">
      <a target="_blank" href="#">
        <img src="img/quciklinks/2.jpeg" class="img-fluid" alt="Army Mail">
      </a>
      <p class="mt-2">Army Mail</p>
    </div>
    <div class="col">
      <a target="_blank" href="#">
        <img src="img/quciklinks/3.jpeg" class="img-fluid" alt="e-Library">
      </a>
      <p class="mt-2">e-Library</p>
    </div>
    <div class="col">
      <a target="_blank" href="links/news/index.html">
        <img src="img/quciklinks/4.jpeg" class="img-fluid" alt="e-Office">
      </a>
      <p class="mt-2">e-Office</p>
    </div>
    <div class="col">
      <a target="_blank" href="#">
        <img src="img/quciklinks/teledirectory.png" class="img-fluid" alt="Directory">
      </a>
      <p class="mt-2">Tele Directory</p>
    </div>
    <div class="col">
      <a target="_blank" href="#">
        <img src="img/quciklinks/5.jpeg" class="img-fluid" alt="Asigma">
      </a>
      <p class="mt-2">Asigma</p>
    </div>
    <div class="col">
      <a target="_blank" href="#">
        <img src="img/quciklinks/6.jpeg" class="img-fluid" alt="Trending Tweets">
      </a>
      <p class="mt-2">Trending Tweets</p>
    </div>
    <div class="col">
      <a target="_blank" href="#">
        <img src="img/quciklinks/7.jpeg" class="img-fluid" alt="Innovations">
      </a>
      <p class="mt-2">Innovations</p>
    </div>
    <div class="col">
      <a target="_blank" href="#">
        <img src="img/quciklinks/8.png" class="img-fluid" alt="Cyber News">
      </a>
      <p class="mt-2">Cyber News</p>
    </div>
  </div>
</div>

        
    </div>
    <div class="footer"style="padding:8px">
     
     Copyright © 2024 Territorial-Army
   </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>