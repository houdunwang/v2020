<template>
  <div id="app">aaaa</div>
</template>
<script>
import config from "../config";
export default {
  data() {
    return {
      links: config.themeConfig.nav[0].items,
      base: config.base
    };
  },
  mounted() {}
};
</script>
<style lang="less" scoped>
#app {
  background-color: #f8f9fa;
}
.header {
  a {
    text-decoration: none !important;
    border-bottom: none !important;
  }
  .border-bottom {
    border-width: 3px !important;
  }
}
a {
  font-weight: 500;
  text-decoration: none !important;
  color: #2c3e50;
}
.links {
  margin-top: 50px;
}
</style>
