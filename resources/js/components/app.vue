<template>
    
    <router-view/>
    <mainFooter></mainFooter>
</template>

<script>
    
    import mainFooter from '../components/user_panel/layouts/footer.vue'

    export default{
        components: {
            mainFooter
        }
    };

</script>