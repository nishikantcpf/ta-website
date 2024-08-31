<?php
// Sample PHP code to demonstrate dynamic content generation
$director_general = [
    'name' => 'Lieutenant General Vivek Kashyap, AVSM, VSM',
    'commissioned' => '1987 in 6 LANCERS of Indian Army',
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Territorial Army</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .header-banner {
            background-color: #000;
            color: #FFD700;
            padding: 10px 0;
        }
        .navbar-dark .navbar-nav .nav-link {
            color: #FFD700;
        }
        .dropdown-menu {
            background-color: #343a40;
        }
        .dropdown-item {
            color: #FFD700;
        }
        .dropdown-item:hover {
            background-color: #495057;
            color: #FFD700;
        }
        .code-of-cavalier {
            background-color: #8B0000;
            color: #FFF;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <header class="header-banner">
        <div class="container">
            <div class="col-12 row align-items-center">
                <!-- <div class="col-md-8">
                    <h1>Directorate General of Armoured Corps</h1>
                </div>
                <div class="col-md-4 text-end">
                    <img src="path_to_indian_army_logo.png" alt="Indian Army Logo" height="50">
                </div> -->
                <img src="./img/banner.jpg" alt="Indian Army Logo" >
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About Us
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">History</a></li>
                            <li><a class="dropdown-item" href="#">Organization</a></li>
                            <li><a class="dropdown-item" href="#">Leadership</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Heritage
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                            <li><a class="dropdown-item" href="#">Infantry</a></li>
                            <li><a class="dropdown-item" href="#">Artillery</a></li>
                            <li><a class="dropdown-item" href="#">Armoured</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Directorate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">TA GP HQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Awards</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Policy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Units</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Awards</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Army Web</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bidding Adieu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Postings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Paramount Card</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Important Links</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="code-of-cavalier text-center">
        <h2>CODE OF THE CAVALIER</h2>
        <p>I am a Warrior. Defending the Nation is my Dharma. I will train my Mind, Body and Spirit to Fight to Win. Excel in all Devices especially in the ultimate Weapon of War 'The Tank'. Be Humane, Cultured and Compassionate. Fight and embrace the consequences willingly. God give me strength that I ask nothing of you.</p>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <h3>DIRECTOR GENERAL TERRITORIAL ARMY(DG TA)</h3>
                <img src="./img/goc1.JPG" alt="Director General" class="img-fluid mb-3">
                <p><strong><?php echo $director_general['name']; ?></strong> was commissioned in <?php echo $director_general['commissioned']; ?></p>
                

            </div>
            <div class="col-md-4">
                <h3>Vision</h3>
                <p><?php echo $vision; ?></p>
            </div>
            <div class="col-md-4">
                <h3>Thrust Areas</h3>
                <ol>
                    <?php foreach ($thrust_areas as $area): ?>
                        <li><?php echo $area; ?></li>
                    <?php endforeach; ?>
                </ol>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>