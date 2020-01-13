<template>
  <div id="welcome">
    <header class="flexbox">
      <div class="header-container column">
        <h1>Gain full control of your customer conversations.</h1>
        <div v-if="!success">
          <form class="cta-input flexbox animate-in" @submit.prevent="submit">
            <input
              type="email"
              name="email-cta1"
              id="email-cta1"
              placeholder="Stay tuned"
              v-model="fields.email"
            />
            <button type="submit"></button>
          </form>
          <div class="spacer"></div>
        </div>
        <h3 v-if="success">Thanks! We will keep you in the loop!</h3>
        <div v-if="success" class="spacer"></div>
      </div>
      <div class="carousel">
        <div class="carousel__item" v-for="(item, index) in messages" :key="index">
          <div class="carousel__item-body">
            <div class="flexbox">
              <p class="title">{{ item[0] }}</p>
              <mail-icon v-if="index == 0" size="1x" class="custom-class"></mail-icon>
              <twitter-icon v-if="index == 1" size="1x" class="custom-class"></twitter-icon>
              <mail-icon v-if="index == 2" size="1x" class="custom-class"></mail-icon>
              <message-square-icon v-if="index == 3" size="1x" class="custom-class"></message-square-icon>
            </div>
            <p id="name">{{ item[2] }}</p>
            <div class="flexbox">
              <p id="message">{{ item[3] }}</p>
              <p id="time">{{ item[1] }}</p>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div id="conquer" class="max">
      <h1>Conquer your workspace</h1>
      <p>
        Wayrise provides a decluttered and shared inbox to ensure your
        customers are being taken care of and your team is working
        effortlessly and smooth.
      </p>
      <div class="flexbox">
        <div class="card column center" v-animate="'slide-up'">
          <img src="/css/images/collab.png" alt="Instant collaboration artwork" />
          <h2>Instant Collaboration</h2>
          <p>
            Wayrise offers instant collaboration between team
            members to elminate a clustered workspace.
          </p>
        </div>
        <div class="card column center" v-animate="'slide-up'">
          <img src="/css/images/shared.png" alt="Shared Inboxes artwork" />
          <h2>Shared Inboxes</h2>
          <p>
            Wayrise ensures that your team has a platform for all of
            your conversational channels.
          </p>
        </div>
        <div class="card column center" v-animate="'slide-up'">
          <img src="/css/images/analytics.png" alt="Analytics artwork" />
          <h2>Big Analytics</h2>
          <p>
            Wayrise keeps track of important data for you, helping
            your team improve constantly.
          </p>
        </div>
      </div>
      <div class="flexbox bottom">
        <div class="card column center" v-animate="'slide-up'">
          <img src="/css/images/macros.png" alt="Macros artwork" />
          <h2>Mighty Macros</h2>
          <p>
            Wayrise offers a wide set of macros and custom rules to
            ensure your emails are handled with care.
          </p>
        </div>
        <div class="card column center" v-animate="'slide-up'">
          <img src="/css/images/integrations.png" alt="Integrations artwork" />
          <h2>Integrations</h2>
          <p>
            Do you need live chat support or social media support?
            You’re covered with our integrations.
          </p>
        </div>
      </div>
    </div>
    <call-to-action></call-to-action>
  </div>
</template>

<script>
import { MessageSquareIcon, MailIcon, TwitterIcon } from "vue-feather-icons";
import axios from "axios";
import CallToAction from "./CTA";

