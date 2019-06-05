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
                            <span v-show="time.night" style="color:#F7941D;"><font-awesome-icon icon="moon" /></span>
                            <span v-show="!time.night" style="color:#F7941D;"><font-awesome-icon icon="sun" /></span>
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
      setInterval(this.getTime, this.card.ms)
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
