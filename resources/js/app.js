import Vue from "vue";
import Vuetify from "vuetify";
import Navbar from "./components/Navbar";
import QuickStart from "./components/QuickStart";
import ShortDescription from "./components/ShortDescription";
import HowItWorks from "./components/HowItWorks";
import MainDescription from "./components/MainDescription";
import FooterSection from "./components/FooterSection";

Vue.use(Vuetify);
const vuetify = new Vuetify({
  theme: {
    themes: {
      light: {
        primary: "#126FB8",
        accent: "#F7C548",
        darkblue: "#252851",
      },
    },
    options: {
      customProperties: true,
    },
  },
  icons: {
    iconfont: "mdiSvg",
  },
});

const app = new Vue({
  components: {
    Navbar,
    QuickStart,
    ShortDescription,
    HowItWorks,
    MainDescription,
    FooterSection,
  },
  vuetify,
});

app.$mount("#app");
