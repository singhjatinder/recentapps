<template>
  <div id="app">
    <header>
      <nav>
        <router-link to="/">Home</router-link>
        <router-link to="/about">About</router-link>
        <router-link to="/EarlyLife">EarlyLife</router-link>
        <router-link to="/Education">Education</router-link>
        <router-link to="/Careers">Careers</router-link>
        <router-link to="/Resume">Resume</router-link>
        <router-link to="/Photography">Photography</router-link>
        <router-link to="/ContactMe">Contact Me</router-link>
        <a href="#" @click="fetchData">CLICK TO REFRESH TEMP</a>
      </nav>
    </header>
    <section class="row">
    <p >THE TEMP IN BOSTON IS: {{temp}} <sup>o</sup> F. Local time is: {{time}}</p>
    </section>
    <router-view/>
    <footer>
      &copy; 2020 Jay Singh
      <p class="printnotice">Prcdinted from jaysingh.net</p>
    </footer>
  </div>
</template>

<script>
  import axios from 'axios'
  export default {
    name: 'test',
    data() {
      return {
        dataURL: "http://api.openweathermap.org/data/2.5/weather?zip=02151,us&units=imperial&appid=e3d714ffae769daa703781d4d718e5ac",
        temp: '',
        time: new Date().getHours() + ':' + new Date().getMinutes() + ':' +new Date().getSeconds(),
        posts: [] // initialize empty array
      }
    },
    created() {
      // Fetch Data
      this.fetchData();
      setInterval(this.updateTime, 1000);
    },

    methods: {
      updateTime: function(){
        this.time = new Date().getHours() + ':' + new Date().getMinutes() + ':' +new Date().getSeconds();
      },
      fetchData() {
        axios.get(this.dataURL).then(response => {
          this.temp = response.data.main.temp;
          console.log(response);
        })
      }
    }
  }
</script>

<style src="../src/css/header.css"></style>