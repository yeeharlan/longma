<template>
  <div class="home">
    <NavBar></NavBar>
    <div class="common-search">
      <section>
        <fieldset>
          <div class="search-input">
            <input class="search-text" type="text" name>
          </div>
          <input class="search-submit" type="submit" value="Go">
        </fieldset>
      </section>
    </div>
    <Login></Login>
  </div>
</template>

<script>
// @ is an alias to /src
import NavBar from '@/components/NavBar.vue'
import Login from '@/components/Login.vue'
export default {
  //  name: 'home',
    components: {
      NavBar,
      Login
    }
};
</script>

<style>
.fl {
  float: left;
}
.fr {
  float: right;
}
.home-slider {
  position: relative;
}
.home-slider .common-topbar {
  height: 50px;
  border-bottom: 1px solid hsla(0, 0%, 100%, 0.15);
  background: #292d36;
  line-height: 50px;
  text-align: left;
}
.home-slider .common-topbar .login-in {
  color: #fff;
  line-height: 50px;
  padding-right: 10px;
}
.home-slider .common-topbar .all-nav {
  display: none;
}
.home-slider .common-topbar h3 {
  padding-left: 20px;
  text-align: center;
  color: #fff;
  display: inline-block;
  display: inline;
}
.home-slider .common-topbar .all-nav {
  width: 50px;
  height: 50px;
  text-align: center;
  border-right: 1px solid hsla(0, 0%, 100%, 0.15);
}
.home-slider .title-top {
  height: 50px;
  background: #2e353b;
}
.home-slider .title-top ul {
  margin-left: 10px;
}
.home-slider .title-top ul li {
  float: left;
  height: 50px;
  line-height: 50px;
}
.home-slider .title-top ul li a {
  color: #fff;
  padding: 0 16px;
  display: block;
}
.home-slider .title-top ul li a:hover {
  color: #00c1de;
}
.home-slider .common-category {
  padding: 16px 10px 0;
  position: absolute;
  width: 665px;
  height: 350px;
  border: 1px solid #ddd;
  left: 10px;
  z-index: 2;
  background: #fff;
  display: none;
}
.home-slider .common-category .item-content {
  float: left;
  width: 33%;
  height: 100%;
}
.home-slider .common-category .item-content span {
  display: inline-block;
  margin: 0 0 6.9px 8px;
  width: 180px;
  height: 30px;
  border-bottom: 1px solid #eff3f5;
  font-size: 14px;
  font-weight: 700;
  color: #000;
}
.home-slider .common-category .item-content ul li {
  padding: 0 0 0 8px;
  line-height: 24px;
  font-size: 12px;
  color: #000;
  text-align: left;
}
.home-slider .common-category .item-content ul li:hover {
  background: #f2f4f5;
}
.common-search {
  height: 200px;
  margin: 0 auto;
  width: 900px;
}
.search-submit {
  bottom: 0;
  display: inline-block;
}
.common-search fieldset {
  position: relative;
  width: 640px;
}
.common-search section {
  margin-top: 150px;
  margin-left: auto;
  margin-right: auto;
  width: 645px;
}
.search-input {
  height: 34px;
  padding: 5px 10px;
  position: relative;
  vertical-align: top;
  width: 519px;
  border: 1px solid #bbb;
  display: inline-table;
}

.search-text {
  background: transparent;
  border: none;
  color: #333;
  float: left;
  font-size: 16px;
  height: 30px;
  line-height: 30px;
  margin-top: 3px;
  outline: none;
  width: 519px;
}
.search-submit {
  -webkit-appearance: none;
  border: 0;
  border-radius: 0;
  cursor: pointer;
  font-family: "Microsoft YaHei";
  font-size: 18px;
  /*height: 46px;*/
  left: 540px;
  letter-spacing: 1px;
  outline: none;
  position: absolute;
  top: 0;
  vertical-align: top;
  width: 100px;
  background: #33cde5;
  color: #fff;
}
/* search-list */
.search-result {
  height: 50px;
  position: relative;
  margin: 30px;
}
.result-main {
  margin: 30px;
}
.result .res-list {
  font-size: 13px;
  line-height: 20px;
  margin-bottom: 21px;
  position: relative;
  word-wrap: break-word;
}
.result .res-list h3 {
  font-weight: 400;
  font-size: 16px;
  margin-bottom: 3px;
}
.result .res-list p {
  text-align: left;
  word-wrap: break-word;
  z-index: 1;
}
/* login in */
.common-login {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translateX(-50%) translateY(-50%);
  width: 500px;
  height: 250px;
  margin: auto;
  padding: 20px;
  box-shadow: 0 0 3px 3px #868686;
  background: #fff;
  z-index: 1;
  display: none;
}

.common-login .login-title a {
  display: inline-block;
  height: 38px;
  line-height: 38px;
  font-size: 18px;
  text-align: center;
  color: #33cde5;
}
.login-close {
  position: absolute;
  top: 15px;
  right: 20px;
  width: 13px;
  height: 13px;
  cursor: pointer;
  background: url("../assets/x.png");
}
.common-form .common-field {
  margin-bottom: 20px;
}
.common-form .input-text {
  border: 1px solid #bbb;
  padding: 5px 8px;
  width: 252px;
  font-size: 100%;
  font: 13px/1.5 "Microsoft YaHei";
  color: #777;
  margin: 0;
}
.common-form .login-button {
  display: inline-block;
  width: 270px;
  line-height: 40px;
  background: #33cde5;
  color: #fff;
  font-size: 16px;
  text-align: center;
  border-radius: 3px;
  cursor: pointer;
  text-decoration: none;
}

@media only screen and (max-width: 870px) {
  .title-top {
    display: none;
  }
  .common-login {
    width: 80%;
  }
  .home-slider .common-topbar .all-nav {
    display: block;
  }
  .home-slider .common-topbar .login-in {
    display: none;
  }
  .common-search section {
    width: auto;
  }
  .common-search fieldset {
    width: auto;
  }
  .common-search {
    width: 90%;
  }
  .search-input {
    width: 70%;
  }
  .search-text {
    width: 70%;
  }
  .search-submit {
    left: auto;
  }
}
.slideNav {
  position: fixed;
  right: -200px;
  top: 0;
  width: 200px;
  height: 100%;
  border: 1px solid #ccc;
  background: #2e353b;
  border-left: 1px solid hsla(0, 0%, 100%, 0.15);
  transition: right linear 0.3s;
  z-index: 100;
}
.slideNav ul li {
  color: #fff;
}
</style>

