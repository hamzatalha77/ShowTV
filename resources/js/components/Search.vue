<template>
    <div class="mysearch">
        <input type="text"  v-model="q" class="form-control">
        <div class="alert alert-secondary" v-if="this.q && getFilteredMovies.length > 0">
            {{getFilteredMovies.length}} No Movie Found <span v-if="getFilteredMovies.length > 1">S</span>.
        </div>

        <div class="alert alert-secondary" v-if="this.q && getFilteredMovies.length == 0">
            No Movie Found
        </div>
        <div class="loader" v-if="loading"></div>
<div v-for="movie in getFilteredMovies" v-bind:key="movie.id">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ movie.movie_name }}</h5>
                <p class="card-text">{{ movie.description }}</p>
            </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        data(){
            return{
                movies:[],
                q: '',
                loading: true
            }
        },

        methods:{
            fetchMovies(){
                axios.get('/api/themovie')
                .then(response => {
                    this.movies = response.data;
                    this.loading = false;
                })
                .catch(error => {console.log(error)})
            }
        },

        computed:{
            getFilteredMovies(){
                return this.movies.filter(movie=>{
                    return movie.tags.toLowerCase().includes(this.q.toLowerCase());
                })
            }
        },

        mounted() {
            this.fetchMovies();
        }
    }
</script>
<style>
.mysearch{
    position: relative;
    width: 60%;
    left: 28rem;
    top: 6rem;
}
.loader {
    border: 16px solid #f3f3f3;
    border-radius: 50%;
    border-top: 16px solid #3498db;
    width: 120px;
    height: 120px;
    -webkit-animation: spin 2s linear infinite; /* Safari */
    animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
    0% { -webkit-transform: rotate(0deg); }
    100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>
