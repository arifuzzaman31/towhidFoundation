<template>
	
        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive col-md-12" v-lazy="url+'images/our-gallery/'+photo.image">
                    </div>
                    <div class="modal-footer">
                        <h4 class="modal-title text-center" id="image-gallery-title">{{ photo.caption  }}</h4>
 
                    </div>
                </div>
            </div>
        </div>

</template>

<script>
	import {EventBus} from '../vue-asset';
	export default
	{

        
        data(){

        	return {
             
             photo : {},
             url : base_url,

        	}
        },

        mounted()
        {
           var _this = this;
        	EventBus.$on('photo-clicked',function(photo){
             
             _this.photo = photo;

             $('#image-gallery').modal('show');

        	})


        }

	}

</script>