<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <div id="pesan"></div>
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
        <script>
            var url = "http://AlRahma.com"; // url tujuan
            var count = 10; // dalam detik
            function countDown() {
                if (count > 0) {
                    count--;
                    var waktu = count + 1;
                    $('#pesan').html('Anda akan di redirect ke ' + url + ' dalam ' + waktu + ' detik.');
                    setTimeout("countDown()", 1000);
                } else {
                    window.location.href = url;
                }
            }
            countDown();
        </script>
    </body>
</html>
