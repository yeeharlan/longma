<template>
  <div class="home-slider">
    <div class="common-topbar">
      <a href="/"><h3>Longma</h3></a>
      <div @click="slide()" class="all-nav fr">
        <img src="../assets/slider.png" width="18">
      </div>
      <a class="login-in fr" id="login-in" href="javascript:;" @click="login()">登录</a>
    </div>
    <div class="title-top">
      <ul>
        <li>
          <a
            class="data-category"
            data="design"
            href="javascript:;"
            @mouseenter="showT('design')"
            @mouseleave="outT('design')"
          >产品/设计</a>
        </li>
        <li>
          <a
            class="data-category"
            data="front"
            href="javascript:;"
            @mouseenter="showT('front')"
            @mouseleave="outT('front')"
          >前端开发</a>
        </li>
        <li>
          <a
            class="data-category"
            data="back"
            href="javascript:;"
            @mouseenter="showT('back')"
            @mouseleave="outT('back')"
          >后端开发</a>
        </li>
        <li>
          <a
            class="data-category"
            data="app"
            href="javascript:;"
            @mouseenter="showT('app')"
            @mouseleave="outT('app')"
          >移动端</a>
        </li>
        <li>
          <a
            class="data-category"
            data="service"
            href="javascript:;"
            @mouseenter="showT('service')"
            @mouseleave="outT('service')"
          >服务端</a>
        </li>
        <li>
          <a
            class="data-category"
            data="sql"
            href="javascript:;"
            @mouseenter="showT('sql')"
            @mouseleave="outT('sql')"
          >数据库</a>
        </li>
        <li>
          <a
            class="data-category"
            data="test"
            href="javascript:;"
            @mouseenter="showT('test')"
            @mouseleave="outT('test')"
          >运维/测试</a>
        </li>
        <li>
          <a
            class="data-category"
            data="web"
            href="javascript:;"
            @mouseenter="showT('web')"
            @mouseleave="outT('web')"
          >网站建设</a>
        </li>
      </ul>
    </div>
    <div class="common-category design" @mouseenter="showT('design')" @mouseleave="outT('design')">
      <div class="item-content fl">
        <span>设计</span>
        <ul>
          <router-link tag="li" :to="{path:'/about',query:{search:'Axure'}}">
            <a>Axure</a>
          </router-link>
          <router-link tag="li" :to="{path:'/about',query:{search:'Photoshop CC'}}">
            <a>Photoshop CC</a>
          </router-link>
          <router-link tag="li" :to="{path:'/about',query:{search:'Illustrator CC'}}">
            <a>Illustrator CC</a>
          </router-link>
        </ul>
      </div>
    </div>
    <div class="common-category front" @mouseenter="showT('front')" @mouseleave="outT('front')">
      <div class="item-content fl">
        <span>前端</span>
        <ul>
          <router-link tag="li" :to="{path:'/about',query:{search:'HTML/CSS'}}">
            <a>HTML/CSS</a>
          </router-link>
          <router-link tag="li" :to="{path:'/about',query:{search:'JavaScript'}}">
            <a>JavaScript</a>
          </router-link>
          <router-link tag="li" :to="{path:'/about',query:{search:'Vue.js'}}">
            <a>Vue.js</a>
          </router-link>
          <router-link tag="li" :to="{path:'/about',query:{search:'React.JS'}}">
            <a>React.JS</a>
          </router-link>
          <router-link tag="li" :to="{path:'/about',query:{search:'jQuery'}}">
            <a>jQuery</a>
          </router-link>
        </ul>
      </div>
    </div>
    <!-- ==================== back ======================== -->
    <div class="common-category back" @mouseenter="showT('back')" @mouseleave="outT('back')">
      <div class="item-content fl">
        <span>后端</span>
        <ul>
          <router-link tag="li" :to="{path:'/about',query:{search:'PHP'}}">
            <a>PHP</a>
          </router-link>
          <router-link tag="li" :to="{path:'/about',query:{search:'JAVA'}}">
            <a>JAVA</a>
          </router-link>
          <router-link tag="li" :to="{path:'/about',query:{search:'Python'}}">
            <a>Python</a>
          </router-link>
        </ul>
      </div>
    </div>
    <!-- ==================== app ======================== -->
    <div class="common-category app" @mouseenter="showT('app')" @mouseleave="outT('app')">
      <div class="item-content fl">
        <span>移动端</span>
        <ul>
          <router-link tag="li" :to="{path:'/about',query:{search:'web app'}}">
            <a>web app</a>
          </router-link>
          <router-link tag="li" :to="{path:'/about',query:{search:'Android'}}">
            <a>Android</a>
          </router-link>
        </ul>
      </div>
    </div>
    <!-- ==================== service ======================== -->
    <div
      class="common-category service"
      @mouseenter="showT('service')"
      @mouseleave="outT('service')"
    >
      <div class="item-content fl">
        <span>数据库</span>
        <ul>
          <router-link tag="li" :to="{path:'/about',query:{search:'Linux'}}">
            <a>Linux</a>
          </router-link>
        </ul>
      </div>
    </div>
    <!-- ==================== sql ======================== -->
    <div class="common-category sql" @mouseenter="showT('sql')" @mouseleave="outT('sql')">
      <div class="item-content fl">
        <span>数据库</span>
        <ul>
          <router-link tag="li" :to="{path:'/about',query:{search:'MySQL'}}">
            <a>MySQL</a>
          </router-link>
          <router-link tag="li" :to="{path:'/about',query:{search:'Redis'}}">
            <a>Redis</a>
          </router-link>
          <router-link tag="li" :to="{path:'/about',query:{search:'MongoDB'}}">
            <a>MongoDB</a>
          </router-link>
        </ul>
      </div>
    </div>
    <!-- ==================== test ======================== -->
    <div class="common-category test" @mouseenter="showT('test')" @mouseleave="outT('test')">
      <div class="item-content fl">
        <span>测试</span>
        <ul>
          <router-link tag="li" :to="{path:'/about',query:{search:'功能测试'}}">
            <a>功能测试</a>
          </router-link>
          <router-link tag="li" :to="{path:'/about',query:{search:'性能测试'}}">
            <a>性能测试</a>
          </router-link>
          <router-link tag="li" :to="{path:'/about',query:{search:'接口测试'}}">
            <a>接口测试</a>
          </router-link>
          <router-link tag="li" :to="{path:'/about',query:{search:'自动化测试'}}">
            <a>自动化测试</a>
          </router-link>
        </ul>
      </div>
    </div>
    <!-- ==================== web ======================== -->
    <div class="common-category web" @mouseenter="showT('web')" @mouseleave="outT('web')">
      <div class="item-content fl">
        <span>网站建设</span>
        <ul>
          <router-link tag="li" :to="{path:'/about',query:{search:'Zend Framework'}}">
            <a>Zend Framework</a>
          </router-link>
          <router-link tag="li" :to="{path:'/about',query:{search:'ThinkPHP'}}">
            <a>ThinkPHP</a>
          </router-link>
          <router-link tag="li" :to="{path:'/about',query:{search:'模板建站'}}">
            <a>模板建站</a>
          </router-link>
        </ul>
      </div>
    </div>
     <nav id="nav" class="slideNav">
      <ul>
        <li></li>
        <li>产品设计</li>
        <li>前端开发</li>
        <li>后端开发</li>
        <li>移动端</li>
        <li>服务端</li>
        <li>数据库</li>
        <li>运维/测试</li>
        <li>网站建设</li>
      </ul>
      <a href="javascript:;" @click="login()">登录</a>
    </nav>
  </div>
</template>
<script>
export default {
  created() {
    $(document).mouseup(function(e) {
      var pop = $("#nav");
      if (!pop.is(e.target) && pop.has(e.target).length === 0) {
        $("#nav").css("right", "-200px");
      }
    });
  },
  methods: {
    showT: function(e) {
      // var data = $(this).attr('data');
      $("." + e).css("display", "block");
    },
    outT: function(e) {
      $("." + e).css("display", "none");
    },
    login: function() {
      $(".common-login").fadeIn();
    },
    slide: function() {
      $("#nav").css("right", "0px");
    }
  }
};
</script>
<style lang="scss" scoped>
.slideNav ul li{
    border-bottom: 1px solid #444;
    height: 40px;
    line-height: 40px;
    font-size: 16px;
    padding: 0 10px;
}
</style>


