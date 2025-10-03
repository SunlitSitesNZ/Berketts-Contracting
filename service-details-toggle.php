<?php 
$service = $_GET['service'] ?? 'infrastructure';
?>


<<<<<<< HEAD


=======
>>>>>>> 95f4483cb45d79ceb5594b502a81965eaf718c65
<div class="service-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="details-nav">
                        <nav>
                            <ul class="nav" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link <?php echo $service == 'earthworks' ? 'show  active' : ''; ?>" id="earthworks-tab" data-toggle="tab" href="#earthworks" role="tab" aria-controls="earthworks" aria-selected="true">Earthworks</a>
                                </li>
                                <li class="nav-item"> 
                                    <a class="nav-link <?php echo $service == 'infrastructure' ? 'show  active' : ''; ?>" id="infrastructure-tab" data-toggle="tab" href="#Infrastructure" role="tab" aria-controls="Infrastructure" aria-selected="false">Infrastructure</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo $service == 'gravel' ? 'show  active' : ''; ?>" id="gravel-tab" data-toggle="tab" href="#gravel" role="tab" aria-controls="gravel" aria-selected="false">Gravel & Quarry</a>
                                </li>
                                <li class="nav-item border-bottom-0">
                                    <a class="nav-link <?php echo $service == 'forestry' ? 'show  active' : ''; ?>" id="forestry-tab" data-toggle="tab" href="#forestry" role="tab" aria-controls="forestry" aria-selected="false">Forestry</a>
                                </li>
                            </ul>
                        </nav>
                        <!-- <a href="#" class="download-brouser">Download</a> -->
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="single-details">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade <?php echo $service == 'earthworks' ? 'show  active' : ''; ?>" id="earthworks" role="tabpanel" aria-labelledby="earthworks-tab">
                                <div class="details-wrap">
<<<<<<< HEAD
                                    <div class="details-thumb">
                                        <img src="./img/berkett-imgs/services-expanded/digger-hill.jpg" alt="">
                                    </div>
                                    <div class="details-info">
                                        <h3>Specialist Earthworks</h3>
                                        <p>Our expertise includes bulk earthworks, where we create large-scale building platforms tailored to your needs. We specialize in detailed footing excavation, ensuring the stability and durability of your structures from the ground up. Our team is well-equipped to handle large commercial operations, efficiently managing extensive projects with precision.</p>
                                    
                                    </div>
                                    <div class="details-info">
                                        <h3>Drainage</h3>
                                        <p>Drainage is a crucial aspect of our land development services. We implement effective drainage solutions to protect your property and maintain optimal conditions. Our carpark construction services ensure that your parking facilities are durable and well-designed, catering to all your parking requirements. Additionally, we excel in detailed hard landscaping, crafting intricate hardscape features that enhance both the aesthetic and functional aspects of your property.</p>
=======
                                    <div class="details-thumb" loading="lazy" width="730" height="337">
                                        <img src="./img/berkett-imgs/services-expanded/digger-hill.webp" alt="digger on hill" style="max-width: 730px; max-height: 337px;">
                                    </div>
                                    <div class="details-info">
                                        <h3>Specialist Earthworks</h3>
                                        <p>Our expertise includes bulk earthworks, where we create large-scale building platforms tailored to your needs. We specialise in detailed footing excavation, ensuring the stability and durability of your structures from the ground up. Our team is well-equipped to handle large commercial operations, efficiently managing extensive projects with precision.</p>
                                    
                                    </div>
                                    <div class="details-info">
                                        <!-- <h3>Drainage</h3> -->
                                        <p>Drainage is a crucial aspect of our land development services. We implement effective drainage solutions to protect your property.  Berketts also provides detailed hard landscaping, crafting intricate hardscape features that enhance both the aesthetic and functional aspects of your property.</p>
>>>>>>> 95f4483cb45d79ceb5594b502a81965eaf718c65
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade <?php echo $service == 'infrastructure' ? 'show  active' : ''; ?>" id="Infrastructure" role="tabpanel" aria-labelledby="infrastructure-tab">
                                <div class="details-wrap">
<<<<<<< HEAD
                                    <div class="details-thumb">
                                        <img src=" ./img/berkett-imgs/services-expanded/little-digger-blue.jpg" alt="">
                                    </div>
                                    <div class="details-info">
                                        <h3>Infrastructure</h3>
                                        <P>We excel in roading and carpark construction, creating durable and transportation and parking solutions. Our team also specializes in building retaining walls to enhance the stability and aesthetic appeal of your property. Additionally, we construct walkways and cycleways, promoting safe and accessible pathways for pedestrians and cyclists.</P>
