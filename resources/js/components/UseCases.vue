<template>
  <div id="use-cases">
    <header>
      <div class="header-container">
        <h1>How We Use Wayrise</h1>
        <div class="flexbox">
          <div class="card" @click="selected = 0">
            <img src="css/images/support.png" alt="Customer Support Illustration" />
            <h2>Customer Support</h2>
          </div>
          <div class="card" @click="selected = 1">
            <img src="css/images/property.png" alt="Customer Support Illustration" />
            <h2>Rental & Property</h2>
          </div>
          <div class="card" @click="selected = 2">
            <img src="css/images/sales.png" alt="Customer Support Illustration" />
            <h2>Sales & Logistics</h2>
          </div>
        </div>
      </div>
    </header>
    <div id="info">
      <div v-if="selected == 0">
        <div>
          <h1>Customer Support</h1>
          <p>
            Providing customer support and service for your business is essential.
            Great customer service is one of the best ways to grow your business;
            Wayrise provides an essential tool for businesses to maintain clear and
            uniform communication.
          </p>
        </div>
        <div>
          <h3>How Wayrise Helps?</h3>
          <p>
            Wayrise offers a real-time collaborative workspace for your teams
            communication between each other and your valued customers. Maximize
            your effectiveness when dealing with any customer related issues.
          </p>
        </div>
        <div class="list">
          <h4>Reminders</h4>
          <h4>Comments</h4>
          <h4>Macros</h4>
          <h4>Notifications</h4>
        </div>
      </div>
      <div v-if="selected == 1">
        <div>
          <h1>Rental & Property</h1>
          <p>
            Providing customer support and service for your business is essential.
            Great customer service is one of the best ways to grow your business;
            Wayrise provides an essential tool for businesses to maintain clear and
            uniform communication.
          </p>
        </div>
        <div>
          <h3>How Wayrise Helps?</h3>
          <p>
            Wayrise offers a real-time collaborative workspace for your teams
            communication between each other and your valued customers. Maximize
            your effectiveness when dealing with any customer related issues.
          </p>
        </div>
        <div class="list">
          <h4>Reminders</h4>
          <h4>Comments</h4>
          <h4>Macros</h4>
          <h4>Notifications</h4>
        </div>
      </div>
      <div v-if="selected == 2">
        <div>
          <h1>Sales & Logistics</h1>
          <p>
            Providing customer support and service for your business is essential.
            Great customer service is one of the best ways to grow your business;
            Wayrise provides an essential tool for businesses to maintain clear and
            uniform communication.
          </p>
        </div>
        <div>
          <h3>How Wayrise Helps?</h3>
          <p>
            Wayrise offers a real-time collaborative workspace for your teams
            communication between each other and your valued customers. Maximize
            your effectiveness when dealing with any customer related issues.
          </p>
        </div>
        <div class="list">
          <h4>Reminders</h4>
          <h4>Comments</h4>
          <h4>Macros</h4>
          <h4>Notifications</h4>
        </div>
      </div>
    </div>
    <call-to-action></call-to-action>
  </div>
</template>

<script>
import CallToAction from "./CTA";

export default {
  name: "use-cases",
  data() {
    return {
      selected: 0
    };
  },
  components: {
    CallToAction
  }
};
</script>

<style lang="scss" scoped>
#use-cases {
  background: #23233d;
}

header {
  padding: 40px 0 70px 0;
  background: #393ced;
  display: flex;
  justify-content: center;
  color: #f8f8fb;

  .header-container {
    text-align: center;
    padding-right: 40px;

    .card {
      padding: 30px 80px;
      transition: 0.4s;

      &:last-of-type {
        padding-right: 0;
      }

      &:first-of-type {
        padding-left: 0;
      }

      h2 {
        font-size: 30px;
      }

      &:hover {
        cursor: pointer;
        transform: scale(1.1);
      }
    }

    img {
      width: 200px;
    }

    h1 {
      font-weight: 800;
      font-size: 60px;
      margin: auto;
      margin-bottom: 30px;
    }
  }
}

#info {
  background: #23233d;
  color: #f8f8fb;

  width: 720px;
  margin: auto;

  font-size: 21px;

  text-align: center;

  h1 {
    font-size: 40px;
  }

  h3 {
    font-size: 30px;
  }

  .list {
    width: 100%;
    display: flex;

    h4 {
      padding: 0 30px;
      font-size: 21px;
    }
  }
}
</style>