export default {
  name: "welcome",
  data() {
    return {
      messages: [
        [
          "Help with ordering annually",
          "4 min",
          "Damon Allen",
          "I was wondering if it's possible to place..."
        ],
        [
          "Are there any deals currently",
          "8 min",
          "@Aaliyah",
          "Are there any deals currently for..."
        ],
        [
          "How do I get access?",
          "12 min",
          "Damon Allen",
          "I subscribed to the pro plan but..."
        ],
        [
          "I was wondering",
          "7 min",
          "(321) 431-1234",
          "I was wondering if it's possible to place..."
        ]
      ],
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
  },
  components: {
    MessageSquareIcon,
    MailIcon,
    TwitterIcon,
    CallToAction
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

.animate-in {
  animation-name: animate-in;
  animation-duration: 0.75s;
  animation-timing-function: ease-in;
}

@keyframes animate-in {
  from {
    transform: translateY(100px);
    opacity: 0;
  }

  to {
    transform: translateY(0px);
    opacity: 1;
  }
}

#welcome {
  background: $body-bg;
  color: $text-color;

  .spacer {
    height: 70px;
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

  header {
    padding: 40px 0 70px 0;
    height: 540px;
    background-image: url("/css/images/header-bg.svg");
    background-repeat: no-repeat;
    background-position: bottom;
    display: flex;
    justify-content: center;

    .header-container {
      text-align: left;
      padding-right: 40px;

      h1 {
        font-weight: 800;
        font-size: 60px;
        width: 550px;
        margin: auto;
        margin-bottom: 30px;
      }
    }
  }

  #conquer {
    text-align: center;

    .flexbox {
      margin-top: 57px;
    }

    .card {
      margin: 0 15px;

      img {
        width: auto;
        height: 150px;
      }

      p {
        font-size: 1.25rem;
      }

      &:first-of-type {
        margin-left: 0;
      }

      &:last-of-type {
        margin-right: 0;
      }
    }
  }
}

$animation-timing: 15s;
$carousel-items: 4;
$animation-delay-fraction: $animation-timing / $carousel-items;
$animation-steps-fraction: 100 / $carousel-items;
$slide-change-timing: 3; // percentage of total animation cycle

*,
*::before,
*::after {
  box-sizing: border-box;
}

.carousel {
  position: relative;
  width: 360px;
  display: flex;
  justify-content: center;
  flex-direction: column;
}

.carousel__item {
  display: flex;
  position: absolute;
  width: 100%;
  height: 80px;
  opacity: 0;
  will-change: transform, opacity;
  animation: carousel-animate-vertical $animation-timing linear infinite;
}

@for $i from 1 through ($carousel-items - 1) {
  .carousel__item:nth-child(#{$i}) {
    animation-delay: calc(#{$animation-delay-fraction} * #{$i - 2});
  }
}

.carousel__item:last-child {
  animation-delay: calc(-#{$animation-delay-fraction} * 2);
}

.carousel__item-body {
  width: 100%;
  padding: 9px;
  background-color: #fff;
  border-radius: 3px;
  color: $body-bg;

  p {
    margin: 2px 0;
  }

  .flexbox {
    display: flex;
    justify-content: space-between;
  }
}

.title {
  font-size: 14px;
  font-weight: 700;
  margin-top: 10px;
}

#time {
  font-size: 10px;
  color: #969696;
  padding-top: 3px;
}

#name {
  font-size: 14px;
  color: #707070;
  font-weight: 500;
}

#message {
  font-size: 14px;
  font-weight: 500;
}

@keyframes carousel-animate-vertical {
  0% {
    transform: translateY(100%) scale(0.5);
    opacity: 0;
    visibility: hidden;
  }

  #{$slide-change-timing}%,
  #{$animation-steps-fraction}% {
    transform: translateY(100%) scale(0.7);
    opacity: 0.4;
    visibility: visible;
  }

  #{$animation-steps-fraction + $slide-change-timing}%,
  #{$animation-steps-fraction * 2}% {
    transform: translateY(0) scale(1);
    opacity: 1;
    visibility: visible;
  }

  #{($animation-steps-fraction * 2) + $slide-change-timing}%,
  #{$animation-steps-fraction * 3}% {
    transform: translateY(-100%) scale(0.7);
    opacity: 0.4;
    visibility: visible;
  }

  #{($animation-steps-fraction * 3) + $slide-change-timing}% {
    transform: translateY(-100%) scale(0.5);
    opacity: 0;
    visibility: visible;
  }

  100% {
    transform: translateY(-100%) scale(0.2);
    opacity: 0;
    visibility: hidden;
  }
}
</style>
