<?php 
if(session_status() == PHP_SESSION_NONE){
    session_start();
}

?> 


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-5e2ESR8Ycmos6g3gAKr1Jvwye8sW4U1u/cAKulfVJnkakCcMqhOudbtPnvJ+nbv7" crossorigin="anonymous">

    
    <title>Quentin Prod, DJ pour vos évenements </title>
</head>
<body>


<header class="header" style="background-image: url('<?php echo $headerImage; ?>');">
    <div class="menu">
        
        <div class="logo">
            <svg class="svg-logo" width="200" height="34" viewBox="0 0 237 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.16 33.28V21.56H16.6V33.28H12.16ZM14.28 2.08C16.2267 2.08 18.0267 2.45333 19.68 3.2C21.36 3.92 22.8133 4.92 24.04 6.2C25.2667 7.45333 26.2267 8.93333 26.92 10.64C27.6133 12.3467 27.96 14.1733 27.96 16.12C27.96 18.04 27.6 19.84 26.88 21.52C26.1867 23.2 25.2133 24.68 23.96 25.96C22.7333 27.2133 21.2933 28.2 19.64 28.92C17.9867 29.64 16.2 30 14.28 30C12.3867 30 10.6 29.64 8.92 28.92C7.24 28.2 5.77333 27.2133 4.52 25.96C3.26667 24.7067 2.26667 23.24 1.52 21.56C0.8 19.8533 0.44 18.04 0.44 16.12C0.44 14.1733 0.8 12.3467 1.52 10.64C2.24 8.90667 3.21333 7.41333 4.44 6.16C5.69333 4.90667 7.16 3.92 8.84 3.2C10.52 2.45333 12.3333 2.08 14.28 2.08ZM14.28 25.52C15.56 25.52 16.7733 25.28 17.92 24.8C19.0667 24.32 20.0667 23.6533 20.92 22.8C21.7733 21.9467 22.44 20.96 22.92 19.84C23.4267 18.6933 23.68 17.4533 23.68 16.12C23.68 14.7867 23.44 13.5467 22.96 12.4C22.48 11.2267 21.8133 10.2133 20.96 9.36C20.1333 8.48 19.1467 7.8 18 7.32C16.8533 6.81333 15.6133 6.56 14.28 6.56C12.9733 6.56 11.7467 6.81333 10.6 7.32C9.45333 7.82667 8.45333 8.52 7.6 9.4C6.77333 10.2533 6.12 11.2667 5.64 12.44C5.16 13.5867 4.92 14.8133 4.92 16.12C4.92 17.4 5.16 18.6133 5.64 19.76C6.14667 20.88 6.82667 21.88 7.68 22.76C8.53333 23.6133 9.52 24.2933 10.64 24.8C11.7867 25.28 13 25.52 14.28 25.52ZM47.4916 21.84C47.4916 23.12 47.2516 24.2667 46.7716 25.28C46.3182 26.2667 45.6916 27.1067 44.8916 27.8C44.1182 28.4933 43.2116 29.0267 42.1716 29.4C41.1316 29.7733 40.0249 29.9733 38.8516 30C37.6782 29.9733 36.5582 29.7867 35.4916 29.44C34.4516 29.0667 33.5316 28.5333 32.7316 27.84C31.9582 27.1467 31.3316 26.3067 30.8516 25.32C30.3982 24.3067 30.1716 23.1467 30.1716 21.84V2.08H34.6116V21.64C34.6116 22.92 35.0116 23.8933 35.8116 24.56C36.6382 25.2267 37.6516 25.56 38.8516 25.56C40.0516 25.5333 41.0516 25.1867 41.8516 24.52C42.6516 23.8533 43.0516 22.8933 43.0516 21.64V2.08H47.4916V21.84ZM66.1834 2.08V6.56H56.2634V11.44H61.5434V15.96H56.2634V25.56H66.1834V30H51.8234V2.08H66.1834ZM69.2044 2.08H73.6844V3.04C74.2444 2.74666 74.8444 2.52 75.4844 2.36C76.151 2.17333 76.791 2.08 77.4044 2.08C78.6044 2.08 79.7377 2.26667 80.8044 2.64C81.8977 2.98667 82.8444 3.50667 83.6444 4.2C84.4444 4.86667 85.0844 5.70667 85.5644 6.72C86.0444 7.73333 86.2844 8.89333 86.2844 10.2V30H81.8444V10.44C81.8444 9.16 81.431 8.18667 80.6044 7.52C79.7777 6.85333 78.7644 6.52 77.5644 6.52C77.111 6.52 76.6577 6.6 76.2044 6.76C75.7777 6.89333 75.3777 7.09333 75.0044 7.36C74.6577 7.62666 74.351 7.94666 74.0844 8.32C73.8444 8.69333 73.711 9.10667 73.6844 9.56V30H69.2044V2.08ZM103.141 2.08V6.56H96.9813V30H92.5013V6.56H86.4212V2.08H103.141ZM105.339 30V2.08H109.779V30H105.339ZM115.142 2.08H119.622V3.04C120.182 2.74666 120.782 2.52 121.422 2.36C122.089 2.17333 122.729 2.08 123.342 2.08C124.542 2.08 125.675 2.26667 126.742 2.64C127.835 2.98667 128.782 3.50667 129.582 4.2C130.382 4.86667 131.022 5.70667 131.502 6.72C131.982 7.73333 132.222 8.89333 132.222 10.2V30H127.782V10.44C127.782 9.16 127.369 8.18667 126.542 7.52C125.715 6.85333 124.702 6.52 123.502 6.52C123.049 6.52 122.595 6.6 122.142 6.76C121.715 6.89333 121.315 7.09333 120.942 7.36C120.595 7.62666 120.289 7.94666 120.022 8.32C119.782 8.69333 119.649 9.10667 119.622 9.56V30H115.142V2.08ZM153.058 2.08C154.045 2.08 154.965 2.29333 155.818 2.72C156.672 3.14667 157.405 3.70667 158.018 4.4C158.658 5.09333 159.152 5.90667 159.498 6.84C159.845 7.74667 160.005 8.69333 159.978 9.68C159.952 10.8533 159.752 11.9067 159.378 12.84C159.005 13.7467 158.498 14.52 157.858 15.16C157.218 15.8 156.472 16.2933 155.618 16.64C154.765 16.9867 153.845 17.16 152.858 17.16H148.098V30H143.658V2.08H153.058ZM152.698 12.76C153.552 12.76 154.232 12.5067 154.738 12C155.245 11.4933 155.525 10.7733 155.578 9.84C155.605 9.41333 155.552 9.01333 155.418 8.64C155.312 8.24 155.125 7.89333 154.858 7.6C154.618 7.28 154.312 7.02667 153.938 6.84C153.592 6.65333 153.205 6.56 152.778 6.56H148.098V12.76H152.698ZM171.418 2.08C172.378 2.08 173.284 2.29333 174.138 2.72C174.991 3.14667 175.738 3.70667 176.378 4.4C177.018 5.09333 177.511 5.90667 177.858 6.84C178.204 7.74667 178.364 8.69333 178.338 9.68C178.311 11.7867 177.711 13.5067 176.538 14.84L182.098 30H177.338L172.658 17.08C172.444 17.1333 172.218 17.16 171.978 17.16C171.738 17.16 171.484 17.16 171.218 17.16H166.458V30H162.018V2.08H171.418ZM171.058 12.76C171.884 12.76 172.551 12.5067 173.058 12C173.591 11.4933 173.884 10.7733 173.938 9.84C173.991 8.98667 173.751 8.22667 173.218 7.56C172.684 6.89333 171.991 6.56 171.138 6.56H166.458V12.76H171.058ZM194.514 2.08C196.461 2.08 198.261 2.45333 199.914 3.2C201.594 3.92 203.048 4.92 204.274 6.2C205.501 7.45333 206.461 8.93333 207.154 10.64C207.848 12.3467 208.194 14.1733 208.194 16.12C208.194 18.04 207.834 19.84 207.114 21.52C206.421 23.2 205.448 24.68 204.194 25.96C202.968 27.2133 201.528 28.2 199.874 28.92C198.221 29.64 196.434 30 194.514 30C192.621 30 190.834 29.64 189.154 28.92C187.474 28.2 186.008 27.2133 184.754 25.96C183.501 24.7067 182.501 23.24 181.754 21.56C181.034 19.8533 180.674 18.04 180.674 16.12C180.674 14.1733 181.034 12.3467 181.754 10.64C182.474 8.90667 183.448 7.41333 184.674 6.16C185.928 4.90667 187.394 3.92 189.074 3.2C190.754 2.45333 192.568 2.08 194.514 2.08ZM194.514 25.52C195.794 25.52 197.008 25.28 198.154 24.8C199.301 24.32 200.301 23.6533 201.154 22.8C202.008 21.9467 202.674 20.96 203.154 19.84C203.661 18.6933 203.914 17.4533 203.914 16.12C203.914 14.7867 203.674 13.5467 203.194 12.4C202.714 11.2267 202.048 10.2133 201.194 9.36C200.368 8.48 199.381 7.8 198.234 7.32C197.088 6.81333 195.848 6.56 194.514 6.56C193.208 6.56 191.981 6.81333 190.834 7.32C189.688 7.82667 188.688 8.52 187.834 9.4C187.008 10.2533 186.354 11.2667 185.874 12.44C185.394 13.5867 185.154 14.8133 185.154 16.12C185.154 17.4 185.394 18.6133 185.874 19.76C186.381 20.88 187.061 21.88 187.914 22.76C188.768 23.6133 189.754 24.2933 190.874 24.8C192.021 25.28 193.234 25.52 194.514 25.52ZM215.166 2.08C217.086 2.08 218.886 2.45333 220.566 3.2C222.246 3.92 223.699 4.90667 224.926 6.16C226.179 7.41333 227.166 8.90667 227.886 10.64C228.606 12.3467 228.966 14.1733 228.966 16.12C228.966 18.04 228.593 19.8533 227.846 21.56C227.126 23.24 226.139 24.7067 224.886 25.96C223.633 27.2133 222.166 28.2 220.486 28.92C218.806 29.64 217.019 30 215.126 30H210.926V2.08H215.166ZM218.766 7.32C217.753 6.84 216.633 6.58667 215.406 6.56V25.52C216.633 25.4933 217.793 25.2267 218.886 24.72C220.006 24.1867 220.979 23.4933 221.806 22.64C222.633 21.7867 223.286 20.8 223.766 19.68C224.246 18.56 224.486 17.3733 224.486 16.12C224.486 15.1333 224.339 14.1867 224.046 13.28C223.779 12.3733 223.393 11.5467 222.886 10.8C222.406 10.0267 221.806 9.34667 221.086 8.76C220.393 8.17333 219.619 7.69333 218.766 7.32Z" fill="black"/>
            </svg>

        </div>

        <button class="menuToggle" aria-label="Toggle navigation">
            ☰
        </button>
        <nav class="mobileNav">
            <button class="closeMenu" aria-label="Close menu">✖</button>
            <ul>
                <li><a href="../index.php">ACCUEIL</a></li>
                <li><a href="../public/apropos.php">A PROPOS</a></li>
                <li>
                    <a href="#" id="prestations">PRESTATIONS</a>
                    <ul class="dropdownMenu">
                        <li><a href="../public/prestationMariage.php">Mariages</a></li>
                        <li><a href="../public/prestationBapteme.php">Baptêmes</a></li>
                        <li><a href="../public/prestationAnniversaire.php">Anniversaires</a></li>
                    </ul>
                </li>
                <li><a href="../public/contact.php">CONTACTEZ-NOUS</a></li>
                <li><a href="../public/login.php">ESPACE ADMIN</a></li>
            </ul>
        </nav>
        <nav class="desktopNav">
            <ul>
                <li><a href="../index.php">ACCUEIL</a></li>
                <li><a href="../public/apropos.php">A PROPOS</a></li>
                <li class="dropdown">
                    <a href="#" id="prestations">PRESTATIONS</a>
                    <ul class="dropdownMenu">
                        <li><a href="../public/prestationMariage.php">Mariages</a></li>
                        <li><a href="../public/prestationBapteme.php">Baptêmes</a></li>
                        <li><a href="../public/prestationAnniversaire.php">Anniversaires</a></li>
                    </ul>
                </li>
                <li><a href="../public/contact.php">CONTACTEZ-NOUS</a></li>
                <li><a href="../public/login.php">ESPACE ADMIN</a></li>
            </ul>
        </nav>
    </div>

    <div class="hero">
        <?= $titre ?>
    </div>
