<template>
  <section class="d-flex align-center white--text">
    <div class="background-gradient"></div>
    <div class="inner_content">
      <div
        class="text-h4 white--text text-center mb-6"
        v-text="content.title"
      ></div>
      <div class="text-h5 text-center mb-16" v-text="content.subtitle"></div>
      <div>
        <v-row class="justify-center align-center">
          <v-col
            v-for="(step, index) in content.list"
            :key="step.title"
            cols="12"
            md="4"
            class="d-flex flex-column align-center align-md-start"
          >
            <div>
              <img
                :src="icons[index]"
                alt="icon"
                class="rounded-circle accent mb-4"
              />
            </div>
            <div class="small-title font-weight-bold mb-3">
              {{ index + 1 }}. {{ step.title }}
            </div>
            <p class="white--text text-center text-md-start">{{ step.text }}</p>
          </v-col>
        </v-row>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "HowItWorks",
  props: ["content"],
  data() {
    return {
      icons: [
        "../../images/google-forms.svg",
        "../../images/finance.svg",
        "../../images/car-key.svg",
      ],
    };
  },
};
</script>

<style scoped lang="sass">
section
  @media screen and (min-width: 960px)
    height: 760px
  @media screen and (max-width: 959px)
    height: 1200px

.background-gradient
  z-index: -1
  position: absolute
  left: -15%
  width: 130%
  background: linear-gradient(251.8deg, #126FB8 0%, #252851 100%)
  transform: rotate(-4deg)
  @media screen and (min-width: 960px)
    height: 760px
  @media screen and (max-width: 959px)
    height: 1200px

.small-title
  font-size: 1.5rem!important
</style>
