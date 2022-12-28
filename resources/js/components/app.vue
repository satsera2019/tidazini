<template>
    <mainHeader></mainHeader>
    <router-view/>
    <mainFooter></mainFooter>
</template>

<script>
    
    import mainFooter from '../components/user_panel/layouts/footer.vue'
    import mainHeader from '../components/user_panel/layouts/main_header.vue'

    export default{
        components: {
            mainHeader,
            mainFooter
        }
    };

</script>