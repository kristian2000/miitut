<template>
    <div class="container my-5">
      <h1>Home</h1>
      <p>
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
        voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
        clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit
        amet.
      </p>

      <h2>Amet sit</h2>
      <p>
        Eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
        voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
        clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit
        amet.
      </p>
    </div>
</template>

<script>
import LayoutDefault from '../../layouts/LayoutDefault'

export default {
  name: 'Home',
  created(){
      console.log('Home Created')
      if (this.$store.state.user){
          this.$router.push('dashboard');
      }
    //   this.$emit('update:layout', LayoutDefault)
  }
};
</script>
