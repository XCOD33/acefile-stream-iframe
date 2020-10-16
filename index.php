<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iFrame Generator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="gaya.css">
    <link rel="stylesheet" href="responsive.css">
</head>

<body>
    <div class="header">
        <h1><a href="/">iFrame Generator Acefile</a></h1>
        <h2>Generate your Acefile URL to Acefile Stream.</h2>
    </div>
    <div class="mt-5"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm"></div>
            <div class="col-sm">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="GET">
                            <div class="form-group">
                                <label for="link">URL From Acefile :</label>
                                <input type="text" class="form-control" id="link" placeholder="https://acefile.co/f/xxx" name="link">
                                <div class="mt-3"></div>
                                <button type="submit" name="submit" class="btn btn-info copy">Generate</button>
                            </div>
                        </form>
                    </div>
                </div>
                <?php
                if (isset($_GET["submit"])) :
                    $link = $_GET["link"];
                    $link = str_replace("/f/", "/stream/", $link);
                ?>

                    <div class="mt-5"></div>
                    <div class="card">
                        <div class="card-body">
                            <div class="output">
                                <textarea class="form-control" id="pilih" rows="3">&lt;iframe src=&quot;<?php echo $link ?>&quot; frameborder=&quot;0&quot;&gt;&lt;/iframe&gt;</textarea>
                                <div class="mt-3"></div>
                                <button class="btn btn-secondary copy" type="button" onclick="copy_text()">Copy to Clipboard</button>
                            </div>
                        </div>
                    </div>
            </div>
        <?php endif; ?>
        <div class="col-sm">
        </div>
        </div>
    </div>

    <footer>
        <h1>iFrame Generator Acefile - Free Generate your Acefile URL to Acefile Stream.</h1>
        <p>
            <a href="/" target="_blank">Home</a> /
            <a href="https://www.ricoaditya.my.id/" target="_blank">About Me</a> /
            <a href="#" target="_blank">Terms of Use</a> /
            <a href="#" target="_blank">Privacy Policy</a>
        </p>
        <div class="copyright">
            <p>&copy; Copyright 2020 - <a href="https://github.com/XCOD33" target="_blank">XCOD33</a></p>
        </div>
    </footer>

    <script type="text/javascript">
        function copy_text() {
            document.getElementById("pilih").select();
            document.execCommand("copy");
            // alert("Teks Berhasil DIsalin Ke Clipboard.");
        }
    </script>

</body>

</script>

</html>