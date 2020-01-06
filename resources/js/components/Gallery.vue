<template>

 <div class="container">
            <div align="center">
                <button class="btn btn-default filter-button" @click="getPhotos('')"  data-filter="all">All</button>
                
            <button v-for="value in albums" :key="value.id" @click="getPhotos(value.id)" class="btn btn-default filter-button">{{value.name}}</button>
                 
               
            </div>
            <br>
    <div class="row" v-if="!isLoading">
        <div v-for="photo in photos" :key="photo.id" class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a @click.prevent="photoClicked(photo)" class="thumbnail gallery-button" href="" >
         <img class="img-thumbnail"
         v-lazy="url+'images/team-member-image/'+photo.image"
         alt="Another alt text">
     </a>
 </div>
    </div>

    <div class="row" v-else>
      <div class="col-md-12 text-center">
        <h3>Loading....</h3>
      </div>
    </div>
     
     <photo-modal></photo-modal>

        
    </div>

</template>

<script>
 import {EventBus} from '../vue-asset';
 import PhotoModal from './PhotoModal';

 export default {
   props : ['albums'],

   components : {

    'photo-modal' : PhotoModal,

   },

   data(){

    return {
    
    photos : [],

    url : base_url,

    isLoading : false,

    }

   },

   mounted(){
    
    this.getPhotos();
    

   },

   methods : {
    
    getPhotos(album_id = ''){
     
     this.isLoading = true;
     axios.get(base_url+'get-album-photo?album_id='+album_id)
     .then(response => {
     
      this.photos = response.data;

      this.isLoading = false;

     });

    },

    photoClicked(photo){
     
     EventBus.$emit('photo-clicked',photo);

    }


   }



 }
 

</script>

<style scoped>
  

</style>