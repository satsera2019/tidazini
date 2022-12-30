<template>
    <ul>
      <li v-for="locale in locales" :key="locale" @click="switchLocale(locale)">
        {{locale}}
      </li>
    </ul>
</template>

<script>
    export default {
        name: 'LocaleSwitcher',
        methods: {
            switchLocale(locale) {
                // console.log(locale)

                if (this.$i18n.locale !== locale) {

                    // this.$i18n.locale = locale;

                    const route = Object.assign({}, this.$route);
                    // console.log(route.params.lang)
                    route.params.lang = locale;
                    console.log(locale)
                    console.log(route)
                    this.$router.push(route);
                    this.$i18n.locale = locale;
                }
            }
        },
        data() {
            return {
                locales: this.$i18n.availableLocales
            }
        }
    }
</script>

<style scoped>
li {
  text-decoration: underline;
  color: #459CE7;
  cursor: pointer;
}
</style>

