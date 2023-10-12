<?php
/* Descrizione
Dobbiamo creare una web-app che permetta di leggere una lista di dischi presente nel nostro server.
Stack
Html, CSS, VueJS (importato tramite CDN), axios, PHP
Consigli
Nello svolgere l’esercizio seguite un approccio graduale.
Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a comunicare correttamente con il vostro script PHP (le vostre “API”).
Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.
Bonus (da fare entro domani prima della correzione)
Al click su un disco, recuperare e mostrare i dati del disco selezionato. */
?>


<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='./style.css' rel='stylesheet'>
</head>

<body>
    <div id='app'>
        <nav class="navbar navbar-expand navbar-dark bg-dark">
            <div class="nav navbar-nav">
                <a class="nav-item nav-link active" href="#" aria-current="page">Home <span class="visually-hidden">(current)</span></a>

            </div>
        </nav>
        <div class="container">

            <div class="row">
                <div v-for="(song, index) in songs" class="col-4 p-5" data-bs-toggle="modal" :data-bs-target="'#test' + index">
                    <div class="bg_card card text-center my-2">
                        <img class="card-img-top p-4" :src="song.poster" alt="Title">
                        <div class=" card-body">
                            <h4 class="card-title text-center">{{song.title}}</h4>
                            <p class="card-text text-center">{{song.author}}</p>
                            <p class="card-text text-center">{{song.year}}</p>

                        </div>
                    </div>
                    <div class="modal fade" :id="'test'+index" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class=" p-5">
                                    <div class="bg_card card text-center my-2">
                                        <img class="card-img-top p-4" :src="song.poster" alt="Title">
                                        <div class=" card-body">
                                            <h4 class="card-title text-center">{{song.title}}</h4>
                                            <p class="card-text text-center">{{song.author}}</p>
                                            <p class="card-text text-center">{{song.year}}</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Button trigger modal -->


            <!-- Modal -->

        </div>



    </div>


    <!-- Development only cdn, disable in production -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js" integrity="sha512-emSwuKiMyYedRwflbZB2ghzX8Cw8fmNVgZ6yQNNXXagFzFOaQmbvQ1vmDkddHjm5AITcBIZfC7k4ShQSjgPAmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src='./script.js'></script>
</body>

</html>