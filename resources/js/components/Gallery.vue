<template>

 <div class="container">
            <div align="center">
                <button class="btn btn-default filter-button" @click="changePhoto('')"  data-filter="all">All</button>
                
            <button v-for="value in albums" :key="value.id" @click="changePhoto(value.id)" class="btn btn-default filter-button">{{value.name}}</button>
                 
               
            </div>
            <br>
    <div class="row" v-if="!isLoading">
        <div v-for="photo in photos" :key="photo.id" class="col-lg-4 col-md-4 col-xs-6 thumb">
        <a @click.prevent="photoClicked(photo)" class="thumbnail gallery-button" href="" >
         <img class="img-thumbnail"
         v-lazy="url+'images/our-gallery/'+photo.image"
         alt="Another alt text">
     </a>
 </div>
    </div>

    <div class="row" v-else>
      <div class="col-md-12 text-center">
        <img style="height: 150px" :src="url+'images/loading.gif'">
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

    is_firstime : 'yes',



    }

   },

   mounted(){
    
    this.getPhotos();
    

   },

   methods : {
    
    getPhotos(album_id = ''){
     
     this.isLoading = true;
     axios.get(base_url+'get-album-photo?album_id='+album_id
      +"&is_firstime="+this.is_firstime)
     .then(response => {
     
      this.photos = response.data;

      this.isLoading = false;

     });

    },

    changePhoto(album_id){
    
    this.is_firstime = 'no';
    this.getPhotos(album_id);

    },


    photoClicked(photo){
     
     EventBus.$emit('photo-clicked',photo);

    }


   }



 }
 

</script>

<style scoped>
  

</style>