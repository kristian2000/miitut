<script>

export default ({
    props: ['category']
})
</script>

<template>
    <div 
        class="m-2 context-category"
        @click="$router.push(`/acerca-categoria/${category.label.replaceAll(' ', '').toLowerCase()}`)"
        >
        <img :src="`${category.imagen}`" alt=""/>
        <div class="img-boxText">
            <h3 class="textColor mt-2 font-weight-bold">
                {{ category.label }}
            </h3>
            <p class="text-muted">{{ category.info}}</p>
        </div>
    </div>
</template>

<style scoped>
    .context-category {
      cursor: pointer;
    }

    .context-category h3 {
      text-align: center;
    }

    .context-category img {
      border-radius: 15px;
      width: 320px;
      height: 220px;
    }

    .context-category:hover {
      opacity: 0.6;
    }
</style>