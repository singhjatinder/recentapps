<template>
  <div id="app">
    <header class="row">
      <nav>
        <router-link to="/">Home</router-link>
        <router-link to="/EarlyLife">Early Life</router-link>
        <router-link to="/Education">Education</router-link>
        <router-link to="/Careers">Careers</router-link>
        <router-link to="/Photography">Photography</router-link>
        <router-link to="/ContactMe">Contact Me</router-link>
        <router-link to="/TimeAndWeather">Time & Weather</router-link>
      </nav>
    </header>

    <router-view/>
  </div>
</template>

<style src="../src/css/header.css"></style>