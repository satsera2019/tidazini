<template>
    <div v-bind:class = "( $route.name == 'home'  )?'':'sub_page fixed-top'">
        <div class="hero_area">
            <div v-if="( $route.name == 'home'  )" class="hero_bg_box">
                <img src="../../../../assets/images/hero-bg.png" alt="">
            </div>


            <header class="header_section" v-bind:class = "( $route.name == 'home'  )?'bg-warning fixed-top':''">
                <div class="container">
                    <nav class="navbar navbar-expand-lg custom_nav-container">
                        <routerLink to="/">
                            <a class="navbar-brand">
                                <span>{{ $t("main.app_name") }}</span>
                            </a>
                        </routerLink>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class=""> </span>
                        </button>

                        

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                            <li class="nav-item">
                                <routerLink :to="`/${$i18n.locale}/home`" class="nav-link">
                                    {{ $t("main.home") }}
                                </routerLink>
                            </li>
                            <li class="nav-item active">
                                <routerLink :to="`/${$i18n.locale}/about`" class="nav-link">
                                    {{ $t("main.about") }}
                                    <span class="sr-only">(current)</span>
                                </routerLink>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Departments</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Doctors</a>
                            </li>
                            <li class="nav-item">
                                <routerLink :to="`/${$i18n.locale}/contact`" class="nav-link">
                                    {{ $t("main.contact") }}
                                </routerLink>
                            </li>
                            <form class="form-inline">
                                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </form>
                            </ul>
                        </div>

                        <select v-model="$i18n.locale" id="locale" >
                            <option v-for="locale in $i18n.availableLocales" :value="locale">{{ locale }}</option>
                        </select>
                        
                    </nav>
                </div>
            </header>

            <slider v-if="( $route.name == 'home'  )"></slider>


        </div>
    </div>
</template>

<script>
    import slider from './slider.vue'

    export default{
        components: {
            slider,
        },
        methods:{
            setLocale(locale)
            {
                console.log(locale);
                this.$i18n.locale = locale
            }
        }
    }

</script>