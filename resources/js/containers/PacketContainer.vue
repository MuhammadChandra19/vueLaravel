<script>
// import SupportSection from "../components/SupportSection";
export default {
  data() {
    return {
      packs: []
    };
  },
  created() {
    this.fetchPackages();
  },
  computed: {
    convertCurrency(value) {
      return new Intl.NumberFormat("de-DE").format(value);
    }
  },
  methods: {
    fetchPackages() {
      fetch("api/paket")
        .then(res => res.json())
        .then(res => {
          this.packs = res.data;
        });
    }
  }
};
</script>

<template>
  <div>
    <support-section></support-section>
    <div class="text-center mb-5">
      <h3 class="montserrat-bold">Paket Hosting Singapura yang Tepat</h3>
      <h4>Diskon 40% + Domain dan SSL Gratis untuk Anda</h4>
    </div>
    <div class="container mb-5">
      <div class="justify-content-center">
        <div class="row">
          <div class="col-lg-3 p-0" v-for="pack in packs" v-bind:key="pack.id">
            <div class="border">
              <div class="border-bottom text-center">
                <h5 class="m-auto p-2 montserrat-bold">{{pack.name}}</h5>
              </div>
              <div class="border-bottom text-center">
                <p
                  style=" text-decoration: line-through;"
                >Rp {{new Intl.NumberFormat("de-DE").format(pack.price)}}</p>
                <span class="d-flex justify-content-center">
                  <p>Rp</p>
                  <h1
                    class="montserrat-bold"
                  >{{new Intl.NumberFormat("de-DE").format(pack.price).split(".")[0]}}</h1>
                  <p
                    class="montserrat-bold"
                  >.{{new Intl.NumberFormat("de-DE").format(pack.price).split(".")[1]}}</p>/bln
                </span>
              </div>
              <div class="border-bottom text-center mt-3">
                <p>{{pack.users}} Pengguna Terdaftar</p>
              </div>
              <div class="border-bottom text-center mt-3">
                <p v-for="feature in pack.features" v-bind:key="feature">{{feature}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <capability-section></capability-section>
    <packet-detail></packet-detail>
  </div>
</template>