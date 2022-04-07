<html>
<head>

</head>
        <body id="phpBody">
                <?php
                if ($connection=@mysqli_connect('localhost', 'username', 'passwd', 'RecyclingDB'))
                {
                        print '<p id="confirm">Successfully connected to MySQL. </p>';
                }

                mysqli_close($connection);

                ?>
        </body>
</html>
