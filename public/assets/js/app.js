const app = Vue.createApp({
    data() {
        return {
            state: true, 
            inputName: '',
            names: [],
            error: 'error massage',
            showError: false,
            result: '',
        }
    },
    computed: {
        isReady() {
            return this.names.length > 1;
        }
    },
    methods: {
        addNameToList() {
            const username = this.inputName;
            if (this.validate(username)) {
                this.names.push(username);
                this.inputName = '';
                this.showError = false
                console.log(this.names)
            } else {
                this.showError = true
            }
        },
        validate(value) {
            this.error = '';
            if (value === '') {
                this.error = "Name can't empty"
                return false
            }
            if (this.names.includes(value)) {
                this.error = "Name must be unique"
                return false
            }
            return true
        },
        removeName(index) {
            this.names.splice(index, 1)
        },
        showResult() {
            this.generateResult();
            this.state = false;
        },
        getRandomName() {
            return this.names[Math.floor(Math.random() * this.names.length)]
        },
        generateResult() {
            let randName = this.getRandomName()
            if (this.result !== '') {
                while ( randName === this.result) {
                    randName === this.getRandomName()
                }
            }

            this.result = randName
        },
        resetApp() {
            this.state = true, 
            this.inputName = '',
            this.names = [],
            this.error = 'error massage',
            this.showError = false,
            this.result = ''
        },
        getNewRandom() {
            this.generateResult();
        }

    }

}).mount('#app')