</header>


<main>
    <?= $content ?>
</main>


<footer>
    <h3>Ils nous recommande !</h1>

    <script>
        const placeId = '0x25dd7d79d42de9ab:0xa0c73fcd79879d48'; 
        const apiKey = 'AIzaSyCbP622jFz7xxdo9L4ipxrltgWjOyo0PWw'; 

        fetch(`https://maps.googleapis.com/maps/api/place/details/json?place_id=${placeId}&fields=reviews&key=${apiKey}`)
            .then(response => response.json())
            .then(data => {
                const avisDiv = document.getElementById('avis');
                const reviews = data.result.reviews;

                if (reviews) {
                    reviews.forEach(review => {
                        const reviewElement = document.createElement('div');
                        reviewElement.innerHTML = `<h3>${review.author_name}</h3><p>${review.text}</p><p>Note: ${review.rating}</p>`;
                        avisDiv.appendChild(reviewElement);
                    });
                } else {
                    avisDiv.innerHTML = '<p>Aucun avis disponible.</p>';
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
            });

        


    </script>
    
    
    <div class="footer"> 
        <div class="containerPresentation">
         <div class="logo">QUENTIN PROD</div>
            <div class="reseauxSociaux">
                <a href="https://www.facebook.com/people/Quentin-Prod/100090704970281/?_rdr" class="facebook" target="_blank" > 
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg> 
                </a>
                <a href="https://www.instagram.com/quentin_prod59/" class="instagram" target="_blank" > 
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> <path d="M194.4 211.7a53.3 53.3 0 1 0 59.3 88.7 53.3 53.3 0 1 0 -59.3-88.7zm142.3-68.4c-5.2-5.2-11.5-9.3-18.4-12c-18.1-7.1-57.6-6.8-83.1-6.5c-4.1 0-7.9 .1-11.2 .1c-3.3 0-7.2 0-11.4-.1c-25.5-.3-64.8-.7-82.9 6.5c-6.9 2.7-13.1 6.8-18.4 12s-9.3 11.5-12 18.4c-7.1 18.1-6.7 57.7-6.5 83.2c0 4.1 .1 7.9 .1 11.1s0 7-.1 11.1c-.2 25.5-.6 65.1 6.5 83.2c2.7 6.9 6.8 13.1 12 18.4s11.5 9.3 18.4 12c18.1 7.1 57.6 6.8 83.1 6.5c4.1 0 7.9-.1 11.2-.1c3.3 0 7.2 0 11.4 .1c25.5 .3 64.8 .7 82.9-6.5c6.9-2.7 13.1-6.8 18.4-12s9.3-11.5 12-18.4c7.2-18 6.8-57.4 6.5-83c0-4.2-.1-8.1-.1-11.4s0-7.1 .1-11.4c.3-25.5 .7-64.9-6.5-83l0 0c-2.7-6.9-6.8-13.1-12-18.4zm-67.1 44.5A82 82 0 1 1 178.4 324.2a82 82 0 1 1 91.1-136.4zm29.2-1.3c-3.1-2.1-5.6-5.1-7.1-8.6s-1.8-7.3-1.1-11.1s2.6-7.1 5.2-9.8s6.1-4.5 9.8-5.2s7.6-.4 11.1 1.1s6.5 3.9 8.6 7s3.2 6.8 3.2 10.6c0 2.5-.5 5-1.4 7.3s-2.4 4.4-4.1 6.2s-3.9 3.2-6.2 4.2s-4.8 1.5-7.3 1.5l0 0c-3.8 0-7.5-1.1-10.6-3.2zM448 96c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96zM357 389c-18.7 18.7-41.4 24.6-67 25.9c-26.4 1.5-105.6 1.5-132 0c-25.6-1.3-48.3-7.2-67-25.9s-24.6-41.4-25.8-67c-1.5-26.4-1.5-105.6 0-132c1.3-25.6 7.1-48.3 25.8-67s41.5-24.6 67-25.8c26.4-1.5 105.6-1.5 132 0c25.6 1.3 48.3 7.1 67 25.8s24.6 41.4 25.8 67c1.5 26.3 1.5 105.4 0 131.9c-1.3 25.6-7.1 48.3-25.8 67z"/></svg>
                </a>
                <a href="https://www.tiktok.com/@quentin.prod?lang=de-DE" class="tiktok" target="_blank" >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"/></svg> 
                </a>
            </div>
        </div>
        <div class="containerService">
            <h3>Nos services</h3>
            <ul>
                <li><a href="../public/prestationMariage.php">Mariage</a></li>
                <li><a href="../public/prestationAnniversaire.php">Anniversaire</a></li>
                <li><a href="../public/prestationBapteme.php">Bapteme</a></li>
                <li><a href="../public/contact.php">Autre demande</a></li>
            </ul>
        </div>
        <div class="containerLiens">
            <h3>Home</h3>
            <ul>
                <li><a href="../index.php">Accueil</a></li>
                <li><a href="../public/apropos.php">A propos</a></li>
                <li><a href="../public/contact.php">Contact</a></li>
                <li><a href="../public/login.php">Se connecter</a></li>
            </ul>
        </div>
        <div class="mentionsLegales">
            <ul>
                <li><a href="../public/cookies.php">Cookies</a></li>
                <li><a href="../public/politiqueConfidentialite.php">Politique de confidentialité</a></li>
                <li><a href="../public/mentionlegales.php">Mentions légales</a></li>
            </ul>
        </div>
    </div>

    </div>
</footer>



<script src="../public/js/style.js"></script>   
</body>
</html>