<template>
  <div class="header-wrapper">
    <v-toolbar height="104" elevation="0" dark class="inner_content">
      <v-row class="d-flex align-center">
        <v-col cols="4" md="3">
          <img :src="require('../../images/logo.svg')" alt="logo" />
        </v-col>

        <v-spacer></v-spacer>

        <v-app-bar-nav-icon
          v-if="this.$vuetify.breakpoint.mdAndDown"
          @click="drawer = true"
        ></v-app-bar-nav-icon>
        <v-col
          v-else
          cols="3"
          md="5"
          class="d-flex align-center justify-space-between"
        >
          <ul class="menu d-flex justify-space-between pa-0">
            <li v-for="item in navbarItems" :key="item">
              <a href="" class="white--text menu-items">{{ item }}</a>
            </li>
          </ul>
        </v-col>
      </v-row>
    </v-toolbar>

    <v-navigation-drawer v-model="drawer" absolute floating right>
      <v-list nav dense>
        <v-list-item-group>
          <v-list-item
            v-for="item in navbarItems"
            :key="item"
            class="white--text menu"
          >
            <v-list-item-title>
              <a href="" class="white--text menu-items">{{ item }}</a>
            </v-list-item-title>
          </v-list-item>
        </v-list-item-group>
      </v-list>
    </v-navigation-drawer>
  </div>
</template>

<script>
export default {
  name: "Navbar",
  data() {
    return {
      navbarItems: ["How it works", "Why choose us", "FAQs", "Contact"],
      drawer: false,
    };
  },
};
</script>

<style scoped lang="sass">
.header-wrapper, .v-toolbar, .v-navigation-drawer
  background: var(--v-darkblue-base) !important

.menu
  list-style-type: none
  width: 100%

.menu-items
  text-decoration: none
</style>
