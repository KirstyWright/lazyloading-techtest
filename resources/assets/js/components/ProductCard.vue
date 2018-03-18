<template>
    <transition name="bounce">
        <div class="product_container ">
            <img class='img-responsive' v-bind:src="item.image_url" alt="Product placeholder">
            <div class="product_details">
                <p class="product_name">{{ item.name }}</p>
                <p class="product_category"><span class='colour_dot' v-bind:style="{'background-color': item.category.hex}"></span>{{ item.category.name }}</p>
            </div>
        </div>
    </transition>
</template>

<script>
    export default {
        props: {'item':{}},
        mounted() {
        }
    }
</script>
