<template>
  <section class="d-flex">
    <div class="inner_content">
      <v-row
        class="align-content-center justify-md-space-between align-md-center fill-height"
      >
        <v-col cols="12" md="6" class="mb-10 mb-md-0">
          <div
            class="primary--text mb-6"
            :class="$vuetify.breakpoint.mdAndUp ? 'text-h3' : 'text-h4'"
            v-text="content.title"
          ></div>
          <p
            :class="{ 'text-h5': $vuetify.breakpoint.mdAndUp }"
            v-html="content.text"
          ></p>
        </v-col>
        <v-col cols="12" md="5">
          <v-form>
            <v-text-field
              label="ENTER REG"
              solo
              hide-details
              color="input-field"
            >
            </v-text-field>
            <v-checkbox
              v-model="checkbox"
              label="I confirm that the vehicle I am enquiring about has less than 100,000 miles."
            ></v-checkbox>
            <get-started-button></get-started-button>
          </v-form>
        </v-col>
      </v-row>
    </div>
  </section>
</template>

<script>
import GetStartedButton from "./GetStartedButton";

export default {
  name: "QuickStart",
  components: { GetStartedButton },
  props: ["content"],
  data() {
    return {
      checkbox: true,
    };
  },
};
</script>

<style scoped lang="sass">
section
  background: linear-gradient(79.95deg, rgba(18, 111, 184, 0.2) 2.62%, rgba(18, 111, 184, 0) 98.24%)
  height: 720px

.v-text-field  ::v-deep
  .v-text-field__slot
    margin: 0 auto

  .v-label, input
    color: var(--v-primary-base)!important
    font-family: UKNumberPlate, sans-serif
  input
    padding: 0
    text-align: center


@media screen and (min-width: 600px)
  .v-text-field  ::v-deep
    height: 4.125rem

    .v-text-field__slot
      height: 4rem

    .v-label, input
      min-height: 4rem !important
      font-size: 3rem
      line-height: 3rem

    .v-label
      top: calc(50% - 1.5rem)!important
      left: calc(50% - 7rem)!important

@media screen and (max-width: 599px)
  .v-text-field  ::v-deep
    height: 3.375rem
    .v-text-field__slot
      height: 3rem

    .v-label, input
      min-height: 3rem !important
      font-size: 2.25rem
      line-height: 2.25rem

    .v-label
      top: calc(50% - 1.12rem)!important
      left: calc(50% - 5.5rem)!important
</style>
