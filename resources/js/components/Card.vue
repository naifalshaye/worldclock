<template>
    <card class="h-auto" style="max-width:300px;">
        <div class="px-3 py-3">
            <div style="margin-top:10px; text-align: center;">

                <table align="center" class="table">
                    <tr>
                        <th>City</th>
                        <th>Time</th>
                    </tr>
                    <tr v-for="time in this.card.times">
                        <td class="td_h">
                            {{time.name}}
                        </td>
                        <td class="td_h">
                            {{time.time}}
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
    props: ['card']
  }
</script>
