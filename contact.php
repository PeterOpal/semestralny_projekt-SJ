<!doctype html>
<html class="no-js" lang="en">

<?php
    include_once "parts/head.php";
    include_once "parts/header.php";
    include_once "functions.php";

    use tours\Functions;

    $tours = new Functions();
?>

<style>
    .sizeChange {
        font-size: 20px;
    }
    .index-border {
        height: auto;
        color: black;
        border-radius: 15px;
        text-align: center;
        background-color: rgb(240, 240, 240, 0.55);
    }

    img {
        height: 180px;
        margin-bottom: 50px;
    }

    @media only screen and (max-width: 1001px) {
        .map-responsive iframe {
            max-width: 100%;
        }
    }
</style>

<body>
<section id="blog" class="blog">
    <?php
        $class = ["container", "blog-details", "gallary-header text-center"];
        $tours->divClassGenerator($class);
    ?>
    <h2>Contact us</h2>
    <p>You can contact us in person, by email, by phone or book a trip instantly on the site!</p>
    </div>
    <?php
        $tours->divClassGenerator(["blog-content", "row index-border"]); ?>
    <div style="margin-top: 30px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d84911.7839176493!2d18.018266542721033!3d48.312596907357836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476b3ee0556593fd%3A0x400f7d1c6978bf0!2sNitra!5e0!3m2!1sen!2ssk!4v1669401039643!5m2!1sen!2ssk"
                width="600" height="450" style="border:0;" loading="lazy"
                referrerpolicy="no-referrer-when-downgrad" width="600" height="450" frameborder="0"
                style="border:0" allowfullscreen></iframe>
        <div class="row" style="margin-bottom: 30px;">
            <div class="col-sm-6 mt-6" style="padding-left: 30%;">
                <p class="sizeChange ">Opál Tours<br>
                    Trieda Andreja Hlinku 603/1, 949 74 <br>
                </p>
            </div>
            <div class="col-sm-3 mt-6">
                <p class="sizeChange">
                    IČO: 126835 <br>
                    IČ DPH: SK2365489
                </p>
            <?php
                $tours->divCloser(7);
            ?>
</section>
<?php
    $class = ["container", "blog-details", "gallary-header text-center"];
    $tours->divClassGenerator($class);
?>
<h2>Partners</h2>
<p style="margin-bottom: 30px;">We are in partnership with the following companies, who also offer discounts!</p>


<?php
    $tours->divClassGenerator(["container", "row"]);
    $src = [
        "https://logos-world.net/wp-content/uploads/2020/03/Emirates-Logo.png",
        "https://mirror-hotel.com/wp-content/uploads/2020/11/mirror-logo-bl-250-1.png",
        "https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Allianz_logo.svg/1200px-Allianz_logo.svg.png",
        "https://www.zssk.sk/wp-content/uploads/2021/06/20210610_Logo-ZSSK_1200x628px_v1-1.png",
        "https://www.logo-designer.co/storage/2018/02/2018-new-lufthansa-logo-design-airplane-livery-2.png",
        "https://play-lh.googleusercontent.com/gXMTIJ0CAnQ395b8ituTtGidnTTdQBIC6gIqojgePX-q-R-BK5CS72pIYudZcPnWHf0"
    ];
    foreach ($src as $item) {
        echo '<div class="col-md-4"><img src="' . $item . '"></div>';
    }
    $tours->divCloser(5);

    include_once "parts/footer.php";
    include_once "parts/script.php";
?>
</body>
</html>	