<template>
  <div id="pricing">
    <header>
      <div>
        <h1>Simple Pricing.</h1>
      </div>
    </header>
    <div id="info">
      <div class="container">
        <div class="card">
          <h3>Lite</h3>
          <p class="light">Organize and Build a Collaborative Workspace</p>
          <div class="price">
            <h2>$</h2>
            <h1>5</h1>
            <p>
              per
              <br />user
            </p>
          </div>
          <button>Start Free Trial</button>
          <div class="features">
            <p>
              <strong>What's included?</strong>
            </p>
            <p>Instant Collaoration</p>
            <p>Simple Macros</p>
            <p>3 Inboxes</p>
          </div>
        </div>
        <div class="card">
          <h3>Plus</h3>
          <p class="light">Add Integrations and SMS Inboxes to Your Team</p>
          <div class="price">
            <h2>$</h2>
            <h1>15</h1>
            <p>
              per
              <br />user
            </p>
          </div>
          <button>Start Free Trial</button>
          <div class="features">
            <p>
              <strong>What's included?</strong>
            </p>
            <p>Lite Package</p>
            <p>Custom Macros</p>
            <p>Basic Integrations</p>
            <p>5 Inboxes</p>
            <p>SMS & Social Inboxes</p>
          </div>
        </div>
        <div class="card">
          <h3>Premium</h3>
          <p class="light">Unlock All the Features for Your Team</p>
          <div class="price">
            <h2>$</h2>
            <h1>30</h1>
            <p>
              per
              <br />user
            </p>
          </div>
          <button>Start Free Trial</button>
          <div class="features">
            <p>
              <strong>What's included?</strong>
            </p>
            <p>Plus Package</p>
            <p>All Integrations</p>
            <p>Wayrise CRM</p>
            <p>50+ Inboxes</p>
          </div>
        </div>
      </div>
    </div>
    <call-to-action></call-to-action>
  </div>
</template>

<script>
import CallToAction from "./CTA";

export default {
  name: "pricing",
  components: {
    CallToAction
  }
};
</script>

<style lang="scss" scoped>
$header-bg: #393ced;
$body-bg: #23233d;
$text-color: #f8f8fb;

#pricing {
  background: #23233d;
  color: $body-bg;

  header {
    width: 100%;
    div {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 325px;
      background: $header-bg;

      h1 {
        font-weight: 800;
        font-size: 60px;
        color: $text-color;
        margin: auto;
        transform: translateY(-30px);
      }
    }
  }

  #info {
    .container {
      display: flex;
      justify-content: space-evenly;
      padding: 80px 0;

      .card {
        text-align: center;
        width: 330px;
        padding: 15px 0;
        background: $text-color;
        border-radius: 3px;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.267);

        h3 {
          font-size: 40px;
          margin: 0;
        }

        .light {
          font-size: 21px;
          color: rgb(116, 116, 116);
          margin: 8px 0 0px;
        }

        .price {
          display: flex;
          justify-content: center;
          align-items: center;

          h1 {
            font-size: 100px;
            margin: 0 3px;
          }

          h2 {
            font-size: 50px;
            font-weight: 700;
            margin: 0;
          }
        }

        button {
          width: 250px;
          border: none;
          height: 50px;
          border-radius: 5px;
          background: $header-bg;
          color: #f8f8fb;
          font-size: 20px;
          font-weight: 600;
          margin: 5px 0 25px 0;

          &:hover {
            cursor: pointer;
          }
        }
      }
    }
  }
}
</style>
