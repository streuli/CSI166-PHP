<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>View Your Settings</title>
        <style type="text/css">
            body {
                <?php
                if (isset($_COOKIE['font_size'])) {
                    print "\t\tfont-size: " . htmlentities($_COOKIE["font_size"]) .";\n";
                }else {
                    print "\t\tcolor: #000;";
                }

                if (isset($_COOKIE["font_color"])) {
                    print "\t\tcolor: #". htmlentities($_COOKIE["font_color"]) .";\n";
                } else {
                    print "\t\tcolor: #000;";
                }

                ?>
            }
        </style>
    </head>
    <body>
        <p><a href="customize2.php">customize Your Settings</a></p>
        <p><a href="reset.php">Reset Your Settings</a></p>

        <p>The criminal justice system serves as a vital component of modern society,
            designed to maintain law and order while ensuring the protection of citizens'
            rights and freedoms. Encompassing law enforcement, courts, and corrections,
            this multifaceted system aims to deter criminal behavior, apprehend and prosecute
            lawbreakers, and rehabilitate offenders. At its core, the criminal justice system
            strives to balance the need for public safety with the principles of fairness
            and justice, as enshrined in the Constitution. However, it is an ever-evolving
            institution that continually grapples with issues such as racial bias, mass incarceration,
            and recidivism, prompting ongoing debates about the effectiveness of various policies
            and practices. Ultimately, the pursuit of a just and equitable criminal justice
            system is critical to fostering a society where the rule of law is respected,
            and all individuals can live in peace and security.</p>
    </body>
</html>
