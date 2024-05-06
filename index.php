<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi JSON</title>
    <!-- Script di Vue  -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- /Script di Vue  -->
    <!-- Axios CDN  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- /Axios CDN  -->
    <!-- Foglio di stile  -->
    <link rel="stylesheet" href="./style/style.css">
    <!-- /Foglio di stile  -->

</head>
<body>

    <div id="app">
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-100">
                        <div class="image-container">
                            <img src="./img/spotify_logo.png" alt="spotify-logo">
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <div class="container">
                <div class="row grid-container">
                    <div class="col-33 grid" v-for="disc, indexDisc in allDisc">
                        <div class="image-disc-container">
                            <img :src="disc.poster" alt="">
                        </div>
                        <div class="info-disc-container">
                            <h2>{{ disc.title }}</h2>
                            <h4>{{ disc.author }}</h4>
                            <div class="year-text">{{ disc.year }}</div>
                        </div>
                    </div>
                </div>
            </div>
            
        </main>
        
    </div>
    <script src="js/script.js"></script>
</body>
</html>