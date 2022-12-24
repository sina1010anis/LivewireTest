import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler.js'
import ComponentsTest from './components/ComponentsTest';
import 'bootstrap/dist/css/bootstrap.css'
const app = createApp({
    data:()=>({
        version : '3-v'
    }),
    mounted() {

    },
    components:{
        ComponentsTest
    },
    methods:{
        MTMTest(){
            alert('test')
        }
    },


})
app.mount('#app')
