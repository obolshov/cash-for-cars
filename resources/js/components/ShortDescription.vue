<template>
  <section class="inner_content">
    <v-row class="justify-center text-md-center align-center fill-height">
      <v-col cols="12" md="8">
        <div class="mb-6 text-h4" v-html="content.title"></div>
        <p v-for="paragraph in content.text" :key="paragraph">
          {{ paragraph }}
        </p>
      </v-col>
    </v-row>
  </section>
</template>

<script>
export default {
  name: "ShortDescription",
  props: ["content"],
};
</script>

<style scoped lang="sass">
section
  height: 550px
</style>
