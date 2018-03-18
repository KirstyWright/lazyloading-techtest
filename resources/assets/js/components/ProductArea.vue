<template>
    <div>
        <div id="product_area" class='row'>
            <product-card v-for="(product) in products" v-bind:item="product" :key="product.id"></product-card>
        </div>
        <div class="row text-center">
            <div class="col-md-12 text-center">
                <button class="btn btn-primary" @click="loadMore">Load More</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {'paginationInitial':{type: Object}},
        data(){
            return {
                products:this.paginationInitial.data,
                pagination:this.paginationInitial
            }
        },
        mounted() {
        },
        methods:{
            loadMore(){
                axios.get("/products/json?page="+(this.pagination.current_page+1)).then(response=>{
                    for (var i = 0; i < response.data.data.length; i++) {
                        this.products.push(response.data.data[i]);
                    }
                    this.pagination = response.data;
                })
                .catch(response=>{
                    //error
                });

            }
        }
    }
</script>
