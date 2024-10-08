<?php

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dishi Json PHP</title>

        <!--Bootrsap CDN-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        
    </head>
    <body>
        
        <header class="py-3 my-3">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1>
                            JSON DISCHI
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main id="app">
            <div class="container">
                <div class="row g-3">
                    <div v-for="disc in discs" class="col-12 col-sm-6 col-md-4">
                        <div class="card">
                            <div class=" card-body text-center">
                                <div>
                                    <img :src="disc.poster" :alt="disc.title" class="w-100">
                                </div>

                                <h2>
                                    {{ disc.title }}
                                </h2>
                                <h4>
                                    {{ disc.author }}
                                </h4>
                                <h5>
                                    {{ disc.year }}
                                </h5>
                                <h6>
                                    {{ disc.genre }}
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
            


        <!--Vue CDN-->
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

        <!--Axios CDN-->
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

        <!--JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>