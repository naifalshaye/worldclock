<template>
    <card class="h-auto" style="max-width:300px;">
        <div class="px-3 py-3">
            <div style="margin-top:10px; text-align: center;" id="app">

                <table align="center" class="table">
                    <tr>
                        <th>City</th>
                        <th>Time</th>
                    </tr>
                    <tr v-for="time in this.times">
                        <td class="td_h">
                            {{time.name}}
                        </td>
                        <td class="td_h">
                            {{time.time}}
                            <span class="fa fa-moon" v-show="time.night" style="color:#7a7a7a;"></span>
                            <span class="fa fa-sun" v-show="!time.night" style="color:#F7941D;"></span>
                        </td>
                    </tr>
                </table>
            </div>

        </div>
    </card>
</template>
<style>
    .td_h {
      height: 35px !important;
    }
</style>
<script>

  export default {
    props: ['card'],
    data() {
      return {
        times:[],
      }
    },
    created: function() {
      this.getTime();
      this.timer = setInterval(this.getTime, 1500)
    },
    mounted() {
        this.getTime();

    },
    methods: {
      getTime() {
        this.timezones = [];

        Nova.request().post('/nova-vendor/world-clock/get_times', {
          timezones: this.card.timezones,
          timeFormat: this.card.timeFormat
        })
          .then(res => {
            this.times = res.data;
          });
      },
    },
  }
</script>
