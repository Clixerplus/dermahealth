<template>
    <ul class="cart-item" v-if="items">
        <li v-for="item in items" >
            <div class="cart-item-image">
                <img :src="item.image" :alt="item.name"/>
            </div>
            <div class="cart-item-info">
                <h4>{{ item.name }}</h4>
                <p class="price">{{ item.price }}</p>
            </div>
            <div class="cart-item-close">
                <a :href="item.remove" data-toggle="tooltip" data-title="Remove">&times;</a>
            </div>
        </li>
    </ul>
</template>

<script>
    export default {
        mounted() {
            this.getCart()
        },

        data : () => {
            return {
                empty: true,
                items: null,
            }
        },
        methods : {
            async getCart() {
               var url = '/cart/content';
               let response = await axios.get(url);
               this.items = response.data.content
               console.log(this.items[0].image);
            },
        }
    }
</script>
