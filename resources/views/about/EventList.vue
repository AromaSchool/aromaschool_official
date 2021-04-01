<template>
  <section class="history_time">
    <div class="container">
      <div class="slogan">踏著大自然的腳步，我們邁向世界…</div>
      <div class="time_block">
        <div
          class="time_box"
          v-for="year in Object.keys(events).reverse()"
          :key="year"
        >
          <h2 class="year">{{ year }}</h2>
          <ul class="event_block" v-for="event in events[year]" :key="event.id">
            <li class="event_box">
              <router-link
                :to="`/about/event/${event.id}`"
                :title="event.title"
              >
                <div class="event_title">
                  <div class="date">{{ event.date }}</div>
                  {{ event.title }}
                </div>
              </router-link>
            </li>
          </ul>
        </div>
        <infinite-loading @infinite="infiniteLoadingHandler" spinner="spiral">
          <div slot="no-more"></div>
          <div slot="no-results"></div>
        </infinite-loading>
      </div>
    </div>
  </section>
</template>

<script>
import InfiniteLoading from "vue-infinite-loading";
import moment from "moment";
import { Event } from "@/js/api";

export default {
  name: "EventList",
  components: {
    InfiniteLoading,
  },
  data: () => ({
    events: {},
    lastIndex: null,
  }),
  created() {
    // Fix: Event "infinite" called twice when in tabs and scroll position is not 0
    this.infiniteLoadingHandler = window._.debounce(this.getEventList, 100);
  },
  methods: {
    infiniteLoadingHandler() {},
    getEventList($state) {
      Event.getList({ lastIndex: this.lastIndex }).then((response) => {
        this.lastIndex = response.lastIndex;

        if (this.lastIndex) {
          for (const event of response.list) {
            const year = moment(event.date).format("YYYY");
            const date = moment(event.date).format("MM/DD");
            const item = {
              id: event.id,
              title: event.title,
              date: date,
            };

            if (year in this.events) {
              this.events[year].push(item);
            } else {
              // trigger setter to re-render,
              // because of `year` is not in `events` at the first time.
              this.$set(this.events, year, [item]);
            }
          }
          $state.loaded();
        } else {
          $state.complete();
        }
      });
    },
  },
};
</script>