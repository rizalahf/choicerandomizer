<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="{{asset ('assets/image/icon.png')}}">
    <!-- style -->
    <link rel="stylesheet" href="{{asset ('assets/css/style.css')}}">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <!-- style -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <title>Choice randomizer</title>
</head>
<body>
    <div id="app">
        <div id="names" class="container animate__animated animate__fadeIn" v-if="state">
            <div class="logo">
                <img src="{{asset ('assets/image/image1.png')}}">
                <h1> Choice Randomizer </h1>
                <h2> Please write down what you want to randomize </h2>
            </div>
            <div class="input-container">
                <input type="text" v-model.trim="inputName" />
                <button @click="addNameToList()">Add</button>
            </div>
            <div class="error-label animate__animated animate__bounceIn" v-if="showError">
                @{{error}}
            </div>
            <div class="list-of-names">
            <div v-for="(name,index) in names" :key="name" @click="removeName(index)" 
            class="animate__animated animate__fadeIn">
                @{{name}}
            </div>
            </div>
            <div class="action-button animate__animated animate__swing" v-if="isReady" @click="showResult()">
            Let's Check!
            </div>
        </div>
        
        <div id="result" class="container animate__animated animate__fadeIn" v-if="!state">
            <div class="result-container">
                <h1>THE CHOSEN ONE IS :</h1>
                <div class="result-value">
                    @{{result}}
                </div>
                <div class="action-button" @click="resetApp()">
                    Try again!
                </div>
                <div class="action-button btn2" @click="getNewRandom()">
                    Change the chosen
                </div>

            </div>
        </div>

    </div>
    
</body>
<script src="{{asset ('assets/js/app.js')}}"></script>
</html>