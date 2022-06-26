<template>
  <section class="inner_content">
    <div class="description">
      <div class="text-h4 mb-8" v-text="benefits.title"></div>
      <v-row class="justify-space-between">
        <v-col cols="12" md="6">
          <p
            v-for="(paragraph, index) in benefits.text"
            :key="index"
            v-text="paragraph"
          ></p>
        </v-col>
        <v-col cols="12" md="5">
          <v-img
            :src="require('../../images/people.png')"
            alt="funny guys doing funny things"
          />
        </v-col>
      </v-row>
    </div>
    <div class="details font-weight-bold">
      <div
        v-if="this.$vuetify.breakpoint.mdAndUp"
        class="d-flex details-container rounded-lg justify-space-around py-6"
      >
        <v-col class="mx-6" cols="4" v-for="(list, i) in detailsList" :key="i">
          <div v-for="(listItem, j) in list" :key="j" class="pa-3 d-flex">
            <v-icon class="mr-4" color="accent">{{ mdiCheckCircle }}</v-icon>
            {{ listItem }}
          </div>
        </v-col>
      </div>
      <v-carousel
        v-else
        hide-delimiter-background
        light
        height="auto"
        class="pt-6 px-2"
        :show-arrows="false"
      >
        <v-carousel-item
          v-for="(list, i) in detailsList"
          :key="i"
          class="pb-16"
        >
          <div class="details-container rounded-lg">
            <div v-for="(listItem, j) in list" :key="j" class="pa-3 d-flex">
              <div>
                <v-icon class="mr-4" color="accent">{{
                  mdiCheckCircle
                }}</v-icon>
              </div>
              <div>{{ listItem }}</div>
            </div>
          </div>
        </v-carousel-item>
      </v-carousel>
    </div>
    <div class="blue-cards">
      <v-row>
        <v-col
          v-for="card in blueCards.list"
          :key="card.title"
          cols="12"
          md="6"
        >
          <v-card class="card rounded-lg pa-4" color="primary" elevation="0">
            <v-card-title
              class="text-h4 white--text"
              v-text="card.title"
            ></v-card-title>
            <v-card-text class="white--text" v-text="card.text"></v-card-text>
          </v-card>
        </v-col>
      </v-row>
    </div>
    <div class="reviews">
      <v-row class="justify-space-between">
        <v-col cols="12" md="5">
          <div class="text-h4 primary--text" v-text="reviews.title"></div>
        </v-col>
        <v-col cols="12" md="6">
          <div>
            <v-carousel
              height="auto"
              hide-delimiter-background
              light
              :show-arrows="false"
              class="pb-16"
            >
              <v-carousel-item
                v-for="(review, index) in reviews.list"
                :key="index"
              >
                <v-card elevation="0">
                  <v-card-text
                    class="review black--text rounded-lg py-10 px-12 text-h5"
                  >
                    <div>{{ review.text.slice(0, 110) + "..." }}</div>
                    <p class="text-right mb-0 mt-3">
                      <i>{{ review.author }}</i>
                    </p>
                  </v-card-text>
                </v-card>
              </v-carousel-item>
            </v-carousel>
          </div>
        </v-col>
      </v-row>
    </div>
  </section>
</template>

<script>
import { mdiCheckCircle } from "@mdi/js";

export default {
  name: "MainDescription",
  computed: {
    detailsList() {
      let length = this.details.text.length;
      return [
        this.details.text.slice(0, length / 2),
        this.details.text.slice(length / 2),
      ];
    },
  },
  props: ["benefits", "details", "blueCards", "reviews"],
  data() {
    return {
      mdiCheckCircle: mdiCheckCircle,
    };
  },
};
</script>

<style scoped lang="sass">

@media screen and (min-width: 600px)
  .description
    margin-top: 6rem
  .details
    margin-top: 7rem
  .blue-cards
    margin-top: 6rem
  .reviews
    margin-top: 5.5rem

@media screen and (max-width: 599px)
  .description
    margin-top: 4rem
  .details
    margin-top: 3rem
  .blue-cards
    margin-top: 3rem
  .reviews
    margin-top: 4rem

.details-container, .review
  background-color: rgba(18, 111, 184, 0.1)


.v-carousel ::v-deep .v-btn
  color: var(--v-primary-base)

p
  margin-bottom: 1.5rem
</style>
