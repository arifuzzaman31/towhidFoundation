<template>
	<div class="container">
		<div class="row">
			<div class="col-xl-6 offset-xl-3 text-center">
				<div class="section-title color-white mb-45">
					<h4 class="text-uppercase mb-20">{{ contact_us }}</h4>
					
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" v-if="errors">
				<div class="form-group">
					<div class="alert alert-danger">
						<ul>
							<li v-for="error in errors">{{ error[0] }}</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="contact-form">
					<form @submit.prevent="send()" id="contactForm">
						<div class="row  mt-30">
							<div class="col-xl-6">
								<div class="form-element">
									<i class="fa fa-user"></i>
									<input type="text" v-model="form.name" id="name" class="name" :placeholder="enter_your_name">
								</div>
							</div>
							<div class="col-xl-6">
								<div class="form-element">
									<i class="fa fa-envelope"></i>
									<input type="email" v-model="form.email" id="email" class="email" :placeholder="enter_your_email">
								</div>
							</div>
						</div>
						<div class="row  mt-30">
							<div class="col-xl-6">
								<div class="form-element">
									<i class="fa fa-phone"></i>
									<input type="tel" v-model="form.phone" id="phone" class="phone" :placeholder="your_phone_number">
								</div>
							</div>
							<div class="col-xl-6">
								<div class="form-element">
									<i class="zmdi zmdi-edit"></i>
									<input type="text" v-model="form.subject" id="subject" class="subject" :placeholder="your_subject">
								</div>
							</div>
						</div>
						<div class="row  mt-30">
							<div class="col-xl-12">
								<div class="form-element">
									<i class="fa fa-edit"></i>
									<textarea name="message" v-model="form.message" id="message" :placeholder="your_message"></textarea>
								</div>
							</div>
						</div>
						<div class="row  mt-30">
							<div class="col-xl-12 text-center">
								<div class="form-element">
									<div class="heuse-hero-btn">
										<button type="submit" class="btn btn-filled btn-grad-color" id="contact-form">{{ message }}</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="col-md-6">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.7972275649!2d90.34774391504149!3d23.79023398456972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0ec5cf6fd99%3A0xd9a31630c9949d!2s17%2C%204%20Tolarbag%20Mosque%20Rd%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1578910980140!5m2!1sen!2sbd" frameborder="0" style="border:0; width:100%; height: 430px; margin-top: 30px;" allowfullscreen=""></iframe>
			</div>
		</div>

        				<!-- 	<span
					class="error"
					v-if="(errors.hasOwnProperty('user_message'))"
					>{{ (errors.hasOwnProperty('user_message')) ? errors.user_message[0] :'' }}</span> -->
				</div>


			</template>

			<script>

				export default {

					props : [
					'contact_us',
					'enter_your_name',
					'enter_your_email',
					'your_phone_number',
					'your_subject',
					'your_message',
					'send_message',
					],

					data(){

						return {

							form : {

								name : '',
								email : '',
								phone : '',
								subject : '',
								message : ''

							},

							errors : null,

							url : base_url,

							message : 'Send Message',

						}
					},	

					methods : {

						send(){

                            this.message = 'Sending...';
							axios.post(base_url+'contact',this.form)
							.then(response => {

								if(response.data.status === 'success'){



									this.resetForm();
								}

								Swal.fire({
									position: 'top-end',
									type: response.data.status,
									title: response.data.message,
									showConfirmButton: false,
									timer: 1500
								});

							})
							.catch(error => {

								if(error.response.status === 422){

									Swal.fire("Oops", "please fill the form by correct data!", "error");
									this.errors = error.response.data.errors;   

								}





							})

							this.message = 'Send Message';


						},


						resetForm(){

							this.form = {

								name : '',
								email : '',
								phone : '',
								subject : '',
								message : ''

							};


							this.errors = null;



						}

					}


				}

			</script>