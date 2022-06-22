<template>
  <section class="d-flex align-center white--text">
    <div class="background-gradient"></div>
    <div class="inner_content">
      <div class="text-h4 white--text text-center mb-6">How it works</div>
      <div class="text-h5 text-center mb-16">
        It's so easy to sell your car with CashForCars!
      </div>
      <div>
        <v-row class="justify-center align-center">
          <v-col
            v-for="(step, index) in workflowSteps"
            :key="step.title"
            cols="12"
            md="4"
            class="d-flex flex-column align-center align-md-start"
          >
            <div>
              <img
                :src="step.icon"
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
  data() {
    return {
      workflowSteps: [
        {
          icon: "../../images/google-forms.svg",
          title: "Enter Your Details",
          text: "It takes just a few minutes to complete a form providing us with details of your vehicle. Answer a few questions about your cars mileage, age, condition, etc and fill in your personal details.",
        },
        {
          icon: "../../images/finance.svg",
          title: "Receive a Price",
          text: "We will contact you within 24hrs. If you are satisfied with our valuation we will arrange for you to meet at our premises or for a member of the CashForCars team to visit you.",
        },
        {
          icon: "../../images/car-key.svg",
          title: "Sell Your Car",
          text: "Once you have met a member of our team the whole process should be concluded within 15–20 minutes. We will pay you by draft cheque or transfer the money securely by Faster Payments there and then, with no fees.",
        },
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
