<template>
    <div>
        <Navbar />

        <main>
            <slot />
        </main>

        <!-- <footer>
            &copy; Awesome Company
        </footer> -->
    </div>
</template>

<script>
import Navbar from './components/Navbar'

export default {
    components: {
        Navbar
    }
}
</script>
