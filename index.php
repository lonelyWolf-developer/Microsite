<?php

session_start();

$date = new DateTime();
$aktualDate = $date->format("Y");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/queryes.css">
    <link rel="stylesheet" href="./css/lightbox.css">

    <link rel="shortcut icon" href="./img/muffinIco.ico" type="image/x-icon">

    <title>Pečeme s láskou</title>
</head>

<body>

    <?php require "assets/userMessage.php" ?>

    <header>
        <nav>
            <ul>
                <li><a href="#weDo" id="1" class="navLink">Co děláme</a></li>
                <li><a href="#weAre" id="2" class="navLink">Kdo jsme</a></li>
                <li><a href="#ref" id="3" class="navLink">Foto</a></li>
                <li><a href="#ord" id="4" class="navLink">Objednávka</a></li>
                <li><a href="#con" id="5" class="navLink">Kontakt</a></li>
            </ul>
        </nav>

        <div class="mainHeaderContainer">
            <h1>Pečeme s láskou</h1>
            <h2>Objednejte si u nás domácí pečivo</h2>
        </div>
    </header>

    <main>
        <section class="whatWeDo" id="weDo">
            <h1 class="sectionHeader">Co děláme</h1>
            <div class="text">
                <p><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio impedit, vitae libero et at hic
                        laudantium quia provident ducimus nulla magni ratione delectus deserunt ipsa eum voluptas
                        explicabo culpa deleniti.</span><span>Eos quasi quia, voluptatum minus dicta nostrum, beatae
                        possimus, exercitationem dolor excepturi dolorum rem iusto ipsa nesciunt atque praesentium
                        aliquam ea et odit aperiam. Quibusdam hic nihil illum explicabo totam!</span><span>Aliquid
                        tenetur eius explicabo sunt amet magni repellendus cumque earum illo et. Excepturi blanditiis
                        molestias non provident obcaecati dignissimos eveniet! Necessitatibus distinctio unde deleniti.
                        Minima labore doloremque quas distinctio assumenda?</span><span>Nobis neque quas delectus
                        explicabo, molestias mollitia id, error sed officiis maxime, rerum modi! Voluptatum pariatur non
                        atque magnam, voluptas facere hic quos perferendis debitis provident consequatur eaque omnis
                        reprehenderit.</span><span>Repudiandae itaque nam, sit ratione amet blanditiis hic nostrum
                        omnis! Molestias veniam tempora soluta aut culpa, illo repellat voluptates animi corporis
                        nostrum alias, hic ducimus ab maxime iusto porro. In!</span></p>
            </div>
        </section>
        <section class="whoWeAre" id="weAre">
            <h1 class="sectionHeader">Kdo jsme</h1>
            <div class="text">
                <p><span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum doloribus magnam, rem ex
                        numquam quia unde repudiandae? Labore similique aperiam fugiat consequatur dolorem, doloremque
                        officia possimus, nesciunt et repellendus minima.</span><span>Eius voluptatem exercitationem
                        itaque voluptate recusandae consequuntur. Vero hic perspiciatis placeat aliquid nam libero
                        fugit, dolores harum assumenda quam dolor odit ex soluta dolorem voluptatibus, corporis est
                        repellat quas maxime?</span><span>Porro consectetur eius voluptatem dolorum. Neque ab dolorem
                        ullam culpa. Sapiente eius reprehenderit dolorem expedita, nihil ipsa perferendis maxime
                        corporis tenetur alias laboriosam eveniet quaerat consequatur, necessitatibus quibusdam placeat
                        illo?</span><span>Optio laboriosam vitae quas qui iste deleniti cum accusantium explicabo fugiat
                        blanditiis dolorum excepturi eveniet ad nemo illum, tenetur perspiciatis quia. Eum esse aut
                        autem exercitationem porro dicta iure commodi.</span><span>Fuga laborum quidem ducimus vel
                        quaerat? Saepe ducimus minima repellat tempora maxime dolore quaerat, doloremque, soluta
                        repudiandae velit vero facilis magnam error aut dicta eligendi similique, officia illo nam
                        culpa!</span></p>
            </div>
        </section>
        <section class="referention" id="ref">
            <div class="photos">
                <div class="row">
                    <div class="photo">
                        <a href="./img/smallCake.jpg" data-lightbox="roadtrip"
                            data-title="Naše pečivo..."><img src="./img/smallCake.jpg" alt="cake"></a>
                    </div>
                    <div class="photo">
                        <a href="./img/smallCake.jpg" data-lightbox="roadtrip"
                            data-title="Naše pečivo..."><img src="./img/smallCake.jpg" alt="cake"></a>
                    </div>
                </div>
                <div class="row">
                    <div class="photo">
                        <a href="./img/smallCake.jpg" data-lightbox="roadtrip"
                            data-title="Naše pečivo..."><img src="./img/smallCake.jpg" alt="cake"></a>
                    </div>
                    <div class="photo">
                        <a href="./img/smallCake.jpg" data-lightbox="roadtrip"
                            data-title="Naše pečivo..."><img src="./img/smallCake.jpg" alt="cake"></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="order" id="ord">
            <h1 class="sectionHeader">Objednejte si cukroví</h1>
            <form action="assets/sentOrder.php" method="post">
                <input type="text" name="name" placeholder="Jméno" required>
                <input type="text" name="surname" placeholder="Příjmení" required>
                <input type="tel" name="phone" placeholder="Telefon" required>
                <input type="email" name="email" placeholder="Email" required>

                <div class="cakeNumber">
                    <label for="candy">Cukroví - <span id="candyPrice">250</span>Kč/bal</label>
                    <input type="number" name="candy" id="candy">
                </div>
                <div class="cakeNumber">
                    <label for="roulade">Roláda - <span id="rouladePrice">200</span>Kč/ks</label>
                    <input type="number" name="roulade" id="roulade">
                </div>
                <div class="cakeNumber">
                    <label for="cake">Dort - <span id="cakePrice">300</span>Kč/ks</label>
                    <input type="number" name="cake" id="cake">
                </div>

                <p id="completelyPrice"></p>

                <input type="submit" value="Odeslat">
            </form>
        </section>
        <section class="contact" id="con">
            <h1 class="sectionHeader">Napište nám</h1>
            <form action="assets/mailer.php" method="post">
                <input type="text" name="name" placeholder="Jméno a příjmení" required>
                <input type="email" name="email" placeholder="Email" required>
                <textarea name="message" placeholder="Text zprávy..." required></textarea>
                <input type="submit" value="Odeslat">
            </form>
        </section>
    </main>

    <footer>
        <p>&copy;
            <?= $aktualDate ?> Pečeme s láskou
        </p>
    </footer>

    <script src="./js/messageBox.js"></script>
    <script src="./js/changeActiveClass.js"></script>
    <script src="./js/lightbox-plus-jquery.js"></script>
    <script src="./js/orderPrice.js"></script>

</body>

</html>