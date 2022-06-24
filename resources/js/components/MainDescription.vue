<template>
  <section class="inner_content">
    <div class="description">
      <div class="text-h4 mb-8">Why choose CashForCars to sell your car?</div>
      <v-row class="justify-space-between">
        <v-col cols="12" md="6">
          <p>
            Advertising your car for sale privately can be a costly, not to
            mention frustrating process which is renowned for attracting time
            wasters.
          </p>
          <p>
            Using CashForCars eliminates the hassle of strangers visiting your
            home, the worry associated with them taking a test drive uninsured
            and guarantees peace of mind by working with a reputable company.
          </p>
          <p>
            By dealing directly with CashForCars you also eliminate the worry of
            cheques bouncing and unsatisfied customers returning to your door.
          </p>
          <p>
            CashForCars is the quick, easy and efficient way to turn your car
            into cash for whatever reason. If you are purchasing a replacement
            vehicle of a dealer, selling your car to CashForCars puts you in the
            driving seat and you will be able to negotiate a much better deal.
          </p>
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
        <v-col v-for="card in cards" :key="card.title" cols="12" md="6">
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
          <div class="text-h4 primary--text">
            What our customers have been saying
          </div>
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
              <v-carousel-item v-for="(review, index) in reviews" :key="index">
                <v-card elevation="0">
                  <v-card-text
                    class="review black--text rounded-lg py-10 px-12 text-h5"
                  >
                    <div>{{ review.text.slice(0, 110) + "..." }}</div>
                    <p class="text-right mb-0 mt-3">
                      <i>{{
                        review.author_first_name + " " + review.author_last_name
                      }}</i>
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
  props: {
    reviews: [
      { text: String, author_first_name: String, author_last_name: String },
    ],
  },
  data() {
    return {
      mdiCheckCircle: mdiCheckCircle,
      detailsList: [
        [
          "Sell your car right away",
          "Secure payment & release of ownership",
          "Sales are final",
          "Instant Payment",
          "No Fees",
          "No Strangers Visiting Your Home",
          "No Time Wasters & Tyre Kickers",
          "We'll take your car as it is",
        ],
        [
          "We'll take your car as it is",
          "Cash in hand and more of it",
          "Transparent and fair appraisal",
          "Know the price upfront",
          "Easy and convenient",
          "Outstanding Finance Settled",
          "No Bouncing Cheques",
          "Avoid Uninsured Test Drives",
        ],
      ],
      cards: [
        {
          title: "Trade In",
          text: "Don't let dealers give you less at trade-in, take a look at why CashForCars is a great way to get more money for your car! There are many great reasons to choose us over a standard dealer trade-in!",
        },
        {
          title: "Sell On Your Own",
          text: "Selling a car on your own can be unpredictable and stressful, with CashForCars you can sell your car as soon as you're ready. Check out why we're better than selling it yourself!",
        },
      ],
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
