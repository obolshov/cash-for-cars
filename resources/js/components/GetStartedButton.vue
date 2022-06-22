<template>
  <v-btn
    color="accent"
    class="mr-4 darkblue--text text-capitalize font-weight-bold"
    large
    rounded
  >
    Get Started
    <v-icon class="ml-3">{{ mdiArrowRightBoldCircleOutline }}</v-icon>
  </v-btn>
</template>

<script>
import { mdiArrowRightBoldCircleOutline } from "@mdi/js";

export default {
  name: "GetStartedButton",
  data() {
    return {
      mdiArrowRightBoldCircleOutline: mdiArrowRightBoldCircleOutline,
    };
  },
};
</script>

<style scoped lang="sass">
button
  width: 100%
.v-btn.v-size--large
  font-size: 1.125rem !important
</style>
