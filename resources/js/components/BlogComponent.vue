<template>
<!--START Blog Detail-->
    <div class="container" >
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section " >
                <h2 class="mb-4"><span>Recent</span> Blog</h2>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            </div>
        </div>
        <!--START Blog Detail-->
        <div class="row">
        <div class="col-md-6 col-lg-4 " v-for="article in articles.data" :key="article.id">
            <div class="blog-entry"  >
            <a href="" class="block-20 d-flex align-items-end" :style="{ backgroundImage: `url(${getimage(article.image)})`}">
                <div class="meta-date text-center p-2">
                <span class="day">{{article.created_at | myday}}</span>
                <span class="mos">{{article.created_at | mymounth}}</span>
                <span class="yr">{{article.created_at | myyear}}</span>
                </div>
            </a>
            <div class="text bg-white p-4">
                <h3 class="heading"><a href="">{{article.title}}</a></h3>
                <p>{{article.description }}</p>
                <div class="d-flex align-items-center mt-4">
                    <p class="mb-0"><a href="" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                    <p class="ml-auto mb-0">
                        <a href="" class="mr-2">{{article.categorie.nom_cat}}</a>
                        <a href="" class="meta-chat"><span class="icon-chat"></span> 3</a>
                    </p>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="center_div">
    <pagination align='center' :data="articles" @pagination-change-page="getResults"></pagination>
    </div>
</div>
  <!--END Blog Detail-->
</template>


<script>
    export default {
        data(){ return {
            articles:{}
        }},

        methods:{

            getResults(page = 1) {
			axios.get('api/admin/posts?page=' + page)
				.then(response => {
					this.articles = response.data;
				});
		    },
            loadArticles(){
            axios.get("http://127.0.0.1:8000/api/admin/posts")
            .then(({data}) => (this.articles = data));
            },
            getimage(img){
                return "storage/"+img;
            }
        },

        created() {
            this.loadArticles();
            console.log('Blog Component mounted.');
        }

    }
</script>
