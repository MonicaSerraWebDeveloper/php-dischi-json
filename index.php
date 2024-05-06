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
        <ul v-for="disc in allDisc">
            <li><img :src="disc.poster" alt=""></li>
            <li>{{ disc.title }}</li>
            <li>{{ disc.author }}</li>
            <li>{{ disc.year }}</li>
        </ul>
    </div>
    <script src="js/script.js"></script>
</body>
</html>