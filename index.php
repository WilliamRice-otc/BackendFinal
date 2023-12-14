<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Upcoming Games</title>
</head>
<body>
    <style>ul{list-style-type:none;}</style>
    <?php
        // include "View/nav.php";
        // include "View/loginform.php";


        switch($action){

            case "login":

                break;

            default: 
            // include "View/nav.php";
            include "View/loginform.php";
        }
    ?>
    <div id="gameInfo"></div>
    <script>
        function getGameData() {
            axios.get('gameapi.php')
                .then(function (response) {
                    const upcominggames = response.data;
                    // console.log(response.data);
                    let html = '<ul>';
                    upcominggames.forEach(games => {
                        html += `<li>${games.title} | ${games.genre} | ${games.releasedate}</li>`;
                    });
                    html += '</ul>';
                    document.getElementById('gameInfo').innerHTML = html;
                })
                .catch(function (error) {
                    console.log(response.data);
                    console.log("NOPE");
                });
        }
    function addUser($email){
        axios.get('addUser.php').then(
            function (response) {
                console.log(response.data);


        })
    }
        getGameData();
    </script>
</body>
</html>