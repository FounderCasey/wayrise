<template>
  <div id="dashboard">
    <div id="side-menu">
      <h1>{{company}}</h1>
      <div>
        <h3 @click="inbox = !inbox">
          Inboxes
          <span v-if="!inbox">
            <div class="down-arrow"></div>
          </span>
          <span v-if="inbox">
            <div class="up-arrow"></div>
          </span>
        </h3>
        <div class="list" v-if="inbox">
          <div class="item">
            <div class="item-wrapper">
              <mail-icon size="0.9x" class="icon"></mail-icon>
              <p>Support</p>
            </div>
            <div class="notif"></div>
          </div>
          <div class="item">
            <div class="item-wrapper">
              <mail-icon size="0.9x" class="icon"></mail-icon>
              <p>Sales</p>
            </div>
          </div>
          <div class="item">
            <div class="item-wrapper">
              <phone-icon size="0.9x" class="icon"></phone-icon>
              <p>(123)321-1234</p>
            </div>
          </div>
          <div class="item">
            <div class="item-wrapper">
              <twitter-icon size="0.9x" class="icon"></twitter-icon>
              <p>@company</p>
            </div>
          </div>
          <div class="item">
            <div class="item-wrapper">
              <instagram-icon size="0.9x" class="icon"></instagram-icon>
              <p>@company</p>
            </div>
          </div>
          <div class="item">
            <div class="item-wrapper">
              <message-square-icon size="0.9x" class="icon"></message-square-icon>
              <p>Live Chat</p>
            </div>
          </div>
        </div>
      </div>
      <div>
        <h3 @click="announcements = !announcements">
          Announcements
          <span v-if="!announcements">
            <div class="down-arrow"></div>
          </span>
          <span v-if="announcements">
            <div class="up-arrow"></div>
          </span>
        </h3>
        <div class="list" v-if="announcements">
          <div class="item">
            <mail-icon size="0.9x" class="icon"></mail-icon>
            <p>Support</p>
          </div>
          <div class="item">
            <mail-icon size="0.9x" class="icon"></mail-icon>
            <p>Sales</p>
          </div>
          <div class="item">
            <phone-icon size="0.9x" class="icon"></phone-icon>
            <p>(123)321-1234</p>
          </div>
          <div class="item">
            <twitter-icon size="0.9x" class="icon"></twitter-icon>
            <p>@company</p>
          </div>
          <div class="item">
            <instagram-icon size="0.9x" class="icon"></instagram-icon>
            <p>@company</p>
          </div>
          <div class="item">
            <message-square-icon size="0.9x" class="icon"></message-square-icon>
            <p>Live Chat</p>
          </div>
        </div>
      </div>
      <div>
        <h3 @click="team = !team">
          Team
          <span v-if="!team">
            <div class="down-arrow"></div>
          </span>
          <span v-if="team">
            <div class="up-arrow"></div>
          </span>
        </h3>
      </div>
    </div>
  </div>
</template>

<script>
import {
  MessageSquareIcon,
  MailIcon,
  TwitterIcon,
  PhoneIcon,
  InstagramIcon
} from "vue-feather-icons";

export default {
  name: "dashboard",
  data() {
    return {
      inbox: true,
      announcements: false,
      team: false,
      selected: 0
    };
  },
  props: ["company"],
  components: {
    MessageSquareIcon,
    MailIcon,
    TwitterIcon,
    PhoneIcon,
    InstagramIcon
  }
};
</script>

<style lang="scss" scoped>
.down-arrow {
  border-right: solid 3px;
  border-bottom: solid 3px;
  height: 7px;
  width: 7px;
  transform: rotate(45deg) translateY(-3px);
  margin-left: 7px;
}

.up-arrow {
  border-left: solid 3px;
  border-top: solid 3px;
  height: 7px;
  width: 7px;
  transform: rotate(45deg) translateY(3px);
  margin-left: 11px;
}

.notif {
  background: #393ced;
  width: 7px;
  height: 7px;
  border-radius: 9px;
  margin-left: 15px;
  box-shadow: 0px 0px 3px #393cde67;
}

#dashboard {
  height: 100vh;
  margin: 0;
}

#side-menu {
  height: 100%;
  width: 240px;
  border-right: #dcdcdc solid;
  padding-left: 25px;
  overflow: scroll;

  h1 {
    margin-top: 0px;
    margin-bottom: 35px;
    padding-top: 25px;
  }

  h3 {
    display: flex;
    align-items: center;

    &:hover {
      color: #393ced;
      cursor: pointer;
    }
  }

  .list {
    .item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding-right: 25px;

      &:hover {
        color: #393ced;
        cursor: pointer;
      }

      .item-wrapper {
        display: flex;
        align-items: center;
      }

      p {
        padding-left: 5px;
      }

      .icon {
        transform: translateY(1px);
      }
    }
  }
}
</style>