=======
                                    <div class="details-thumb" loading="lazy" width="730" height="337">
                                        <img loading="lazy" src=" ./img/berkett-imgs/services-expanded/little-digger-blue.webp" alt="blue digger" style="max-width: 730px; max-height: 337px;">
                                    </div>
                                    <div class="details-info">
                                        <h3>Infrastructure</h3>
                                        <P>Our carpark construction services ensure that your parking facilities are durable and well-designed. The team also specialises in building retaining walls to enhance the stability and aesthetic appeal of your property. Additionally, we construct walkways and cycleways, promoting safe and accessible pathways for pedestrians and cyclists.
                                        </P>
>>>>>>> 95f4483cb45d79ceb5594b502a81965eaf718c65
                                    </div>
                                    <!-- <div class="details-info">
                                        <h3>Private Construction</h3>
                                    </div> -->
                                </div>
                            </div>
                            <div class="tab-pane fade <?php echo $service == 'gravel' ? 'show  active' : ''; ?>" id="gravel" role="tabpanel" aria-labelledby="gravel-tab">
                                <div class="details-wrap">
<<<<<<< HEAD
                                    <div class="details-thumb">
                                        <img src="./img/berkett-imgs/services-expanded/gravel-roadjpg.jpg" alt="">
=======
                                    <div class="details-thumb" loading="lazy" width="730" height="337">
                                        <img  loading="lazy" src="./img/berkett-imgs/services-expanded/gravel-roadjpg.webp" alt="road side" style="max-width: 730px; max-height: 337px;">
>>>>>>> 95f4483cb45d79ceb5594b502a81965eaf718c65
                                    </div>
                                    <div class="details-info">
                                        <h3>Gravel & Quarry</h3>
                                        <p>With two local quarries and mobile crushing and screening equipment, Berkett Contracting is equipped to provide bulk aggregate supply for a variety of needs. Whether it's for commercial construction, farming, or forestry operations, we ensure that you receive high-quality materials tailored to your specific requirements.
                                        </p>
                                    </div>
                                    <div class="details-info">
<<<<<<< HEAD
                                        <!-- <h3>Gravel Types</h3> -->
                                        <!-- <p>Two midst that won't place waters likeness. Them place good. Darkness meat
                                            moved creeping whales firmament light so were from and given saying light
                                            was his fruitful two. Creature saying in was heaven appear in dominion can't
                                            sixth heaven winged lights bearing evening likeness. Above man thing. Fourth
                                            lights. That had you're stars. You subdue form days years likeness female.
                                        </p> -->
=======
                                    <div class="details-info">
                                        <p>Please <a style="text-decoration: underline;" href="./contact.php">contact us</a> for prices</p>
                                </div>
>>>>>>> 95f4483cb45d79ceb5594b502a81965eaf718c65
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade  <?php echo $service == 'forestry' ? 'show  active' : ''; ?>" id="forestry" role="tabpanel" aria-labelledby="forestry-tab">
                                <div class="details-wrap">
<<<<<<< HEAD
                                    <div class="details-thumb">
                                        <img src="./img/berkett-imgs/services-expanded/Skid 3 bench.jpg" alt="">
                                    </div>
                                    <div class="details-info">
                                        <h3>Forestry</h3>
                                        <p>We specialize in road construction and management for forestry operations. Our services include forest engineering road design, skidder slash management, and expert post-harvest rehabilitation. We are dedicated to maintaining environmental integrity while optimizing road infrastructure to support efficient and sustainable forestry practices.
                                        </p>
                                    </div>
                                    <div class="details-info">
                                        <!-- <h3>Gravel Types</h3> -->
                                        <!-- <p>Two midst that won't place waters likeness. Them place good. Darkness meat
                                            moved creeping whales firmament light so were from and given saying light
                                            was his fruitful two. Creature saying in was heaven appear in dominion can't
                                            sixth heaven winged lights bearing evening likeness. Above man thing. Fourth
                                            lights. That had you're stars. You subdue form days years likeness female.
                                        </p> -->
                                    </div>
                                </div>
=======
                                    <div class="details-thumb" loading="lazy" width="730" height="337">
                                        <img loading="lazy" src="./img/berkett-imgs/services-expanded/Skid 3 bench.webp" alt="forestry skid site" style="max-width: 730px; max-height: 337px;">
                                    </div>
                                    <div class="details-info">
                                        <h3>Forestry</h3>
                                        <p>We specialise in road construction and management for forestry operations. Our services include forest roading, slash management, and post-harvest rehabilitation. We are dedicated to maintaining environmental integrity while optimising road infrastructure to support efficient and sustainable forestry practices.
                                        </p>
                                    </div>

>>>>>>> 95f4483cb45d79ceb5594b502a81965eaf718c65
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
=======
</div>

>>>>>>> 95f4483cb45d79ceb5594b502a81965eaf718c65

    