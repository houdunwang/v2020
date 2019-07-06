<template>
  <div id="app">
    <div class="header">
      <div class="border-bottom border-info header shadow">
        <div class="bg-white border-gray pb-2 pt-2 shadow-sm font-weight-bold">
          <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white pl-0 border-0">
              <a class="mr-5 text-info navbar-brand font-weight-bold" href="/">
                <i class="fa fa-flag"></i> houdunren
              </a>
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-lg-0">
                  <li class="nav-item dropdown mr-3">
                    <a
                      class="nav-link"
                      href="https://www.houdunren.com/edu/front/system?sid=1&amp;mid=2"
                    >系统学习</a>
                  </li>
                  <li class="nav-item mr-3">
                    <a
                      class="nav-link"
                      href="https://www.houdunren.com/edu/front/lesson?sid=1&amp;mid=2"
                    >实战课程</a>
                  </li>
                  <li class="nav-item mr-3">
                    <a
                      class="nav-link"
                      href="https://www.houdunren.com/edu/front/video?sid=1&amp;mid=2"
                    >最近更新</a>
                  </li>
                  <div class="dropdown-divider"></div>
                  <li class="nav-item mr-3">
                    <a class="nav-link" href="https://www.houdunren.com/edu/front/topic">话题讨论</a>
                  </li>
                  <li class="nav-item mr-3">
                    <a class="nav-link" href="https://www.houdunren.com/edu/front/sign">签到打卡</a>
                  </li>
                  <li class="nav-item mr-3">
                    <a class="nav-link" href="https://www.houdunren.com/edu/front/live">八点直播</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="container links pb-5">
      <div class="card-deck mb-4 bg-white border p-5 row">
        <div class="col-4 mb-3" v-for="(v,k) in links">
          <a :href="base.substr(0,base.length-1)+v.link+'.html'" class="card p-1 shadow-sm">
            <div class="card-body">
              <header class="card-title h4 font-weight-normal">{{v.text}}</header>
              <p class="card-text text-secondary font-weight-normal">{{v.desc}}</p>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="container-fluid bg-white shadow-sm border-top text-secondary p-4">
      <div class="container">
        <div class="text-center p-3 p-sm-3">
          我们的使命：传播互联网前沿技术，帮助更多的人实现梦想
          <hr />Copyright © 2010-2018 houdunren.com All Rights Reserved
          京ICP备12048441号-3
          <div class="small text-secondary mt-2">
            <i class="fa fa-telegram ml-2" aria-hidden="true"></i> :
            <a href="mailto:2300071698@qq.com" class="text-secondary">2300071698@qq.com</a>
            <div class="mt-2">
              编码:
              <a href="http://www.aoxiangjun.com">海豚日记</a>
            </div>
          </div>
          <script
            type="text/javascript"
            src="http://tajs.qq.com/stats?sId=63802236"
            charset="UTF-8"
          ></script>
          <script type="text/javascript">
  var cnzz_protocol =
    "https:" == document.location.protocol ? "https://" : "http://";
  document.write(
    unescape(
      "%3Cspan id='cnzz_stat_icon_1276850215'%3E%3C/span%3E%3Cscript src='" +
        cnzz_protocol +
        "s96.cnzz.com/z_stat.php%3Fid%3D1276850215%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"
    )
  );
          </script>
          <span id="cnzz_stat_icon_1276850215">
            <a
              href="https://www.cnzz.com/stat/website.php?web_id=1276850215"
              target="_blank"
              title="站长统计"
            >
              <img border="0" hspace="0" vspace="0" src="https://icon.cnzz.com/img/pic1.gif" />
            </a>
          </span>
          <script
            src="https://s96.cnzz.com/z_stat.php?id=1276850215&amp;show=pic1"
            type="text/javascript"
          ></script>
          <script
            src="https://c.cnzz.com/core.php?web_id=1276850215&amp;show=pic1&amp;t=z"
            charset="utf-8"
            type="text/javascript"
          ></script>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import "bootstrap/dist/css/bootstrap.css";
import "font-awesome/css/font-awesome.min.css";
import config from "../config";
export default {
  data() {
    return {
      links: config.themeConfig.nav[0].items,
      base: config.base
    };
  },
  mounted() {
    console.log("Component mounted.");
  }
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
