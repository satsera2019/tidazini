<template>
    <!-- about section -->
    <section class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="../../../../assets/images/about-img.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>{{ $t("main.about") }}</h2>
                        </div>
                        <div v-for="translate in about.translate">
                            <p v-if="( translate.code === $i18n.locale)">
                                {{ translate.text }}
                            </p>
                        </div>
                        <a href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about section -->
</template>

<script>
    export default{
        data(){
            return{
                about: [],
            }
        },
        mounted() {
            axios
            .get('/api/about')
            .then(response => {this.about = response.data});
        },
    };
</script>

