<template>
  <div id="cta" class="column center">
    <div id="cta-container">
      <h1>Excited?</h1>
      <p>
        Be sure to opt-in to hearing more about the release. This is
        not a newsletter, just a reminder for when
        <strong>Wayrise</strong> becomes open to the public.
      </p>
      <div v-if="!success" v-animate="'slide-up'">
        <form class="cta-input flexbox" @submit.prevent="submit">
          <input
            type="email"
            name="email-cta2"
            id="email-cta2"
            placeholder="Stay tuned"
            v-model="fields.email"
          />
          <button type="submit"></button>
        </form>
      </div>
      <h3 v-if="success">Thanks! We will keep you in the loop!</h3>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "call-to-action",
  data() {
    return {
      fields: {},
      errors: {},
      success: false
    };
  },
  methods: {
    submit() {
      this.errors = {};
      axios
        .post("/createEmail", this.fields)
        .then(response => {
          this.success = true;
        })
        .catch(error => {
          if (error.response.status === 422) {
            this.errors = error.response.data.errors || {};
          }
        });
    }
  }
};
</script>

<style lang="scss" scoped>
$header-bg: #393ced;
$body-bg: #23233d;
$text-color: #f8f8fb;

.animate {
  transition-delay: 0.14s;
  transition-duration: 0.25s;
  transition-timing-function: ease-in;
}

.slide-up {
  transform: translateY(100px);
  opacity: 0;
}

.slide-up.animate-active {
  transform: translateY(0px);
  opacity: 1;
}

.cta-input {
  input[type="email"] {
    border: none;
    outline: none;
    border-radius: 5px;
    height: 50px;
    width: 300px;
    font-size: 1.3rem;
    text-indent: 10px;
    margin-right: 10px;
  }

  button {
    height: 50px;
    width: 50px;
    border: none;
    outline: none;
    background: $body-bg;
    background-image: url("/css/images/send.png");
    background-position: center;
    background-size: 60%;
    background-repeat: no-repeat;
    color: white;
    border-radius: 5px;
    transition: 0.2s;
  }

  button:hover {
    background: #76d1e5;
    background-image: url("/css/images/send.png");
    background-position: center;
    background-size: 60%;
    background-repeat: no-repeat;
    cursor: pointer;
  }
}

#cta {
  background: $header-bg;
  height: 438px;
  margin-top: 55px;
  color: $text-color;

  #cta-container {
    width: 1030px;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

    h1 {
      font-weight: 800;
      font-size: 3rem;
      width: 700px;
      margin: auto;
      margin-bottom: 30px;
    }

    p {
      font-weight: 500;
      font-size: 1.4rem;
      width: 700px;
      margin: auto;
      margin-bottom: 30px;
    }
  }
}
</style>