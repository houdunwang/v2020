<template>
  <div id="page">
    <div class="col-4 mb-3" v-for="(v,k) in links">
      <a :href="base.substr(0,base.length-1)+v.link+'.html'" class="card p-1 shadow-sm">
        <div class="card-body">
          <header class="card-title h4 font-weight-normal">{{v.text}}</header>
          <p class="card-text text-secondary font-weight-normal">{{v.desc}}</p>
        </div>
      </a>
    </div>
  </div>
</template>
<script>
import config from "../config";
export default {
  data() {
    return {
      links: [
        {
          text: "PHP",
          link: "/php/1 前言",
          desc: "系统学习PHP"
        },
        {
          text: "Linux",
          link: "/linux/ubuntu",
          desc: "高效使用Linux"
        }
      ],
      base: config.base
    };
  },
  mounted() {}
};
</script>
<style lang="less" scoped>
</style>