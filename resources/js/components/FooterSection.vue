<template>
  <footer>
    <section class="pre-footer d-flex flex-column align-center">
      <div class="text-h4 white--text mb-8 text-center">
        Receive your free valuation now
      </div>
      <v-col cols="12" sm="6">
        <get-started-button></get-started-button>
      </v-col>
    </section>
    <div class="footer">
      <div class="inner_content">
        <v-row class="justify-center">
          <v-col cols="12" md="5">
            <ul
              class="d-flex flex-column flex-md-row align-center justify-space-between"
            >
              <li v-for="item in navbarItems" :key="item" class="py-4">
                <a href="" class="navbar-items">{{ item }}</a>
              </li>
            </ul>
            <div class="primary--text" v-if="this.$vuetify.breakpoint.mdAndUp">
              ©2022 Cash for Cars | <a>Terms and Conditions</a> |
              <a>Privacy Policy</a>
            </div>
          </v-col>
          <v-spacer></v-spacer>
          <v-col cols="12" md="3" class="d-flex justify-center mb-3">
            <img :src="require('../../images/logo.svg')" alt="logo" />
          </v-col>
          <v-col
            cols="12"
            class="primary--text d-flex flex-column align-center"
            v-if="this.$vuetify.breakpoint.smAndDown"
          >
            <div class="mb-3">©2022 Cash for Cars</div>
            <div><a>Terms and Conditions</a> | <a>Privacy Policy</a></div>
          </v-col>
        </v-row>
      </div>
    </div>
  </footer>
</template>

<script>
import GetStartedButton from "./GetStartedButton";

export default {
  name: "FooterSection",
  components: { GetStartedButton },
  data() {
    return {
      navbarItems: ["How it works", "Why choose us", "FAQs", "Contact"],
    };
  },
};
</script>

<style scoped lang="sass">
.pre-footer
  background: linear-gradient(247.8deg, #126FB8 0%, #252851 100%)

.footer
  background-color: var(--v-darkblue-base)

@media screen and (min-width: 600px)
  .pre-footer
    margin-top: 6rem
    padding-top: 3rem
    padding-bottom: 4rem
  .footer
      padding: 3.6rem 0

@media screen and (max-width: 599px)
  .pre-footer
    margin-top: 3rem
    padding-top: 2.5rem
    padding-bottom: 3rem
  .footer
      padding: 2.6rem 0


ul
  list-style-type: none
  line-height: 140%
  width: 100%
  padding: 0

.navbar-items
  text-decoration: none
  color: #FFFFFF
</style>
