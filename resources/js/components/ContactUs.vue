<template>
  <form class="contact-form cons-contact-form" @submit.prevent="send()">
    <div class="contact-one m-b30">
      <!-- TITLE START -->
      <div class="section-head">
        <div class="mt-separator-outer separator-left">
          <div class="mt-separator">
            <h2 class="text-uppercase sep-line-one">
              <span class="font-weight-300 text-primary">Get</span> In touch
            </h2>
          </div>
        </div>
      </div>
      <!-- TITLE END -->

      <div class="form-group" v-if="errors">
        <div class="alert alert-danger">
          <ul>
            <li v-for="error in errors">{{ error[0] }}</li>
          </ul>
        </div>
      </div>

      <div class="form-group">
        <input
          name="name"
          type="text"
          v-model="form.name"
          required
          class="form-control"
          placeholder="Name"
        />
      </div>

      <div class="form-group">
        <input
          name="phone"
          type="text"
          v-model="form.phone"
          class="form-control"
          placeholder="Phone No"
        />
      </div>

      <div class="form-group">
        <input
          name="email"
          type="email"
          v-model="form.email"
          class="form-control"
          required
          placeholder="Email"
        />
      </div>
      <div class="form-group">
        <input
          name="subject"
          type="text"
          v-model="form.subject"
          class="form-control"
          required
          placeholder="Subject"
        />
      </div>

      <div class="form-group">
        <textarea
          name="message"
          v-model="form.message"
          rows="4"
          class="form-control"
          required
          placeholder="Message"
        ></textarea>
      </div>

      <div class="text-right">
        <button
          name="submit"
          type="submit"
          value="Submit"
          class="site-button btn-effect"
        >
          {{ message }}
        </button>
      </div>
    </div>
  </form>
</template>

			<script>
export default {
  data() {
    return {
      form: {
        name: "",
        email: "",
        phone: "",
        subject: "",
        message: "",
      },

      errors: null,

      url: base_url,

      message: "Send Message",
    };
  },

  methods: {
    send() {
      this.message = "Sending...";
      axios
        .post(base_url + "contact", this.form)
        .then((response) => {
          if (response.data.status === "success") {
            this.resetForm();
          }

          Swal.fire({
            position: "top-end",
            icon: response.data.status,
            title: response.data.message,
            showConfirmButton: false,
            timer: 1500,
          });
          this.message = "Send Message";
        })
        .catch((error) => {
          if (error.response.status === 422) {
            Swal.fire("Oops", "please fill the form by correct data!", "error");
            this.errors = error.response.data.errors;
          }
          this.message = "Send Message";
        });
    },

    resetForm() {
      this.form = {
        name: "",
        email: "",
        phone: "",
        subject: "",
        message: "",
      };

      this.errors = null;
    },
  },
};
</script>