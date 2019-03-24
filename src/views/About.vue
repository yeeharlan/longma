<template>
  <div id="about">
    <NavBar></NavBar>
    <div class="search-result">
      <fieldset>
		<div class="search-input">
			<input class="search-text" type="text" name="keyword" :value="keyword">
		</div>
			<input class="search-submit" type="submit" value="Go">	
      </fieldset>
	</div>	
	<div class="result-main">

		<ul class="result">
			<li class="res-list" v-for="item in infolist" :key="item">
				<h3><router-link to="/content" target="_blank">{{ item.title }}</router-link></h3>
				<p>{{ item.date_time }} </p>
				<em>fdsfasdfasdf111</em>
			</li>
		</ul>
	</div>
    <Login></Login>
  </div>
</template>
<script>
import NavBar from '@/components/NavBar.vue'
import Login from '@/components/Login.vue'
export default {
  data () {
    return {
      infolist: '',
      keyword: ''
    }
	},

  components: {
    NavBar,
    Login
	},
	created(){
		this.searchlist()
	},
	watch:{
		'$route'(to,from){
				this.searchlist()
				$(".common-category").css("display", "none")
		}
	},
	methods: {
		searchlist: function(){
			let v = this.$route.query.search
			this.keyword = v
			this.getdata()
		},
		getdata(){
            this.axios.get('https://www.easy-mock.com/mock/5c917fc3cf64444234accfe1/api/tablist').then((response)=>{
								console.log(response.data.userlist);
								this.infolist = response.data.userlist
            }).catch((response)=>{
                console.log(response)
            })
        }

	}
}
</script>
<style>
.search-result fieldset {
  position: relative;
  width: 640px;
}
</style>


