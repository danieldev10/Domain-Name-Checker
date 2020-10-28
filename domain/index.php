<!DOCTYPE html>
<html lang="en">

<head>
    <title>Domain Name Checker</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta charset="UTF-8">
    <meta name="description" content="Domain Name Checker">
</head>

<body>
    <div class="wrapper">
        <h2>Check Domain Name Availability</h2>
        <p style="text-align: center;">(Include your chosen extension. e.g: .com, .net, .org, .dev)</p>
        <div class="container">
            <form action="" method="GET">
                <input id="searchBar" class="searchbar" type="text" name="domain" placeholder="Search domain name..." value="<?php if (isset($_GET['domain'])) {
                                                                                                                                    echo $_GET['domain'];
                                                                                                                                } ?>">
                <button type="submit" id="btnSearch" class="btn-search"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    </div>
    <?php
    error_reporting(0);
    if (isset($_GET['domain'])) {
        $domain = $_GET['domain'];
        if (gethostbyname($domain) != $domain) {
            echo "<h3 class='fail'>Domain Already Registered!</h3>";
        } else {
            echo "<h3 class='success'>Domain is available!, you can register it.</h3>" .
                "<br><div class='buy-text'>
                    <p>Purchase</p>
                </div>
                <div class='buy-btns'>
                    <div class='one'>
                        <a class='btn btn-primary' role='button' href='https://uk.godaddy.com/domainsearch/find?checkAvail=1&domainToCheck=$domain'>GoDaddy</a>
                    </div>
                    <div class='two'>
                        <a class='btn btn-danger' role='button' href='https://www.namecheap.com/domains/registration/results/?domain=$domain'>Namcheap</a>
                    </div>
                    <div class='three'>
                        <a class='btn btn-success' role='button' href='https://domains.google.com/registrar/search?searchTerm=$domain&hl=en&_ga=2.216017938.582054059.1603840231-449656156.1603840231#'>Google</a>
                    </div>
                    <div class='four'>
                        <a class='btn btn-primary' role='button' href='https://www.bluehost.com/registration?__token_timestamp__=1603840342&__token_val__=40ee1cdac45898bd440f0a87946ebf9f&flow=domainDFETwoCta&search=$domain&submit=#/domainDFETwoCta/1'>Bluehost</a>
                    </div>
                    <div class='five'>
                        <a class='btn btn-success' role='button' href='https://www.name.com/domain/search/$domain'>Name.com</a>
                    </div>
                </div>
                ";
        }
    }
    ?>
    <br>
    <footer class="page-footer font-small blue">
        <div class="footer-copyright text-center py-3">© <?php echo date("Y")?>Made by 
            <a href="https://twitter.com/iamdanieltk">Daniel</a>
        </div>
    </footer>
</body>

</html>
