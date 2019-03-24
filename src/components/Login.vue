<template>
    <div class="common-login">
      <i class="login-close" @click="logclose()"></i>
      <div class="login-title">
        <a href="#">登录</a>
      </div>
      <form class="common-form">
        <label>
          <div class="common-field">
            <input type="text" class="input-text" name="user">
          </div>
        </label>
        <label>
          <div class="common-field">
            <input type="password" class="input-text" name="pwd">
          </div>
        </label>
        <div>
          <button class="login-button">登录</button>
        </div>
      </form>
    </div>  
</template>
<script>
export default {
    methods: {
        logclose: function() {
            $(".common-login").fadeOut();
        },
    }
}
</script>

