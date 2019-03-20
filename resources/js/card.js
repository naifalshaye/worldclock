import { library } from '@fortawesome/fontawesome-svg-core'
import { faCoffee } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(faCoffee)

Nova.booting((Vue, router) => {
    Vue.component('world-clock', require('./components/Card'));
    Vue.component('font-awesome-icon', FontAwesomeIcon)

})
